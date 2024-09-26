<?php

namespace DESIGNPATTERN\FactoryPattern\MohammadYahya\Buttons;

class WebButton extends Button
{

    public function show(): string
    {
        return "I am WebButton";
    }

    public function click(): void
    {
        echo "Process from WebButton";
    }
}