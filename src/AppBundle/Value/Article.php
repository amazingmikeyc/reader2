<?php

namespace AppBundle\Value;

class Article extends AbstractValue
{
    
    /**
     * Constructor
     * 
     * @param $feed
     */
    public function __construct($feed)
    {
        parent::__construct($feed);
        
        if ($this->content_encoded) {
            $this->content = $this->content_encoded;
        } else {
            $this->content = $this->description;
        }
    }
    
    protected $title;
    protected $description;
    protected $link;
    
    protected $content_encoded;
    
    
    protected $content;
}