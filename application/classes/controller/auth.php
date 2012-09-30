<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {
    public $template = 'parentview';
        
	public function action_index()
	{    
		$auth = Auth::instance();
		$data = array();
		if($auth->logged_in())
		{
			Request::initial()->redirect('');
		}
		else
		{
			if(isset($_POST['btns']))
			{
				$login = Arr::get($_POST, 'login', '');
				$password = Arr::get($_POST, 'password', '');
				$auth->login($login, $password);
				if($auth->login($login, $password))
				{
                                        Request::initial()->redirect('main');
				}
				else
				{
					$data["error"] = "";
				}	
			}
		}
		$this->template->content = View::factory('authview', $data);	
	}  
	
	public function action_reg()
	{
		$data = array();
		if(isset($_POST['btns']))
		{
			$email = Arr::get($_POST, 'email', '');
			$login = Arr::get($_POST, 'login', '');
                        $password = Arr::get($_POST, 'password', '');
			
			$register = new Model_Register();
			if($register->reg($email, $login, $password, 1))
			{
				$data["regok"] = "";
			}
			else
			{
				$data["errors"] = $register->errors;
			}	
		}
		$this->template->content = View::factory('regview', $data);	
	}
	
	
	public function action_hpass()
	{
		$auth = Auth::instance();
		$this->template->content = $auth->hash_password('admin');
	}
	
	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		$this->template->content = "разлогин";
	}
        
        public function action_recoverpass()
        {
            $data = array();
            if(isset($_POST['btns']))
		{
			$email = Arr::get($_POST, 'email', '');
                        $register = new Model_Register();
                        if($register->getnewpass($email))
                        {
                            $data["ok"] = "";
                        }
                        else
                        {
                            $data["error"] = "";
                        }
                }        
            
            
            $this->template->content = View::factory('recoverpassview', $data);
        }
        
         public function action_checkcode()
        {
                $code = $this->request->param('id');
                $data = array();
                
                $register = new Model_Register();
                if($register->newpassword($code))
                {                    
                    $data['ok'] = '';
                }
                else
                {
                    $data['error'] = '';
                }
                $this->template->content = View::factory('checkcodeview', $data);
        }
} // End Auth
