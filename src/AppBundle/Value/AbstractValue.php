<?php

namespace AppBundle\Value;

abstract class AbstractValue
{
    
    public function __construct(\stdClass $feed)
    {
        foreach ($feed as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
    
}