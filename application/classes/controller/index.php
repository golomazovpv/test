<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {
    public $template = 'parentview';

	public function action_index()
	{    
		$this->template->content = View::factory('indexview');	
	}  
	
}
