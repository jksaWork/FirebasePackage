<?php

namespace DarshPhpDev\HttpHelper;

use Illuminate\Support\ServiceProvider;

class HandelFirebaseServiceProvider extends ServiceProvider{


	public function boot()
	{
		$this->mergeConfig();
		$this->publishConfig();
	}

	public function register()
	{
		//
	}

	protected function publishConfig()
	{
    	$this->publishes([
    	       __DIR__.'/config/Firebase.php' => config_path('Firebase.php')
       	], 'Firebase');
	}

	protected function mergeConfig()
	{
		$this->mergeConfigFrom( 
			__DIR__.'/config/Firebase.php', 'Firebase' 
		);
	}
}