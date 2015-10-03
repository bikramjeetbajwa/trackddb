<?php defined('SYSPATH') or die('No direct access allowed.');
 
class Model_Contest extends ORM {
 
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
            ),
            'email' => array(
                array('not_empty'),
                array('email'),
				array(array($this, 'email_unique')),
            ),
        );
    }
	
	public function email_unique($email)
    {
        return ! ORM::factory('Contest', array('email' => $email))->loaded();
    }
}