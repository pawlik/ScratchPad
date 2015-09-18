<?php
/**
 * Created by PhpStorm.
 * User: greg
 * Date: 17.09.15
 * Time: 07:18
 */

namespace Scratchpad\SwitchCaseVsFactory\Methods;


class MethodTwo
    implements IMethods
{

    public function doYourJob()
    {
        return __CLASS__ . " doing it's job";
    }

}