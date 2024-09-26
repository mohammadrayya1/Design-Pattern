<?php

namespace DESIGNPATTERN\FactoryPattern\MohammadYahya\Dialogs;

use DESIGNPATTERN\FactoryPattern\MohammadYahya\Buttons\Button;
use DESIGNPATTERN\FactoryPattern\MohammadYahya\Buttons\UiButton;

class UiDialog extends Dialg
{

    public function createButton(): Button
    {
        return new UiButton();
    }
}