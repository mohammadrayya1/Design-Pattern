<?php

namespace DESIGNPATTERN\FactoryPattern\ClaudAiExample\MethodPaymet;

class VisaCardMethod extends PaymentMethods
{
    public function pay($mount=null)
    {
        echo "We are payed {$mount} with VisaCard";
    }
}