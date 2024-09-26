<?php

use DESIGNPATTERN\DecoratorPattern\BalckPaintDecorator;
use DESIGNPATTERN\DecoratorPattern\BluePaintDecorator;
use DESIGNPATTERN\DecoratorPattern\Car;
use DESIGNPATTERN\DecoratorPattern\Painting;
use DESIGNPATTERN\DecoratorPattern\RedPaintDecorator;
use DESIGNPATTERN\FactoryPattern\BMW;
use DESIGNPATTERN\FactoryPattern\CarFactory;
use DESIGNPATTERN\FactoryPattern\ClaudAiExample\Payments\Paypal;
use DESIGNPATTERN\FactoryPattern\ClaudAiExample\Payments\VisaCard;
use DESIGNPATTERN\FactoryPattern\ClaudAiExample\Payments\Vodavon;
use DESIGNPATTERN\FactoryPattern\Merccedec;
use DESIGNPATTERN\FactoryPattern\MohammadYahya\Dialogs\SystemDialog;
use DESIGNPATTERN\FactoryPattern\MohammadYahya\Dialogs\UiDialog;

require_once  __DIR__."/vendor/autoload.php";



//$car =new Car();
//$baseDecoratorPainting= new Painting();
//
//
//
//$baseDecoratorPainting= new BalckPaintDecorator($baseDecoratorPainting);
//$baseDecoratorPainting= new RedPaintDecorator($baseDecoratorPainting);
//
//
//
//var_dump($baseDecoratorPainting->paint($car));

//
//$car1 = CarFactory::create(new BMW());
//$car1->drive(); // Output: Driving a sedan.
//
//$car2 = CarFactory::create(new Merccedec());
//$car2->drive();


$paymentVisa=new Vodavon();

$paymentVisa->processPayment(5000);
