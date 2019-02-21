<?php

namespace ThreadsExample;

use Worker as BaseWorker;

class Worker extends BaseWorker
{
    private $numbers;

    public function __construct(Volatile $numbers)
    {
        $this->numbers = $numbers;
    }
}
