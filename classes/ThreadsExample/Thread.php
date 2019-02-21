<?php

namespace ThreadsExample;

use Thread as BaseThread;
use Job;

class Thread extends BaseThread
{
    public function run(): void
    {
        $number = Job::run();
        $this->worker->numbers[] = $number;
    }
}
