<?php

namespace Yark\Actions\Commands;
use Illuminate\Console\GeneratorCommand;

class MakeActionCommand extends GeneratorCommand
{
    protected $signature = 'make:action {name}';
    protected $description = 'Create a new action class';
    protected $type = 'Action';

    public function getDefaultNamespace($rootNamespace)
    {
        return parent::getDefaultNamespace($rootNamespace . '\Actions');
    }

    public function getStub()
    {
        return __DIR__ . '/../../stubs/action.stub';
    }
}
