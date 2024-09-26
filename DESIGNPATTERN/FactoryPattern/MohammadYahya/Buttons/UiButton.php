<?php

namespace DESIGNPATTERN\FactoryPattern\MohammadYahya\Buttons;

class UiButton extends Button
{

    public function show(): string
    {
        return "I am UiButton";
    }

    public function click(): void
    {
        echo "Process from UiButton";
    }
}