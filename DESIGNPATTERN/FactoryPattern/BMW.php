<?php

namespace DESIGNPATTERN\FactoryPattern;

class BMW implements ICar
{

    public function drive()
    {
       echo  "This Cas is BMW and drive 20Km";
    }
}