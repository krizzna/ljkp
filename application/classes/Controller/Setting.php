<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Setting extends Controller_Template_Generic
{
    public $template = 'main';
    
    public function before()
    {
	parent::before();
    }
    
    public function action_index()
    {
	//$this->template->content = View::factory('admin/setting');
	//$this->template->content = new View('admin/setting');
	//$user = ORM::factory('User')->find_all();

	//$this->template->content->user = $user;
	$user = ORM::factory('User')->find_all();

	$view = new View('admin/setting');
	$view->set('user', $user);

	$this->template->set('content', $view);
    }

    public function action_create() 
    {
	$user = Auth::instance()->get_user();
  
	if ($user)
	    //HTTP::redirect('auth/index'); # if logged in, redirect to login page
  
	    $username = $message = $errors = $email = NULL;
  
	    $this->template->content = View::factory('admin/user')
		->bind('message', $message)
		->bind('errors', $errors)
		->bind('username', $username)
		->bind('email',  $email);

	if (HTTP_Request::POST == $this->request->method()) 
	{
	    Log::instance()->add(Log::DEBUG, 'POST = '.print_r($this->request->post(), TRUE))->write();
   
	    $username = $this->request->post('username');
	    $email = $this->request->post('email');
   
	    try 
	    {
		$user = new Model_User;
    
		# use the method defined in Model_User to do the validation
		$user->create_user($this->request->post(), array( 'username', 'password', 'email'));
    
		# Grant user login role
		$user->add('roles', ORM::factory('Role', array('name' => 'login')));
    
		$message = 'The user '.$user->username.' has been successfully created';
		$this->template->content = View::factory('admin/setting')->set('message', $message);
	    }
	    catch (ORM_Validation_Exception $e) 
	    { 
		$message = 'There were errors.';
		$errors = $e->errors('models');
	    }
	    catch (Exception $error)
	    {
	    $message = 'The following errors occured';
	    $errors = $error->getMessage();
	    }
	}
    }

    public function action_mesin()
    {
	$this->template->content = View::factory('admin/mesin');
    }

    public function action_produk()
    {
	$this->template->content = View::factory('admin/produk');
    }

    public function action_ahli()
    {
	$this->template->content = View::factory('admin/ahli');
    }

    public function action_jkp()
    {
	$this->template->content = View::factory('admin/jkp');
    }
}
