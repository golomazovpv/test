<?php defined('SYSPATH') or die('No direct script access.');

class Securityaccess extends Controller_Template {
   
	public function before()
	{
		$auth = Auth::instance();
		if(!$auth->logged_in())	Request::initial()->redirect('auth');
		return parent::before();	
	}
}
