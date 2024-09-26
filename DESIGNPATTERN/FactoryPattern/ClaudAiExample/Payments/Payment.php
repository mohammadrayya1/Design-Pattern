<?php

namespace DESIGNPATTERN\FactoryPattern\ClaudAiExample\Payments;

use DESIGNPATTERN\FactoryPattern\ClaudAiExample\MethodPaymet\PaymentMethods;

abstract  class Payment
{
    abstract public function creationPaymentMethod():PaymentMethods;

    public function processPayment($amount) {
        $paymentMethod = $this->creationPaymentMethod();
        return $paymentMethod->pay($amount);
    }


}