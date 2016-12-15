<?php namespace Ors\Holidaycheck;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class HolidaycheckServiceProvider extends ServiceProvider {

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
		$this->package('ors/holidaycheck');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['ors.holidaycheck'] = $this->app->share(function($app)
	    {
	        return new \HC\HolidayCheck(Config::get('holidaycheck::partner_token'));
	    }
		);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('ors.holidaycheck');
	}

}
