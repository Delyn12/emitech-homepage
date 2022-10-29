<?php

use illuminate\Support\Facades\routes;

Route::group(['namespace' => 'Emitech\Homepage\Http\Controllers',
			  'middleware' => 'web',
			  'prefix' => env('ADMIN_URL')
			 ], function(){
	
	
	Route::get('/dashboard', [
		'uses' => 'HomepageController@index',
		'as' => 'dashboard'
	]);
});

?>