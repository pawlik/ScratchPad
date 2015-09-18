<?php
/**
 * Created by PhpStorm.
 * User: greg
 * Date: 17.09.15
 * Time: 07:25
 */

namespace Scratchpad\SwitchCaseVsFactory\Methods;


class MethodFinder
{

    /**
     * @param int $selectedPaymentMethod
     * @return \Scratchpad\SwitchCaseVsFactory\Methods\IMethods
     */
    public function findMethod($selectedPaymentMethod)
    {
        switch($selectedPaymentMethod) {
            case 0: {
                return new MethodOne();
            }
            case 1: {
                return new MethodTwo();
            }
        }
    }

}