<?php

namespace DESIGNPATTERN\FactoryPattern\ClaudAiExample\MethodPaymet;

class VodavonMethod extends PaymentMethods
{
    public function pay($mount=null)
    {
        echo "We are payed {$mount} with Vodavon";
    }
}