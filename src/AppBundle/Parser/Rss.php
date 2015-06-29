<?php

namespace AppBundle\Parser;

use AppBundle\Value\RssFeed;
use AppBundle\Value\Article;
use AppBundle\Value\Collection\ArticleCollection;

use AppBundle\Exception\InvalidRSSException;

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
                
                $header = $this->createValueObject($parsedXML->channel->children());
                $body = $this->createArticleValueObjects($parsedXML->channel->item);

                return [
                    'info' => $header->toArray(), 
                    'articles' => $body->toArray()                   
                ];
            } else {
                throw new InvalidRSSException('Invalid RSS');             
            }
        } catch (\Exception $e) {
            throw new InvalidRSSException($e->getMessage());           
        }
    }
    
    /**
     * 
     * @param \SimpleXMLElement $xmlElement
     * 
     * @return RssFeed
     */
    private function createValueObject(\SimpleXMLElement $xmlElement)
    {
        return new \AppBundle\Value\RssFeed($xmlElement);
    }
    
    /**
     * 
     * @param \SimpleXMLElement  $xmlElements
     * 
     * @return ArticleCollection
     */
    private function createArticleValueObjects(\SimpleXMLElement $xmlElements)
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
     * @param \SimpleXMLElement  $xmlElements
     * 
     * @return array
     */
    private function getNamespaces(\SimpleXMLElement $xmlElements)
    {
        $namespaces = $xmlElements->getDocNamespaces(true);
        return $namespaces;        
    }
    
    /**
     * Merge in namespaced elements that we recognise into the normal array
     * 
     * 
     * @param \SimpleXMLElement  $xmlElements
     * 
     * @return array
     */
    private function flattenNamespaces(\SimpleXMLElement $xmlElements)
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
     * A basic check to see if our XML claims to be RSS
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
