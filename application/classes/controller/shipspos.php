<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shipspos extends Securityaccess {
    public $template = 'parentview';

	public function action_index()
	{    
            $this->template->content = View::factory('Shipsposview');	
	}  
        
        public function action_ok()
        {
            $this->template->content = View::factory('Shipsposokview');
        }
	
}
