<?php

namespace Ccsliinc\LivewireToast\Tests;

use Ccsliinc\LivewireToast\LivewireToastServiceProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use InteractsWithViews;

    protected function getPackageProviders($app): array
    {
        return [
            LivewireToastServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
