<?php

namespace Drmer\Laravel\Enhancer;

use Illuminate\Support\ServiceProvider;
use Drmer\Laravel\Enhancer\Console\TestMakeCommand;

class EnhancerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->registerTestMakeCommand();
        }
    }

    protected function registerTestMakeCommand()
    {
        $this->app->extend('command.test.make', function ($cmd, $app) {
            return new TestMakeCommand($app['files']);
        });
    }
}
