<?php

namespace AppBundle\Entity;

use AppBundle\Value\Collection\UserFeedCollection;
use AppBundle\Value\UserFeed;


class UserFeedFactory
{
    /**
     * 
     * @param string $jsonString
     * 
     * @return UserFeedCollection
     */
    public function createCollectionFromJson($jsonString)
    {        
        $array = json_decode($jsonString, true);   
        return $this->createCollectionFromArray($array);            
    }
    
    /**
     * 
     * @param array $array
     * 
     * @return UserFeedCollection
     */
    public function createCollectionFromArray(array $array)
    {       
        $collection = new UserFeedCollection();
        
        foreach ($array as $value) {
            $collection->push(new UserFeed($value));
        }
        
        return $collection;
    }
    
    /**
     * 
     * @param array $array
     * 
     * @return UserFeed
     */
    public function createFromArray(array $array)
    {
        $userFeed = new UserFeed($array);
        return $userFeed;
    }
}

