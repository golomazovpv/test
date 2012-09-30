<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Securityaccess {
    public $template = 'parentview';

	public function action_index()
	{    
		$this->template->content = View::factory('mainview');	
	}  
	
}
