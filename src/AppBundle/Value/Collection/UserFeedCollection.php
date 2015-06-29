<?php

namespace AppBundle\Value\Collection;

use Illuminate\Support\Collection;

class UserFeedCollection extends Collection {
    
    /**
     * 
     * @param string $key
     */
    public function has($key) 
    {
        //don't just check for $key
        if ($this->first(function($k, $value) use ($key) {
            return $value->toArray()['url'] === $key;
        })) {
            return true;
        } else {
            return false;
        }
        
    }
    
    public function getIndexForUrl($url) {
        $index = $this->first(function($k, $value) use ($url) {
            if  ($value->toArray()['url'] === $url) return $k;
        });
        
        return $index;
    }
    
    
}