<?php

namespace AppBundle\Entity;

class Feed extends Model
{
    
    private $url;
    private $content;
    
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
}
