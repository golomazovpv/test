<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Gamerequest extends Securityaccess {
    public $template = 'parentview';

	public function action_index()
	{   
           $auth = Auth::instance();
           $gamerequest = new Model_Gamerequest();
           
            $data['accept'] = $gamerequest->getaccept(false);
            $data['noaccept'] = $gamerequest->getaccept(true);
            $session = Session::instance();
            $session->set('core_access', 1);
            $user = $auth->get_user();
            $data['status'] = $gamerequest->getstatus($user->username, $data['accept'], $data['noaccept']);
            $data['username'] = $user->username;
            
            $this->template->content = View::factory('Gamerequestview', $data);	
	}         
	
}
