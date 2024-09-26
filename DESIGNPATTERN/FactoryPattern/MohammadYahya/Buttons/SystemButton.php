<?php

namespace DESIGNPATTERN\FactoryPattern\MohammadYahya\Buttons;

class SystemButton extends Button
{

    public function show(): string
    {
        return "I am SystemButton";
    }

    public function click(): void
    {
        echo "Process from SystemButton";
    }
}