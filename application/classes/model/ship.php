<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ship {
	
	public function saveships($data)
	{	
		$input = explode(":", $data);
                
                $auth = Auth::instance();
                $user = $auth->get_user();
                $ship = ORM::factory('Orm_Ship')
                        ->where('player_id', '=', $user->id)
                        ->find_all();
                foreach ($ship as $item)
                {
                    $item->delete();
                }

		for($i=0; $i<40; $i+=2)
		{
                    $ship = ORM::factory('Orm_Ship');
                        $ship->player_id = $user->id;
                        $ship->pole = $input[$i];
                        $ship->ship_id = $input[$i+1];		
                    $ship->save();
		}
		return true;
	}
	
}