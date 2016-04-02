<?php 

	class RandomTest extends PHPUnit_Framework_TestCase{
		
		public function testGetPatternShouldReturnBetweenOneToTwo(){
			$random = new Random();
			$this->assertGreaterThanOrEqual(1, $random->getPattern());
			$this->assertLessThanOrEqual(2, $random->getPattern());
		}
		public function testGetOperatorShouldReturnBetweenOneToThree(){
			$random = new Random();
			$this->assertGreaterThanOrEqual(1, $random->getOperator());
			$this->assertLessThanOrEqual(3, $random->getOperator());
		}
		public function testGetOperandShouldReturnBetweenOneToNine(){
			$random = new Random();
			$this->assertGreaterThanOrEqual(1, $random->getOperand());
			$this->assertLessThanOrEqual(9, $random->getOperand());
		}
	}
?>