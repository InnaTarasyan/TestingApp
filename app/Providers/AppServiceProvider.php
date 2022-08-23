<?php

namespace App\Providers;

use App\Contracts\UsersRepository;
use App\Contracts\UsersRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UsersRepositoryInterface::class, function () {
            return new UsersRepository();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
