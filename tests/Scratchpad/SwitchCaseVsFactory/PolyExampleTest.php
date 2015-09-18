<?php
/**
 * Created by PhpStorm.
 * User: greg
 * Date: 16.09.15
 * Time: 04:15
 */

namespace Tests\Scratchpad\SwitchCaseVsFactory;


use Scratchpad\SwitchCaseVsFactory\SwitchCase;

class PolyExampleTest
    extends \PHPUnit_Framework_TestCase
{

    public function test_foo_calls_CaseOneMethod_when_state_is_zero()
    {
        $object = new SwitchCase();
        $serviceStub = $this->getMock("stdClass", ['caseOneMethod', 'caseTwoMethod']);

        $serviceStub->expects($this->once())
            ->method('caseOneMethod');

        $object->foo($serviceStub, 0);
    }

    public function test_foo_doesnt_call_other_methods_when_state_is_zero()
    {
        $object = new SwitchCase();
        $serviceStub = $this->getMock("stdClass", ['caseOneMethod', 'caseTwoMethod']);

        $serviceStub->expects($this->never())
            ->method('caseTwoMethod');

        $object->foo($serviceStub, 0);
    }



}