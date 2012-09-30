<?php defined('SYSPATH') or die('No direct script access.');

class Securityapi extends Controller {
   
	public function before()
	{	
		$auth = Auth::instance();
		if($auth->logged_in()) return parent::before();	
                else exit;
	}
}
