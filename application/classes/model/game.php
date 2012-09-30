<?php defined('SYSPATH') or die('No direct script access.');

class Model_Game {
	
    private $game = false;
    private $user;
    private $time = 0;
    
    public $action = 0;
    
    public function __construct($user, $ajax)
    {
        $this->user = $user;
        $check = ORM::factory('Orm_Game')
                ->where('player1', '=', $user->id)
                ->or_where('player2', '=', $user->id)
                ->find();
        if($check->loaded())
        {
            if($check->player1 == $user->id)
            {
               $this->game = $check; 
            }
            else
            {              
                $this->game = $check;
                $this->game->player2 = $check->player1;
                $this->game->player1 = $user->id;
            }
            
            $this->action = $check->action;
        }
        if($ajax)
        {
            if(Session::instance()->get('time') < date('Gis'))
            {
                $this->time = Session::instance()->get('time');
            }
            else
            {
                $this->time = Session::instance()->get('time') + date('Gis');
            }
        }
    }
    
    public function __destruct() 
    {
        Session::instance()->set('time', date('Gis'));
    }
    
    public function get_my_ships()
    {
        if($this->game)
        {
             $query = DB::select('pole')
                     ->from('ships')
                     ->where('player_id', '=', $this->user->id)
                     ->and_where('time', 'IS', NULL)
                     ->execute()
                     ->as_array();
             return $query;
        }
        else
        {
           return false;
        }
    }
    
    public function get_my_damage()
    {
        if($this->game)
        {
             $query = DB::select()
                     ->from('ships')
                     ->where('player_id', '=', $this->user->id)
                     ->and_where('time', 'IS NOT', NULL)
                     ->and_where('time', '>', $this->time)
                     ->execute()
                     ->as_array();
             $result = $this->damage_discover($query, $this->user->id);

             return $result;
        }
        else
        {
           return false;
        }
    }
    
    public function get_opp_ships()
    {	
        if($this->game)
        {
             $query = DB::select()
                     ->from('ships')
                     ->where('player_id', '=', $this->game->player2)
                     ->and_where('time', 'IS NOT', NULL)
                     ->and_where('time', '>', $this->time)
                     ->execute()
                     ->as_array();
             $result = $this->damage_discover($query, $this->game->player2);

             return $result;
        }
        else
        {
           return false;
        }
    }
    
    public function get_my_misses()
    {
        if($this->game)
        {      
            $query = DB::select()
                    ->from('misses')
                    ->where('player_id', '=', $this->user->id)
                    ->and_where('time', '>', $this->time)
                    ->execute()
                    ->as_array();
            if($query)
            {
                foreach ($query as $item)
                {
                    $result[] = $item['pole'];
                }
                return $result;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    public function get_opp_misses()
    {
        if($this->game)
        {
            $query = DB::select()
                    ->from('misses')
                    ->where('player_id', '=', $this->game->player2)
                    ->and_where('time', '>', $this->time)
                    ->execute()
                    ->as_array();
            if($query)
            {
                foreach ($query as $item)
                {
                    $result[] = $item['pole'];
                }
                return $result;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    protected function damage_discover($query, $pl)
    {
        if($query)
        {
             foreach ($query as $item)
             {
                 $sh_id = $item['ship_id'];
                 if($this->time != 0)
                 {
                     $res = DB::select()
                             ->from('ships')
                             ->where('player_id', '=', $pl)
                             ->and_where('ship_id', '=', $sh_id)
                             ->and_where('time', 'IS', NULL)
                             ->execute()
                             ->as_array();
                     if($res)
                     {
                         $result['damage'][] = $item['pole'];
                     }
                     else
                     {
                         $destroy = DB::select()
                                 ->from('ships')
                                 ->where('player_id', '=', $pl)
                                 ->and_where('ship_id', '=', $sh_id)
                                 ->execute()
                                 ->as_array();
                         foreach ($destroy as $it)
                         {
                             $result['destroy'][] =$it['pole'];
                         }
                     }
                 }
                 else
                 {
                    if($alive = $this->ver_alive($query, $sh_id))
                    {
                        $result['damage'][] = $item['pole']; 
                    }
                    else 
                    {
                        $result['destroy'][] = $item['pole'];
                    }
                 }  
             }
             return $result;
        }
        else
        {
            return false;
        }
    }


    protected function ver_alive($result, $sh_id)
    {
        $ship_id = array(
            0 => 1,
            1 => 1,
            2 => 1,
            3 => 1,
            4 => 2,
            5 => 2,
            6 => 2,
            7 => 3,
            8 => 3,
            9 => 4,
        );
        
        $kol = 0;
        foreach ($result as $item)
        {
            if($item['ship_id'] == $sh_id)
            {
                $kol++;
            }
        }
        if($kol !== $ship_id[$sh_id-1])
        {
            return true;
        }
        else 
        {
            return false;
        }
    }   
    
    public function fire($pole)
    {
        if($this->game)
        {
            $ship = ORM::factory('Orm_Ship')
                    ->where('player_id', '=', $this->game->player2)
                    ->and_where('pole', '=', $pole)
                    ->find();
            $miss = ORM::factory('Orm_Miss')
                    ->where('player_id', '=', $this->game->player2)
                    ->and_where('pole', '=', $pole)
                    ->find();

            if($ship->loaded() AND $ship->time == NULL)
            {
                $ship->time = date('Gis');
                $ship->save();

                return 1;
            }
            else
            {
                if(!$miss->loaded())
                {
                    $miss->player_id = $this->game->player2;
                    $miss->pole = $pole;
                    $miss->time = date('Gis');
                    $miss->save();
                    
                    $game = ORM::factory('Orm_Game')
                            ->where('player1', '=', $this->user->id)
                            ->or_where('player2', '=', $this->user->id)
                            ->find();
                    $game->action = $this->game->player2;
                    $game->save();
                    
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }
}