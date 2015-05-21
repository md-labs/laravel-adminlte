<?php

namespace GionniValeriana\laravelAdminlte;

use Illuminate\Support\ServiceProvider;

/**
 * Class AdminlteServiceProvider
 *
 * @author  Joy Lazari <joy.lazari@gmail.com>
 * @package GionniValeriana\laravelAdminlte
 */
class AdminlteServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bindShared('GionniValeriana\laravelAdminlte\Adminlte', function ($app) {
            return app('\GionniValeriana\laravelAdminlte\Adminlte');
        }
        );
        $this->app->singleton('adminlte', 'GionniValeriana\laravelAdminlte\Adminlte');
    }

    public function boot() {
        $this->loadViewsFrom(__DIR__ . '/views', 'adminlte');
        $this->loadTranslationsFrom(__DIR__.'/lang', 'adminlte');

        $this->publishes([
            base_path().'/vendor/almasaeed2010/adminlte/' => public_path('packages/almasaeed2010/adminlte/'),
            base_path().'/vendor/gionnivaleriana/laravel-adminlte/' => public_path('packages/gionnivaleriana/adminlte/'),
            base_path().'/vendor/sleeping-owl/admin/resources/css/admin.css' => public_path('packages/gionnivaleriana/adminlte/css/admin.css'),
            base_path().'/vendor/sleeping-owl/admin/resources/js/admin.js' => public_path('packages/gionnivaleriana/adminlte/js/admin.js'),
        ], 'assets');
    }

}