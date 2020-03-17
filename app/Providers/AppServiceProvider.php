<?php

namespace App\Providers;

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
        $this->app->bind(\GuzzleHttp\Client::class,function(){
            return new \GuzzleHttp\Client([
                'base_uri' => 'https://api.zoom.us/v2/',
                'headers' => [
                    'Authorization' => 'Bearer ' . env('ZOOM_JWT_TOKEN'), // ZOOM_JWT_TOKEN       
                    'Accept' => 'application/json',
                ]
            ]);
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
