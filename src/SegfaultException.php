<?php

namespace alexeevdv;

use Exception;

class SegfaultException extends Exception
{
    public function __toString()
    {
        throw $this;
    }
}
