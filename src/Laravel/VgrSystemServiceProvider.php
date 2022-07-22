<?php

namespace VgrSystem\Esra\Laravel;

use Illuminate\Support\ServiceProvider;
use VgrSystem\Esra\Esra;

class EsraServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->app->singleton('Esra', function(){
            return new Esra();
        });
    }
}
