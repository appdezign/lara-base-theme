<?php

namespace Laratheme\Base;

use Illuminate\Support\ServiceProvider;

class LaraBaseServiceProvider extends ServiceProvider
{

	/**
	 * Bootstrap the module services.
	 *
	 * @return void
	 */
	public function boot()
	{

		// Publish Assets
		$this->publishes([
			__DIR__.'/../_assets/_public/fonts' => public_path('assets/themes/basefive/fonts'),
			__DIR__.'/../_assets/_public/images' => public_path('assets/themes/basefive/images'),
			__DIR__.'/../_assets/_public/vendor' => public_path('assets/themes/basefive/js/vendor'),
			__DIR__.'/../_assets/_public/media' => public_path('assets/media'),
		], 'lara');

	}

	/**
	 * Register the module services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
