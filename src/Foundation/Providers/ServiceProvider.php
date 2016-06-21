<?php
namespace App\Foundation\Providers;

use Illuminate\Routing\Router;
use \App\Services\Api\Providers\ApiServiceProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        // add services providers here by calling
        // $this->app->register('full namespace here')
    }
}
