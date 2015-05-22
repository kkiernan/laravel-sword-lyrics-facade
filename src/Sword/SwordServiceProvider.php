<?php namespace Sword;

use Illuminate\Support\ServiceProvider;

class SwordServiceProvider extends ServiceProvider {

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Sword', function()
		{
			return new \Sword\Sword;
		});
	}

}
