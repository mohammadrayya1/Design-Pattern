<?php

namespace DESIGNPATTERN\FactoryPattern\ClaudAiExample\Payments;

use DESIGNPATTERN\FactoryPattern\ClaudAiExample\MethodPaymet\PaymentMethods;
use DESIGNPATTERN\FactoryPattern\ClaudAiExample\MethodPaymet\VisaCardMethod;

class VisaCard extends Payment
{
    public function creationPaymentMethod(): PaymentMethods
    {
      return new VisaCardMethod();
    }
}