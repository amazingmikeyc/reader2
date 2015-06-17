<?php
namespace AppBundle\Value;

class AbstractValueTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * Test the 
     */
    public function testValues()
    {
        
        $testData['item1'] = 'woooo';
        $testData['item2'] = 'yay';
        $testData['item3'] = 'mega';
        $testData['item10'] = 'well';
        
        $testData = new \ArrayObject($testData);     

        $value = new TestValueClass($testData);
        
        $this->assertEquals(
            $value->getAll(), 
            [
                'woooo', 'yay', 'mega', null
            ]
        );
        
    }
    
    /**
     * Test the to array method
     */
    public function testToArray()
    {
        
        $testData['item1'] = 'woooo';
        $testData['item2'] = 'yay';
        $testData['item3'] = 'mega';
        $testData['item10'] = 'well';
        
        $testData = new \ArrayObject($testData);     

        $value = new TestValueClass($testData);
        
        $this->assertEquals(
            $value->toArray(), 
            [
                'item1' => 'woooo',
                'item2' => 'yay',
                'item3' => 'mega',
                'item4' => null
            ]
        );
        
    }
    
    /**
     * Test with a simple XML node as input
     */
    public function testAsXML()
    {
        
        $xml = '<xml><item1>woooo</item1><item2>yay</item2></xml>';
        
        $testData = \simplexml_load_string($xml);

        $value = new TestValueClass($testData);
        
        $this->assertEquals(
            $value->toArray(), 
            [
                'item1' => 'woooo',
                'item2' => 'yay',
                'item3' => null,
                'item4' => null
            ]
        );
        
    }
    
    /**
     * test JSON output method
     */
    public function testToJson()
    {
        
        $testData['item1'] = 'woooo';
        $testData['item2'] = 'yay';
        $testData['item3'] = 'mega';
        $testData['item10'] = 'well';
        
        $testData = new \ArrayObject($testData);     

        $value = new TestValueClass($testData);
        
        $this->assertEquals(
            $value->toJson(), 
            '{"item1":"woooo","item2":"yay","item3":"mega","item4":null}'            
        );
        
        $this->assertJson($value->toJson());
        
    }
    
    
    
    
}