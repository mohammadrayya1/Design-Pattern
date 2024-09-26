<?php

namespace DESIGNPATTERN\DecoratorPattern;

class RedPaintDecorator extends PaintingDecorator
{
    const COLOR="-Red-";
    public function paint(Car $car)
    {
        $car->setColor($car->getColor() . self::COLOR);
        return  parent::paint($car);
    }
}