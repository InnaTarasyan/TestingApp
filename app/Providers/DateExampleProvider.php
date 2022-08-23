<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Facades\DateExample;

class DateExampleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('dateexampleclass',function(){
            return new DateExample();
        });
    }
}
