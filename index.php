<?php

require_once  __DIR__."/vendor/autoload.php";


$resturant= new \DESIGNPATTERN\Observe2\Restaurant();


$waitress= new \DESIGNPATTERN\Observe2\Waiter();
$cashir =new \DESIGNPATTERN\Observe2\Casher();


$resturant->attach($waitress);
$resturant->attach($cashir);

$resturant->setStatus("open");
$resturant->setStatus("closed");
$resturant->setStatus("open");
$resturant->setStatus("closed");