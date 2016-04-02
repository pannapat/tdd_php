<?php
class CaptchaServiceTest extends PHPUnit_Framework_TestCase {
	public function testGetCaptchaShouldReturnInstanceOfCaptcha() {
		$randomizer = $this->getMockBuilder ( 'Random' )->getMock ();
		$randomizer->expects ( $this->once () )->method ( 'getPattern' )->will ( $this->returnValue ( 1 ) );
		$randomizer->expects ( $this->once () )->method ( 'getOperator' )->will ( $this->returnValue ( 1 ) );
		$randomizer->expects ( $this->exactly(2) )->method ( 'getOperand' )->will ( $this->returnValue ( 1 ) );
		
		$captcha_service = new CaptchaService ($randomizer);
		$captcha = $captcha_service->getCaptcha ();
		
		$this->assertInstanceOf('Captcha', $captcha);
		$this->assertEquals("1", $captcha->getLeft());
		$this->assertEquals("+", $captcha->getOperator());
		$this->assertEquals("One", $captcha->getRight());
		$this->assertEquals("1+One", $captcha->toString());
	}
}

?>