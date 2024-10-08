<?php

namespace Xslain\LivewireJoditTextEditor\Tests;

use Xslain\LivewireJoditTextEditor\LivewireJoditTextEditorServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra {
    protected function setUp(): void {
        parent::setUp();
    }

    protected function getPackageProviders($app): array {
        return [
            LivewireServiceProvider::class,
            LivewireJoditTextEditorServiceProvider::class,
        ];
    }
}
