<?php

namespace DESIGNPATTERN\DecoratorPattern;

class PaintingDecorator implements PaintingInterface
{

    private PaintingInterface  $painting;

    /**
     * @param $painting
     */
    public function __construct (PaintingInterface $painting)
    {
        $this->painting = $painting;
    }


    public function paint(Car $car)
    {
       return  $this->painting->paint($car);
    }
}