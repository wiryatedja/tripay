<?php

namespace Wiryatedja\Tripay\Tests;

use Illuminate\Support\Str;
use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    use WithWorkbench;

    protected function getEnvironmentSetUp($app)
    {
        $apiKey = config('tripay.key');
    }
}

