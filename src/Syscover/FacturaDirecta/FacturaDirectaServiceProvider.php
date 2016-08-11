<?php namespace Syscover\FacturaDirecta;

use Illuminate\Support\ServiceProvider;
use Syscover\FacturaDirecta\Libraries\FacturaDirecta;

class FacturaDirectaServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// include route.php file
		if (!$this->app->routesAreCached())
			require __DIR__ . '/../../routes.php';

		// register config files
		$this->publishes([
			__DIR__ . '/../../config/facturaDirecta.php' => config_path('facturaDirecta.php')
		]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('FacturaDirecta', function($app)
		{
			return new FacturaDirecta($app);
		});
	}
}