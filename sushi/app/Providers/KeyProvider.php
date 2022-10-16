<?php

namespace App\Providers;

use App\Service\Interfaces\KeyGenerate;
use App\Service\Interfaces\Impls\Keys;
use Illuminate\Support\ServiceProvider;

class KeyProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(KeyGenerate::class,Keys::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
