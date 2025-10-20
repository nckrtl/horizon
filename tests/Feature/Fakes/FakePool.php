<?php

namespace Laravel\Horizon\Tests\Feature\Fakes;

class FakePool
{
    public $queue;
    public $processCount;
    public $terminatingProcessCount;

    public function __construct($queue, $processCount, $terminatingProcessCount = 0)
    {
        $this->queue = $queue;
        $this->processCount = $processCount;
        $this->terminatingProcessCount = $terminatingProcessCount;
    }

    public function scale($processCount)
    {
        $this->processCount = $processCount;
    }

    public function queue()
    {
        return $this->queue;
    }

    public function pruneTerminatingProcesses()
    {
        //
    }

    public function totalProcessCount()
    {
        return $this->processCount;
    }

    public function processes()
    {
        return array_fill(0, $this->processCount, null);
    }

    public $terminatingProcesses = [];
}
