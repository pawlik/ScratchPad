<?php

namespace Scratchpad\SwitchCaseVsFactory;

use Scratchpad\SwitchCaseVsFactory\Methods\MethodFinder;

class PolyExample
{

    public function foo($paymentMethod)
    {
        $methodFinder = new MethodFinder();
        $method = $methodFinder->findMethod($paymentMethod);
        $method->doYourJob();
    }

}