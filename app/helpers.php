<?php 

if (! function_exists('page_title')) {
	
	function page_title($title){
		
		$base_title = 'Koola list of artisans';

		return $title === '' ? $base_title : $title.' | '.$base_title;
	}

}

if (! function_exists('set_active_route')) {
	
	function set_active_route($route){

		return Route::is($route) ? 'active' : '';
	}

}
