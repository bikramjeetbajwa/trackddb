<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
	

	public function action_index()
	{
		//$this->response->body('hello, world!');		
		$view = View::factory('welcome');
		$tmp = array();
		for($i=1;$i<=100;$i++)
		{
			$tmp[$i] = $i;
			if($i%3 == 0 && $i%5 == 0)
				$tmp[$i] = 'fizzbuzz';
			elseif($i%3 == 0)
				$tmp[$i] = 'fizz';
			elseif($i%5 == 0)
				$tmp[$i] = 'buzz';
		}
		$view->fizzbuzz = $tmp;
		$this->response->body($view);
	}
	
	
} // End Welcome
