<?php

use DESIGNPATTERN\DecoratorPattern\BalckPaintDecorator;
use DESIGNPATTERN\DecoratorPattern\BluePaintDecorator;
use DESIGNPATTERN\DecoratorPattern\Car;
use DESIGNPATTERN\DecoratorPattern\Painting;
use DESIGNPATTERN\DecoratorPattern\RedPaintDecorator;

require_once  __DIR__."/vendor/autoload.php";



$car =new Car();
$baseDecoratorPainting= new Painting();



$baseDecoratorPainting= new BalckPaintDecorator($baseDecoratorPainting);
$baseDecoratorPainting= new RedPaintDecorator($baseDecoratorPainting);



var_dump($baseDecoratorPainting->paint($car));

