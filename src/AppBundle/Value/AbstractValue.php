<?php

namespace AppBundle\Value;
use Illuminate\Support\Contracts\ArrayableInterface;
use Illuminate\Support\Contracts\JsonableInterface;

/**
 * Abstract Value Object class
 */
abstract class AbstractValue implements ArrayableInterface, JsonableInterface
{
    
    /**
     * Constructor
     * 
     * @param $feed
     */
    public function __construct($feed)
    {
        foreach ($feed as $key => $value) {                  
            if (property_exists($this, $key)) {           
                $this->$key = (string) $value;
            }
        }
    }
    
    /**
     * Returns object contents as an array
     * 
     * @return array
     */
    public function toArray()
    {
        $return = [];
       
        foreach($this as $key => $value) {            
            $return[$key] = $value instanceof ArrayableInterface ? $value->toArray() : $value;
        }   
        return $return;
    }
    
    /**
     * Return object contents as JSON-encoded string
     * 
     * @param int $options
     * 
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->toArray(), $options);
    }
    
    /**
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->toJson();
    }
    
    /**
     * Magical caller
     * 
     * @param get $property
     */
    public function __call($method, $param)
    {

        $property = lcfirst(str_replace('get', '', $method));
     
        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            return null;
        }
    }
    
}