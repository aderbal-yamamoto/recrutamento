<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Recrut\Page;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$Page = new Page();

	$Page->setTpl("index");

});

$app->run();

 ?>