<?php 

if (! function_exists('page_title')) {
	
	function page_title($title){
		
		$base_title = 'Koola list of artisans';

		return $title === '' ? $base_title : $title.' | '.$base_title;
	}

}
