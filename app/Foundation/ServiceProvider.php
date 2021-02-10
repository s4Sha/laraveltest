<?php

use App\Data\Contracts\UserRepositoryInterface;

use App\Data\Repositories\EloquentUserRepository;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        // Bind repository contracts to implementations here.
        $this->app->register('App\Services\Api\Providers\ApiServiceProvider');
            return new EloquentUserRepository();
    }
}
    