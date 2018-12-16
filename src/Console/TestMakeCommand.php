<?php

namespace Drmer\Laravel\Enhancer\Console;

use Illuminate\Console\Command;
use Illuminate\Foundation\Console\TestMakeCommand as BaseTestMakeCommand;

class TestMakeCommand extends BaseTestMakeCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:test {name : The name of the class} {--unit : Create a unit test} {--resource : Create a resource test} {--api : Create a api test}';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('resource')) {
            return __DIR__.'/stubs/resource-test.stub';
        }

        if ($this->option('api')) {
            return __DIR__.'/stubs/api-test.stub';
        }

        return parent::getStub();
    }
}
