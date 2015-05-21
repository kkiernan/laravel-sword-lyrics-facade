<?php namespace Sword;

use Illuminate\Support\ServiceProvider;

class SwordServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Sword', function()
		{
			return new \Macklesnake\Sword;
		});
	}

}
