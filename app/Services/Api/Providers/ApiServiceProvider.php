<?php

namespace App\Services\Api\Providers;

use Lang;
use View;
use Illuminate\Support\ServiceProvider;
use App\Services\Api\Providers\RouteServiceProvider;
use App\Services\Api\Providers\BroadcastServiceProvider;
use Illuminate\Translation\TranslationServiceProvider;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap migrations and factories for:
     * - `php artisan migrate` command.
     * - factory() helper.
     *
     * Previous usage:
     * php artisan migrate --path=src/Services/Api/database/migrations
     * Now:
     * php artisan migrate
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom([
            realpath(__DIR__ . '/../database/migrations')
        ]);
    }

    /**
    * Register the Api service provider.
    *
    * @return void
    */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(BroadcastServiceProvider::class);

        $this->registerResources();
    }

    /**
     * Register the Api service resource namespaces.
     *
     * @return void
     */
    protected function registerResources()
    {
        // Translation must be registered ahead of adding lang namespaces
        $this->app->register(TranslationServiceProvider::class);

        Lang::addNamespace('api', realpath(__DIR__.'/../resources/lang'));

        View::addNamespace('api', base_path('resources/views/vendor/api'));
        View::addNamespace('api', realpath(__DIR__.'/../resources/views'));
    }
}
