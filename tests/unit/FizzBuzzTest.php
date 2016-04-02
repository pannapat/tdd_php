<?php 

class FizzBuzzTest extends PHPUnit_Framework_TestCase{
	
	public function testShouldBeReturn1(){
		$fizzBuzzTest = new FizzBuzz();
		$this->assertEquals('1',$fizzBuzzTest->getCount(1));
	}
	
	public function testShouldBeReturn2(){

		$fizzBuzzTest = new FizzBuzz();
		$this->assertEquals('2',$fizzBuzzTest->getCount(2));
	}
	
	public function testShouldBeReturn3(){
		$fizzBuzzTest = new FizzBuzz();
		$this->assertEquals('Fizz',$fizzBuzzTest->getCount(3));
	}
	
	public function testShouldBeReturn4(){
		$fizzBuzzTest = new FizzBuzz();
		$this->assertEquals('4',$fizzBuzzTest->getCount(4));
	}
	public function testShouldBeReturn5(){
		$fizzBuzzTest = new FizzBuzz();
		$this->assertEquals('Buzz',$fizzBuzzTest->getCount(5));
	}
	public function testShouldBeReturn6(){
		$fizzBuzzTest = new FizzBuzz();
		$this->assertEquals('Fizz',$fizzBuzzTest->getCount(6));
	}
	public function testShouldBeReturn15(){
		$fizzBuzzTest = new FizzBuzz();
		$this->assertEquals('FizzBuzz',$fizzBuzzTest->getCount(15));
	}
	
}
?>