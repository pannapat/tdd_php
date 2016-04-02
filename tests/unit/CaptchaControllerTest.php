<?php
class CaptchaControllerTest extends PHPUnit_Framework_TestCase {
	public function testDispatchShouldReturnCaptchaJson() {
		$captchaService = $this->getMockBuilder ( 'CaptchaService' )->setConstructorArgs ( [ 
				'randomizer' => $this->getMockBuilder ( 'Random' )->getMock () 
		] )->getMock ();
		
		$captchaService->expects ( $this->once () )->method ( 'getCaptcha' )->will ( $this->returnValue ( new Captcha ( 1, 1, 1, 1 ) ) );
		
		$captchaController = new CaptchaController ( $captchaService );
		$response = "{}"; // json_encode(array());
		
		$captchaController->dispatch ( null, $response );
		
		// $json = json_decode ( $response, true );
		// $this->assertEquals ( "1", $json ['left'] );
		// $this->assertEquals ( "+", $json ['operator'] );
		// $this->assertEquals ( "One", $json ['right'] );
		
		$this->assertJsonStringEqualsJsonString ( json_encode ( array (
				"left" => "1",
				'operator' => '+',
				'right' => 'One' 
		) ), $response );
	}
}
?>