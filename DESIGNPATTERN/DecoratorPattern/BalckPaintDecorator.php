<?php

namespace DESIGNPATTERN\DecoratorPattern;

class BalckPaintDecorator extends PaintingDecorator
{
const COLOR="-Black-";
    public function paint(Car $car)
    {
        $car->setColor($car->getColor() . self::COLOR);
        return  parent::paint($car);
    }
}