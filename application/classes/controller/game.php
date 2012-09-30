<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Game extends Securityaccess { //Securitycore
    public $template = 'parentview';

	public function action_index()
	{   
            $auth = Auth::instance();
            $user = $auth->get_user();
            $game = new Model_Game($user, false);
            if($game->action == $user->id)
            {
                $response["action"] = true;
            }
            else
            {
                $response["action"] = false;
            }
            $response["my_ships"] = $game->get_my_ships();
            $response["my_damage"] = $game->get_my_damage();
            $response["opp_ships"] = $game->get_opp_ships();
            $response["my_misses"] = $game->get_my_misses();
            $response["opp_misses"] = $game->get_opp_misses();
            $this->template->content = View::factory('Gameview', $response);	
	}  
	
}
