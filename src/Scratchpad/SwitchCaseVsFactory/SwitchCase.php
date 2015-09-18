<?php

namespace Scratchpad\SwitchCaseVsFactory;

class SwitchCase
{

    public function foo($mailer, $selectedPaymentMethod)
    {
        switch($selectedPaymentMethod) {
            case 0: {
                $mailer->caseOneMethod();
                break;
            }
            case 1: {
                $mailer->caseTwoMethod();
            }
        }
    }

}