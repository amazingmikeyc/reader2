<?php

namespace AppBundle\Value;


class RssFeed extends AbstractValue
{
    
    protected $title;
    protected $link;
    protected $description;
    
    protected $items;
    
    public function getTitle() {
        return $this->title;
    }

    public function getLink() {
        return $this->link;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getItems() {
        return $this->items;
    }


}