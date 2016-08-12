<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// Register Service controller.
$app->register(new Silex\Provider\ServiceControllerServiceProvider());



$app->run();
