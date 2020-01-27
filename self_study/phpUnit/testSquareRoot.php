<?php
use PHPUnit\Framework\TestCase;
require 'SquareRoot.php';
 
class testSquareRoot extends TestCase
{
    private $sqrtaa;
 
    protected function setUp()
    {
        $this->sqrtaa = new SquareRoot();
    }
 
    protected function tearDown()
    {
        $this->sqrtaa = NULL;
    }
 
    public function testSqrt()
    {
        $result = $this->sqrtaa->sqrt(16);
        $this->assertEquals(4, $result);
        $this->assertEquals(1, $result);
    }
 
}
?>