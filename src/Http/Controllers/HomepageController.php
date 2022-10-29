<?php

namespace Emitech\Homepage\Http\Controllers;
use App\Http\Controllers\Controller;


class HomepageController extends Controller
{
	
	
	/*
	display view blade
	*/
	
	public function index()
	{
		return view('DASH_HOME::homepage');
	}
}

?>