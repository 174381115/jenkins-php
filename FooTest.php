<?php
class FooTest extends PHPUnit_Framework_TestCase
{
    public function test1()
    {
       $this->assertEquals(1, 1); 
    }
    
    /* 如果你觉得一个case太单薄，可以放开此处
    public function test2()
    {
       $this->assertEquals(1, 1); 
       $this->assertEquals(1, 1); 
    }
    */
}

