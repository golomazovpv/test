<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Securityapi {

	public function action_shipspos()
	{
		$response = Arr::get($_POST, 'data', '');

		$ship = new Model_Ship();
		
		$save = $ship->saveships($response);

		echo json_encode($save);
	}
        
	public function action_gamerequest()
	{
            $response = array();
            $data = Arr::get($_POST, 'data', '');
            $gamerequest = new Model_Gamerequest();
            
            $proc = $gamerequest->ajaxproc($data);
            
            if($proc)
            {
                if($proc === "start")
                {
                    $response['redirect'] = TRUE;
                }
                else
                {
                    $auth = Auth::instance();
                    $response['accept'] = $gamerequest->getaccept(false);
                    $response['noaccept'] = $gamerequest->getaccept(true);
                    $user = $auth->get_user();
                    $response['status'] = $gamerequest->getstatus($user->username, $response['accept'], $response['noaccept']);
                    $response['username'] = $user->username; 
                }
                echo json_encode($response);
            }
            else
            {
                echo FALSE;
            } 
	}    
        
        public function action_grequpdate()
        {
            $response = array();
            $gamerequest = new Model_Gamerequest();   
            $auth = Auth::instance();
            $user = $auth->get_user();
            $redirect = $gamerequest->upredirect($user->id);
            if($redirect)
            {
                $response['redirect'] = $redirect;
            }
            else
            {
                $response['accept'] = $gamerequest->getaccept(false);
                $response['noaccept'] = $gamerequest->getaccept(true);
                $response['status'] = $gamerequest->getstatus($user->username, $response['accept'], $response['noaccept']);
                $response['username'] = $user->username;  
            }
            echo json_encode($response);
        } 
        
        public function action_fire()
        {
            $pole = Arr::get($_POST, 'data', '');
            
            $auth = Auth::instance();
            $user = $auth->get_user();
            $response = array();
            $game = new Model_Game($user, true);
            if($game->action == $user->id AND $fire = $game->fire($pole))
            {
                $response["my_damage"] = $game->get_my_damage();
                $response["opp_ships"] = $game->get_opp_ships();
                $response["my_misses"] = $game->get_my_misses();
                $response["opp_misses"] = $game->get_opp_misses();
                if($fire === 1)
                {
                    $response["action"] = true;
                }
                else
                {
                    $response["action"] = false;
                }
            }       
           echo json_encode($response);
        }
        
        public function action_upgame()
        {
            $auth = Auth::instance();
            $user = $auth->get_user();
            $response = array();
            $game = new Model_Game($user, true);
                $response["my_damage"] = $game->get_my_damage();
                $response["opp_ships"] = $game->get_opp_ships();
                $response["my_misses"] = $game->get_my_misses();
                $response["opp_misses"] = $game->get_opp_misses();
            if($game->action == $user->id)
            {
                $response["action"] = true; 
            }
            else
            {
                $response["action"] = false;
            }
            
           echo json_encode($response); 
        }
               
} 