<?php

namespace DESIGNPATTERN\FactoryPattern\MohammadYahya\Dialogs;

use DESIGNPATTERN\FactoryPattern\MohammadYahya\Buttons\Button;
use DESIGNPATTERN\FactoryPattern\MohammadYahya\Buttons\WebButton;

class WebDialog extends Dialg
{

    public function createButton(): Button
    {
      return new WebButton();
    }
}