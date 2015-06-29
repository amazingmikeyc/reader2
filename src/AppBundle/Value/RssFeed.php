<?php

namespace AppBundle\Value;


class RssFeed extends AbstractValue
{
    
    protected $title;
    protected $link;
    protected $description;
    
    protected $articles;
    
    public function getTitle() {
        return $this->title;
    }

    public function getLink() {
        return $this->link;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getArticles() {
        return $this->articles;
    }
    
    public function setArticles(Collection\ArticleCollection $articles) 
    {
        $this->articles = $articles;
    }


}