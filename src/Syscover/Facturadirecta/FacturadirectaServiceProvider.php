<?php namespace Syscover\Facturadirecta;

use Illuminate\Support\ServiceProvider;
use Syscover\Facturadirecta\Libraries\Facturadirecta;

class FacturadirectaServiceProvider extends ServiceProvider
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
			__DIR__ . '/../../config/facturadirecta.php' => config_path('facturadirecta.php')
		]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Facturadirecta', function($app)
		{
			return new Facturadirecta($app);
		});
	}
}