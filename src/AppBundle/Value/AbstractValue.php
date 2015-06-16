<?php

namespace AppBundle\Value;
use Illuminate\Support\Contracts;

abstract class AbstractValue implements Contracts\ArrayableInterface, Contracts\JsonableInterface
{
    
    /**
     * 
     * @param \Traversable $feed
     */
    public function __construct( $feed)
    {
        foreach ($feed as $key => $value) {                  
            if (property_exists($this, $key)) {           
                $this->$key = (string) $value;
            }
        }
    }
    
    /**
     * 
     * @return array
     */
    public function toArray()
    {
        $return = [];
       
        foreach($this as $key => $value) {          
            $return[$key] = $value;
        }   
        return $return;
    }
    
    /**
     * 
     * @param int $options
     * 
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->toArray(), $options);
    }
    
}