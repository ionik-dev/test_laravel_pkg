<?php


namespace Gomlyakov\Meta;


use Illuminate\Support\ServiceProvider;

class MetaServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('Meta', function () {
            $meta = new MetaService('test');

            return $meta;
        });
    }
}