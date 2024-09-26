<?php

namespace DESIGNPATTERN\DecoratorPattern;

class BluePaintDecorator extends  PaintingDecorator
{
    const COLOR="-Blue-";
    public function paint(Car $car)
    {
        $car->setColor($car->getColor() . self::COLOR);
        return  parent::paint($car);
    }
}