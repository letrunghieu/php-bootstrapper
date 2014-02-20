<?php

namespace HieuLe\PhpBootstrapper;

use Illuminate\Support\ServiceProvider;

class PhpBootstrapperServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
	$this->package('hieu-le/php-bootstrapper');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
	$this->app['config']->package('hieule/php-bootstrapper', __DIR__ . '/../../config');
	$this->app['alert'] = $this->app->share(function($app)
		{
		    return new Alert($app['session.store'], $app['config']);
		});
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
	return array('alert');
    }

}