<?php

namespace DESIGNPATTERN\FactoryPattern;



class CarFactory
{

    public static function create( ICar $type): ICar
    {
        return $type;
    }
}