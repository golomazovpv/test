<?php defined('SYSPATH') or die('No direct script access.');

class Securitycore extends Securityaccess {
   
	public function before()
	{
            $session = Session::instance();
            $right = $session->get('core_access', '');
            if($right)
            {    
                $session->delete('core_access');
		return parent::before();	
            }    
            else
                Request::initial()->redirect('main');
	}
}
