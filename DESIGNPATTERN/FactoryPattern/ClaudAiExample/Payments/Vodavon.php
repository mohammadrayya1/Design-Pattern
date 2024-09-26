<?php

namespace DESIGNPATTERN\FactoryPattern\ClaudAiExample\Payments;

use DESIGNPATTERN\FactoryPattern\ClaudAiExample\MethodPaymet\PaymentMethods;
use DESIGNPATTERN\FactoryPattern\ClaudAiExample\MethodPaymet\VodavonMethod;

class Vodavon  extends Payment
{
    public function creationPaymentMethod(): PaymentMethods
    {
        return new VodavonMethod();
    }

}