<?php
class CaptchaTest extends PHPUnit_Framework_TestCase {
	var $dummy_operator = 1;
	var $dummy_right = 1;
	var $dummy_left = 1;
	var $dummy_pattern = 1;
	public function testFirstPatternLeftShouldBe1() {
		$captcha = new Captcha ( 1, 1, $this->dummy_operator, $this->dummy_right );
		$this->assertEquals ( "1", $captcha->getLeft () );
	}
	public function testFirstPatternLeftShouldBe2() {
		$captcha = new Captcha ( 1, 2, $this->dummy_operator, $this->dummy_right );
		$this->assertEquals ( "2", $captcha->getLeft () );
	}
	public function testFirstPatternLeftShouldBe9() {
		$captcha = new Captcha ( 1, 9, $this->dummy_operator, $this->dummy_right );
		$this->assertEquals ( "9", $captcha->getLeft () );
	}
	public function testSecondPatternLeftShouldBeOne() {
		$captcha = new Captcha ( 2, 1, $this->dummy_operator, $this->dummy_right );
		$this->assertEquals ( "One", $captcha->getLeft () );
	}
	public function testSecondPatternLeftShouldBeNine() {
		$captcha = new Captcha ( 2, 9, $this->dummy_operator, $this->dummy_right );
		$this->assertEquals ( "Nine", $captcha->getLeft () );
	}
	public function testFristPatternRightShouldBeOne() {
		$captcha = new Captcha ( 1, $this->dummy_left, $this->dummy_operator, 1 );
		$this->assertEquals ( "One", $captcha->getRight () );
	}
	public function testFristPatternRightShouldBeNine() {
		$captcha = new Captcha ( 1, $this->dummy_left, $this->dummy_operator, 9 );
		$this->assertEquals ( "Nine", $captcha->getRight () );
	}
	public function testSecondPatternRightShouldBe1() {
		$captcha = new Captcha ( 2, $this->dummy_left, $this->dummy_operator, 1 );
		$this->assertEquals ( "1", $captcha->getRight () );
	}
	public function testSecondPatternRightShouldBe9() {
		$captcha = new Captcha ( 2, $this->dummy_left, $this->dummy_operator, 9 );
		$this->assertEquals ( "9", $captcha->getRight () );
	}
	public function testFirstOperatorShouldBePlus(){
		$captcha = new Captcha($this->dummy_pattern, $this->dummy_left, 1 ,$this->dummy_right);
		$this->assertEquals("+", $captcha->getOperator());
	}
	public function testSecondOperatorShouldBeMultiply(){
		$captcha = new Captcha($this->dummy_pattern, $this->dummy_left, 2, $this->dummy_right);
		$this->assertEquals("*", $captcha->getOperator());
	}
	public function testSecondOperatorShouldBeMinus(){
		$captcha = new Captcha($this->dummy_pattern, $this->dummy_left, 3, $this->dummy_right);
		$this->assertEquals("-", $captcha->getOperator());
	}
	public function testFirstPatternShouldBe1PlusOne(){
		$captcha = new Captcha(1, 1, 1, 1);
		$this->assertEquals("1+One", $captcha->toString());
	}
	public function testSecondPatternShouldBe1PlusOne(){
		$captcha = new Captcha(2, 1, 1, 1);
		$this->assertEquals("One+1", $captcha->toString());
	}
	public function testFirstPatternShouldBe3MinusOne(){
		$captcha = new Captcha(1, 3, 3, 1);
		$this->assertEquals("3-One", $captcha->toString());
	}
	public function testSecondPatternShouldBeThreeMinus1(){
		$captcha = new Captcha(2, 3, 3, 1);
		$this->assertEquals("Three-1", $captcha->toString());
	}
}
?>
