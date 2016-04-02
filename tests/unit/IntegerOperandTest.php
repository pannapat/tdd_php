<?php 

Class IntegerOperandTest extends PHPUnit_Framework_TestCase{
	public function testShouldReturn1(){
		$integerOperand = new IntegerOperand(1);
		$this->assertEquals("1", $integerOperand->getValue());
	}
	public function testShouldReturn9(){
		$integerOperand = new IntegerOperand(9);
		$this->assertEquals("9", $integerOperand->getValue());
	}
}

?>