<?php

namespace AppBundle\Parser;

use AppBundle\Value\RssFeed;
use AppBundle\Value\Article;
use AppBundle\Value\Collection\ArticleCollection;

/**
 * A class to parse the XML
 */
class Rss {

    
    private $supportedNamespaces = [
        'http://web.resource.org/rss/1.0/modules/content/' => 'content',
        'http://purl.org/rss/1.0/modules/content/' => 'content'
    ];
    
    /**
     * Load the XML string into a Simple XML Element
     * 
     * @param string $xml
     * 
     * @return type
     */
    public function parse($xml)
    {
        \libxml_use_internal_errors(true);
        
        try {
            $parsedXML = \simplexml_load_string($xml);           
                       
            if (\libxml_get_errors() == [] && $this->checkIsRSS($parsedXML)) {  
                
                $namespaces = $this->getNamespaces($parsedXML);
                
                $header = $this->createValueObject($parsedXML->channel->children());
                $body = $this->createArticleValueObjects($parsedXML->channel->item);

                return [
                    'info' => $header->toArray(), 
                    'articles' => $body->toArray()
                   
                ];
            } else {
                return false;                
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
    }
    
    private function createValueObject($xmlElement)
    {
        return new \AppBundle\Value\RssFeed($xmlElement);
    }
    
    private function createArticleValueObjects($xmlElements)
    {               
        $collection = new \AppBundle\Value\Collection\ArticleCollection();
        foreach ($xmlElements as $element) {
            $article = new \AppBundle\Value\Article($this->flattenNamespaces($element));
            $collection->push($article);
        }
        return $collection;
    }
    
    /**
     * 
     */
    private function getNamespaces($xmlElements)
    {
        $namespaces = $xmlElements->getDocNamespaces(true);
        return $namespaces;        
    }
    
    
    private function flattenNamespaces($xmlElements)
    {
        $namespaces = $this->getNamespaces($xmlElements);    
        $returnElements = [];
        
        foreach ($namespaces as $namespace) {          
            $children = $xmlElements->children($namespace);           
            foreach($children as $key => $value) {               
                if (in_array($namespace, array_keys($this->supportedNamespaces))) {
                    $returnElements[$this->supportedNamespaces[$namespace].'_'.$key] = (string) $value;
                }
            }
        }

        return array_merge($returnElements, (array) $xmlElements->children());
    }
    
    /**
     * A basic check to see if our XML has channel and item
     * elements which RSS requires
     * 
     * @param \SimpleXMLElement $xmlElements
     * 
     * @return boolean
     */
    public function checkIsRSS(\SimpleXMLElement $xmlElements)
    {
        //well, it *thinks* it's RSS
        return ($xmlElements->getName() == 'rss');
    }
         
    
}
