<?php

namespace AppBundle\Entity;

class Feed extends Model
{
    
    private $url;
    private $content;
    
    private $parsedXml;
    
    public function __construct($url, $content) 
    {
       $this->url = $url;
       $this->content = $content;
    }
    
    public function getContent()
    {
        return $this->content;
    }
    
    public function getUrl()
    {
        return $this->url;
    }
    
    public function setParsedXML($parsedXml)
    {
        $this->parsedXml = $parsedXml;
    }
    
    public function getParsedXML()
    {
        return $this->parsedXml;
    }
}
