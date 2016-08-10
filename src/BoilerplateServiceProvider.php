<?php

namespace EveningDesign\Boiler;

use Illuminate\Support\ServiceProvider;

class BoilerplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConstantsGeneratorCommand();
        $this->registerViewsGeneratorCommand();
        $this->registerControllerGeneratorCommand();
        $this->registerRequestGeneratorCommand();
    }

    public function registerConstantsGeneratorCommand() {
        $this->app->singleton('command.eveningdesign.constants', function ($app) {
            return $app['EveningDesign\Boiler\Console\Commands\GenerateConstants'];
        });
        $this->commands('command.eveningdesign.constants');
    }

    public function registerViewsGeneratorCommand() {
        $this->app->singleton('command.eveningdesign.views', function ($app) {
            return $app['EveningDesign\Boiler\Console\Commands\GenerateViews'];
        });
        $this->commands('command.eveningdesign.views');
    }

    public function registerControllerGeneratorCommand() {
        $this->app->singleton('command.eveningdesign.controller', function ($app) {
            return $app['EveningDesign\Boiler\Console\Commands\GenerateController'];
        });
        $this->commands('command.eveningdesign.controller');
    }

    public function registerRequestGeneratorCommand() {
        $this->app->singleton('command.eveningdesign.request', function ($app) {
            return $app['EveningDesign\Boiler\Console\Commands\GenerateRequest'];
        });
        $this->commands('command.eveningdesign.request');
    }
}
