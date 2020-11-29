<?php

/*
 * This file is part of the jassue/laravel-duoduoke.
 *
 * (c) jassue <jassue@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jassue\LaravelDuoDuoKe;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Jassue\DuoDuoKe\Client;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $source = realpath(__DIR__ . '/Config/config.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([
                $source => config_path('pdd_ddk.php')
            ], 'laravel_pdd_ddk');
        }
        $this->mergeConfigFrom($source, 'pdd_ddk');

        $config = config('pdd_ddk');

        $this->app->singleton(Client::class, function () use ($config) {
            return new Client($config['client_id'], $config['client_secret']);
        });
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
