<?php
class CaptchaService {
	var $randomizer;
	function __construct($randomizer) {
		$this->randomizer = $randomizer;
	}
	function getCaptcha() {
		return new Captcha ( $this->randomizer->getPattern (), 
							$this->randomizer->getOperand (), 
							$this->randomizer->getOperator (), 
							$this->randomizer->getOperand () );
	}
}

?>