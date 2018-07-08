<?php
namespace AcmeCorp\Test\Hakim;

use AcmeCorp\Hakim\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testValidNumbersFizzBuzz()
    {
	$foo = new FizzBuzz(3,5);
        $results = $foo->getFizzBuzz();
	$this->assertEquals('3 fizz 4 5 buzz ',$results);
    }
    
    public function testFromGreaterThanTo() 
    {
        $foo = new FizzBuzz(5,3);
        $results = $foo->getFizzBuzz();
        $this->assertEquals(FizzBuzz::ERROR_MSG_FROM_GREATER_THAN_TWO,$results );
    }
    
    public function testFromLessThan1() {
        $foo = new FizzBuzz(0,3);
        $results = $foo->getFizzBuzz();
        $this->assertEquals(FizzBuzz::ERROR_MSG_MIN_VALUE_EXPECTED,$results );
    }
    
    public function testToMoreThan100() {
        $foo = new FizzBuzz(1,101);
        $results = $foo->getFizzBuzz();
        $this->assertEquals(FizzBuzz::ERROR_MSG_MAX_VALUE_EXPECTED,$results );
    }
    
    // ...etc 
}