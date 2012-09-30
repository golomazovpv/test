<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register {
   
	public function reg($email, $login, $password, $role)
	{
		$user = new Model_Orm_Saveuser();
		$user->email = $email;
		$user->username = $login;
                
                
                $auth = Auth::instance();
		$user->password = $auth->hash_password($password);
		
		
                try
                {
                   $user->save(); 
                   $usertemp = ORM::factory('user', array('username'=>$login));
                   $adduserid = $usertemp->id;

                   $addrole = new Model_Orm_Addrole();
                   $addrole->user_id = $adduserid;
                   $addrole->role_id = $role;
                   $addrole->save();
		
                  /* $emailuse = new Model_Emailuse();
                   $from = Kohana::message('email/email', 'from');
                   $subject = Kohana::message('email/reg', 'regok');
                   $data = array(
                       'login' => $login,
                       'password' => $password,
                   );
                   $message = View::factory('email/regok', $data);
                   $emailuse->sendemail($email, $from, $subject, $message, FALSE);
                  */ 
                   return TRUE;
                   
                }
                catch (ORM_Validation_Exception $e)
                {
                    $this->errors = $e->errors('validation');
                    return FALSE;
                }

	}
        
        public function getnewpass($email)
        {
            $usertemp = ORM::factory('orm/saveuser', array('email' => $email));

            if(!$usertemp->loaded())
            {
                return FALSE;
            }
            
            $genpassword = new Model_Genpassword();
            $genpass = $genpassword->genpass(16);
            
            $usertemp->rempass = $genpass;
            $usertemp->save();
            
            $emaleuse = new Model_Emailuse();
            $from = Kohana::message('email/email', 'from');
            $subject = Kohana::message('email/reg', 'recovercod');
            $data = array('genpass' => $genpass);
            $message = View::factory('email/recovercod', $data);            
            $emaleuse->sendemail($email, $from, $subject, $message, TRUE);
                    
            return TRUE;
            
        }
        
        public function newpassword($code)
        {
            $usertemp = ORM::factory('orm/saveuser', array('rempass' => $code));
            
            if(!$usertemp->loaded())
            {
                return FALSE;
            }
            
            $genpassword = new Model_Genpassword();
            $genpass = $genpassword->genpass(8);
            
            $auth = Auth::instance();
            $usertemp->password = $auth->hash_password($genpass);
            $usertemp->rempass = NULL;
            $usertemp->save();
            
            $username = $usertemp->username;
            $email = $usertemp->email;
            
            $emailuse = new Model_Emailuse();
            
            $from = Kohana::message('email/email', 'from');
            $subject = Kohana::message('email/reg', 'recoverpass');
            $data = array(
                'username' => $username,
                'genpass' => $genpass,
            );
            $message = View::factory('email/recoverpass', $data);
            $emailuse->sendemail($email, $from, $subject, $message, FALSE);
            
            return TRUE;
 
        }  
}
