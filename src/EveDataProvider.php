<?php

namespace tenowg\evedata;

use Illuminate\Support\ServiceProvider;

class EveDataProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsaFrom(__DIR__.'/views', 'evedata');
        $this->publishes([
            __DIR__."/config/evedata.php" => config_path('evedata.php'),
            __DIR__."/views" => resource_path('views/vendor/evedata'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom( __DIR__.'/config/evedata.php', 'evedata'); 
    }
}
