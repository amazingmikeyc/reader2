<?php
namespace AppBundle\Value;

class AbstractValueTest extends \PHPUnit_Framework_TestCase
{
    
    public function testValues()
    {
        $testData = new \StdClass; 
        
        $testData->item1 = 'woooo';
        $testData->item2 = 'yay';
        $testData->item3 = 'mega';
        $testData->item10 = 'well';
              
        
        $value = new TestValueClass($testData);
        
        $this->assertEquals(
            $value->getAll(), 
            [
                'woooo', 'yay', 'mega', null
            ]
        );
        
    }
    
}