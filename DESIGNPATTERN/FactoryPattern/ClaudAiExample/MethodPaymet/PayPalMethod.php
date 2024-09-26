<?php

namespace DESIGNPATTERN\FactoryPattern\ClaudAiExample\MethodPaymet;

class PayPalMethod extends PaymentMethods
{
    public function pay($mount=null)
    {
        echo "We are payed {$mount} with PayPal";
    }
}