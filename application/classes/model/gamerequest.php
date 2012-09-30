 <?php defined('SYSPATH') or die('No direct script access.');

class Model_Gamerequest {

	public function getaccept($noaccept)
	{
            $db = Database::instance();
            if($noaccept)
            {
                $query = 'SELECT users.username AS player1, game_requests.id
                        FROM users, game_requests
                        WHERE users.id = game_requests.player1
                        AND game_requests.player2 IS NULL';                
            }
            else
            {
                $query = 'SELECT users1.username AS player1, users2.username AS player2
                        FROM users AS users1, users AS users2, game_requests
                        WHERE users1.id = game_requests.player1
                        AND users2.id = game_requests.player2';
            }
            
            return $db->query(Database::SELECT, $query)->as_array();
	}
        
	public function getstatus($name, $accept, $noaccept)
	{
            foreach($noaccept as $item)
            {
                if($item['player1'] == $name)
                    return 2;
            }
            
            foreach($accept as $item)
            {
                if($item['player1'] == $name)
                    return 3;
                if($item['player2'] == $name)
                    return 4;
            }
            return 1;
	}        
        
        public function ajaxproc($data)
        {
            $auth = Auth::instance();
            $user = $auth->get_user();
            
            $req = json_decode($data, TRUE);
            switch ($req["action"])
            {
                case 'agree': $res = $this->agree($req["id"], $user->id); break;
                case 'apply': $res = $this->apply($user->id); break;
                case 'del': $res = $this->del($user->id); break;
                case 'reject_out': $res = $this->rejectout($user->id); break;
                case 'reject_in': $res = $this->rejectin($user->id); break;
                case 'start': $start = $this->start($user->id); break;
                default : return FALSE;
            }
            if(!empty($start))
            {
                return "start";
            }
            else
            {
                return $res;
            }
        }
        
        private function start($user_id)
        {
            $check = ORM::factory('Orm_Gamerequest')
                    ->where('player1', '=', $user_id)
                    ->and_where('player2', 'IS NOT', NULL)
                    ->find();
            if($check->loaded())
            {
                $game = ORM::factory('Orm_Game');
                $game->player1 = $check->player1;
                $game->player2 = $check->player2;
                $game->action = $user_id;
                $game->save();
                $check->status = 1;
                $check->save();
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }

        private function rejectin($user_id)
        {
            $check = ORM::factory('Orm_Gamerequest')
                    ->where('player1', '=', $user_id)
                    ->and_where('player2', 'IS NOT', NULL)
                    ->find();
            if($check->loaded())
            {
                $check->player2 = NULL;
                $check->save();
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }

        private function rejectout($user_id)
        {
            $check = ORM::factory('Orm_Gamerequest')
                    ->where('player2', '=', $user_id)
                    ->and_where('status', 'IS', NULL)
                    ->find();
            if($check->loaded())
            {
                $check->player2 = NULL;
                $check->save();
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }

        private function del($user_id)
        {
            $check = ORM::factory('Orm_Gamerequest')
                    ->where('player1', '=', $user_id)
                    ->and_where('player2', 'IS', NULL)
                    ->find();
            if($check->loaded())
            {
                $check->delete();
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        
        private function agree($id, $user_id)
        {            
            $check = ORM::factory('Orm_Gamerequest')
                    ->where('player1', '=', $user_id)
                    ->or_where('player2', '=', $user_id)
                    ->find();   
            if(!$check->loaded())
            {
                $add = ORM::factory('Orm_Gamerequest')
                        ->where('id', '=', $id)
                        ->and_where('player2', 'IS', NULL)
                        ->find();
                if($add->loaded())
                {
                    $add->player2 = $user_id;
                    $add->save();
                    return TRUE;
                }
                else
                {
                    return FALSE;
                }
            }
            else
            {
                return FALSE;
            }
            
        }
        
        private function apply($user_id)
        {
            $check = ORM::factory('Orm_Gamerequest')
                    ->where('player1', '=', $user_id)
                    ->or_where('player2', '=', $user_id)
                    ->find();
            if(!$check->loaded())
            {
                $add = ORM::factory('Orm_Gamerequest');
                $add->player1 = $user_id;
                $add->save();
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }      
        
        public function upredirect($user_id)
        {
            $check = ORM::factory('Orm_Gamerequest')
                    ->where('player2', '=', $user_id)
                    ->and_where('status', '=', 1)
                    ->find();
            if($check->loaded())
            {
                $check->delete();
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
}
