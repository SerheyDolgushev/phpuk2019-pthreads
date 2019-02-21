<?php

namespace ThreadsExample;

use Pool as BasePool;

class Pool extends BasePool
{
    public function process(): void
    {
        while ($this->collect());

        $this->shutdown();
    }
}

