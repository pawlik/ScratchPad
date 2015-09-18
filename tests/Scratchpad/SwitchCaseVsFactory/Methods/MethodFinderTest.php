<?php
/**
 * Created by PhpStorm.
 * User: greg
 * Date: 17.09.15
 * Time: 07:31
 */

namespace Tests\Scratchpad\SwitchCaseVsFactory\Methods;


use Scratchpad\SwitchCaseVsFactory\Methods\MethodFinder;

class MethodFinderTest
    extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider statesToMethodsMapping
     */
    public function test_methodFinder_finds_correct_method($paymentMethod, $expectedClass)
    {
        $methodFinder = new MethodFinder();

        $this->assertInstanceOf($expectedClass, $methodFinder->findMethod($paymentMethod));

    }

    public function statesToMethodsMapping()
    {
        return [
            [0, '\Scratchpad\SwitchCaseVsFactory\Methods\MethodOne'],
            [1, '\Scratchpad\SwitchCaseVsFactory\Methods\MethodTwo'],
        ];
    }

}