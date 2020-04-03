<?php

namespace Bilalbaraz\LaravelEnvChanger;

use Bilalbaraz\LaravelEnvChanger\Console\ChangeEnvCommand;
use Illuminate\Support\ServiceProvider;

/**
 * Class EnvChangerServiceProvider
 * @package Bilalbaraz\LaravelEnvChanger
 */
class EnvChangerServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->commands([ChangeEnvCommand::class]);
    }

    /**
     * @return void
     */
    public function boot()
    {
        //
    }
}
