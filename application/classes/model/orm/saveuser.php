<?php defined('SYSPATH') or die('No direct script access.');

class Model_Orm_Saveuser extends ORM {
	
	protected $_table_name = 'users';
        
        public function rules()
        {
            
            return array(
                 'email' => array(
                    array('not_empty'),
                    array('email'),
                    array(array($this, 'email_unique')),
                ),
                'username' => array(
                    array('not_empty'),
                    array(array($this, 'username_unique')),
                ),  
                'password' => array(
                    array(array($this, 'empty_password')),
                ),                
            );
        }
        public function username_unique($username)
        {
            $db = Database::instance();
            
            if($this->id)
            {
                $query = 'SELECT id FROM users WHERE id != '.$this->id.' AND username = '.$db->escape($username);
            }
            else
            {
                $query = 'SELECT id FROM users WHERE username = '.$db->escape($username);
            }
            $result = $db->query(Database::SELECT, $query, FALSE)->as_array();
            if(count($result) > 0)
            {
                return FALSE;
            }    
            else
            {
                return TRUE;
            }       
        }    
        
        public function email_unique($email)
        {
            $db = Database::instance();
            
            if($this->id)
            {
                $query = 'SELECT id FROM users WHERE id != '.$this->id.' AND email = '.$db->escape($email);
            }
            else
            {
                $query = 'SELECT id FROM users WHERE email = '.$db->escape($email);
            }
            $result = $db->query(Database::SELECT, $query, FALSE)->as_array();
            if(count($result) > 0)
            {
                return FALSE;
            }    
            else
            {
                return TRUE;
            }    
        }   
        
        
        public function empty_password($password)
        {
            if($password == '03101c6f10eb5a8ccd82980b7b6bb95e70f1870dd697216b8c6f2e2bebd33885')
            {
                return FALSE;
            }
            else
            {
                return TRUE;
            }    
        }        

}

// End MyUser
