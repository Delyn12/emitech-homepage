<?php
namespace Emitech\Homepage\Providers;
use Illuminate\Support\ServiceProvider;



class HomepageServiceProvider extends ServiceProvider
{
	
	/* 
	Register all application services here
	*/
	
	public function register()
	{
		//
	}
	
	/* 
	Register other services here 
	such as bootsrap services
	*/
	
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/../../routes/homepage.php');
		$this->loadViewsFrom(__DIR__.'/../../resources/views', 'DASH_HOME');
		$this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'HOMEPAGE');
		 $this->publishes([__DIR__.'/../../public' => public_path('vendor/homepage'),], 'public');
	}
	
}

?>