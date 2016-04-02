<?php 
class CaptchaController{
	function __construct($captchaService){
		$this->captchaService = $captchaService;
	}
	public function dispatch($request,&$response){
		$captcha = $this->captchaService->getCaptcha();
		$response_arr = $this->captchaToArray($captcha);
		$response = json_encode($response_arr);
	}
	function captchaToArray($captcha){
		$arr = [
				"left"=>$captcha->getLeft(),
				"operator"=>$captcha->getOperator(),
				"right"=>$captcha->getRight()
		];
		return $arr;
	}
}
?>