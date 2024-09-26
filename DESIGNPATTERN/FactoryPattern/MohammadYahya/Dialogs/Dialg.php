<?php

namespace DESIGNPATTERN\FactoryPattern\MohammadYahya\Dialogs;

use DESIGNPATTERN\FactoryPattern\MohammadYahya\Buttons\Button;

abstract class Dialg
{




    public function renderButton()
    {
        $button=$this->createButton();
        return "
        {$button->show()}
      
        ";

    }

    abstract public function createButton():Button;

}