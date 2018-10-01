<?php

class SegfaultExceptionTest extends \Codeception\Test\Unit
{
    public function testToString()
    {
        $result = exec('php tests/_support/shell.php', $output);
        $this->stringContains($result, 'Segmenation fault');
    }
}
