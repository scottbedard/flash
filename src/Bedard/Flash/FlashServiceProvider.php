<?php namespace Bedard\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider {

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
        $this->package('bedard/flash');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
    {
        $this->app['flash'] = $this->app->share(function($app)
        {
            return new Flash;
        });
    }

	/**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('flash');
    }

}
