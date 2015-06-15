<?php

namespace AppBundle\Value;


class RssFeed extends AbstractValue
{
    
    private $title;
    private $link;
    private $description;
    
    private $items;
    
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