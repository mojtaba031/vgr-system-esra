<?php

namespace VgrSystem\Esra\Laravel;

use Illuminate\Support\ServiceProvider;
use VgrSystem\Esra\VgrEsra;

class VgrEsraServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->app->singleton('VgrEsra', function(){
            return new VgrEsra();
        });
    }
}
