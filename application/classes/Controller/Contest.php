<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contest extends Controller {	

	public function action_index()
	{	
		$view = View::factory('contest');		
        $contests = ORM::factory('contest')->find_all();
		$view->contests = $contests;
		$this->response->body($view);
	}
	
	public function action_details()
	{
		$view = View::factory('form');
		$contest_id = $this->request->param('id');        		
		if($contest_id)
		{
			$contest = ORM::factory('contest', $contest_id);
		}
		else
		{
			$contest = ORM::factory('contest');
		}				
		$post = $this->request->post();		
        if ($post)      
		{
			$contest->name = $post['name'];
			$contest->email = $post['email'];
			try
			{
				if($contest_id)
				{
					$contest->update();
					$view->success = "Record updated successfuly";
				}
				else
				{
					$contest->save();
					$view->success = "Record added successfuly";
				}				
			}
			catch (ORM_Validation_Exception $e)
			{
				$errors = $e->errors('models');
				$view->errors	= $errors;
			}
		}		
		$view->contest = $contest->as_array(); 		
		$this->response->body($view);
	}
} // End Welcome
