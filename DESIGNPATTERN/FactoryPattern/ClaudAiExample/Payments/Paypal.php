<?php

namespace DESIGNPATTERN\FactoryPattern\ClaudAiExample\Payments;

use DESIGNPATTERN\FactoryPattern\ClaudAiExample\MethodPaymet\PaymentMethods;
use DESIGNPATTERN\FactoryPattern\ClaudAiExample\MethodPaymet\PayPalMethod;

class Paypal extends Payment
{

    public function creationPaymentMethod(): PaymentMethods
    {
      return new PayPalMethod();
    }
}