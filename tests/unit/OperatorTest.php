<?php 

Class OperatorTest extends PHPUnit_Framework_TestCase{
	public function testShouldReturnPlus(){
		$operator = new Operator(1);
		$this->assertEquals("+",$operator->getValue());
	}
	
	public function testShouldReturnMultiply(){
		$operator = new Operator(2);
		$this->assertEquals("*",$operator->getValue());
	}
	
	public function testShouldReturnMinus(){
		$operator = new Operator(3);
		$this->assertEquals("-",$operator->getValue());
	}
}

?>