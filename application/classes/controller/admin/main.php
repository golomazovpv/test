<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Mycontrolleradmin {
        public $template = 'index';

	public function action_index()
	{    
            $category = new Model_Category('tree');
            $data['categories'] = $category->getTree();
            
            if(isset($_POST['btnsbmt']))
            {
                $categoryName = Arr::get($_POST, 'categoryName', '');
                $parentId = Arr::get($_POST, 'parentId', '');
                
                $res = $category->catInsert($parentId, array('name'=>$categoryName));
                
                if($res)
                {
                    Request::initial()->redirect('admin');
                }    
                else
                {
                    $data['errors'] = $category->getErrors();
                }    
            }   
            
            $this->template->content = View::factory('adminview', $data);
            
       }  
	
}