<?php 

	class StringOperandTest extends PHPUnit_Framework_TestCase{
		public  function testShouldReturnOne(){
			$stringOperand = new StringOperand(1);
			$this->assertEquals("One", $stringOperand->getValue());
		}
		public function testShouldReturnNine(){
			$stringOperand = new StringOperand(9);
			$this->assertEquals("Nine", $stringOperand->getValue());
		}
		public function testShouldReturnFive(){
			$stringOperand = new StringOperand(5);
			$this->assertEquals("Five", $stringOperand->getValue());
		}
	}

?>