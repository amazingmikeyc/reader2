<?php
 
namespace AppBundle\Value;

class TestValueClass extends AbstractValue
{
    
    protected $item1;
    protected $item2;
    protected $item3;
    protected $item4;
    
    
    public function getAll()
    {
        return [
            $this->item1,
            $this->item2,
            $this->item3,
            $this->item4
           
        ];
    }
    
}