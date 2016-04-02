<?php
require __DIR__.'/Container.php';

$app = new \Slim\App($container);

$app->get('/captcha', function($request, $response){
	$this->captchaController->dispatch(null, $captchaResponse);
	return $response->write($captchaResponse);
});

?>