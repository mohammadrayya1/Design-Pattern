<?php

namespace DESIGNPATTERN\FactoryPattern\MohammadYahya\Dialogs;

use DESIGNPATTERN\FactoryPattern\MohammadYahya\Buttons\Button;
use DESIGNPATTERN\FactoryPattern\MohammadYahya\Buttons\SystemButton;

class SystemDialog extends Dialg
{


    public function createButton(): Button
    {
        return new systemButton();
    }
}