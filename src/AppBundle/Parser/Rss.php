<?php

namespace AppBundle\Parser;

/**
 * A class to parse the XML
 */
class Rss {

    
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
                return false;                
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            return false;
        }
    }
    
    private function createValueObject( $xmlElement)
    {
        return new \AppBundle\Value\RssFeed($xmlElement);
    }
    
    private function createArticleValueObjects($xmlElements)
    {               
        $collection = new \AppBundle\Value\ArticleCollection();
        foreach ($xmlElements as $element) {
            $article = new \AppBundle\Value\Article($element);
            $collection->push($article);
        }
        return $collection;
    }
    
    /**
     * 
     */
    private function getNamespaces(array $namespaces)
    {
        foreach ($namespaces as $namespace) {
            //$
        }
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
        return ($xmlElements->channel && ($xmlElements->item || $xmlElements->channel->item));
    }
         
    
}
