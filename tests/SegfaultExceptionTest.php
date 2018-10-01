<?php

use alexeevdv\SegfaultException;

class SegfaultExceptionTest extends \Codeception\Test\Unit
{
    public function testToString()
    {
        $exception = new SegfaultException;
        $this->expectException(SegfaultException::class);
        $exception->__toString();
    }
}
