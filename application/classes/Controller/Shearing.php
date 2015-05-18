<?php defined('SYSPATH') or die('No direct script access.');
# application/classes/Controller/Page.php
class Controller_Shearing extends Controller_Template_Generic
{
    public $template = 'main';

    public function action_index()
    {
	$this->template->content = View::factory('shearing/spk');

	//$user = Auth::instance()->get_user();

	//if (!$user)
	    //HTTP::redirect('dbauth/login');
    }

    public function action_add()
    {
	$this->template->content = View::factory('shearing/edit');
    }

}
    
