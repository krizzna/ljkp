<?php defined('SYSPATH') or die('No direct script access.');
# application/classes/Controller/auth.php
class Controller_Auth extends Controller_Template_Generic
{
    public $template = 'auth/site';

    public function action_index()
    {
	$this->template->content = View::factory('auth/site');

	$user = Auth::instance()->get_user();
  
	if (!$user)
	HTTP::redirect('auth/login');

    }

    public function action_register() 
    {
	$user = Auth::instance()->get_user();
  
	if ($user)
	    HTTP::redirect('auth/index'); # if logged in, redirect to login page
  
	    $username = $message = $errors = $email = NULL;
  
	    $this->template->content = View::factory('auth/register')
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
		$this->template->content = View::factory('auth/register')->set('message', $message);
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
 
    public function action_login()
    {
	$user = Auth::instance()->get_user();
  
	if ($user)
	    HTTP::redirect('auth/site'); # if logged in, redirect to login page
  
	    $this->template->content = View::factory('auth/login')
		->bind('message', $message);
   
	if (HTTP_Request::POST == $this->request->method()) 
	{
	    // Attempt to login user
	    $remember = $this->request->post('remember');
   
	    $user = Auth::instance()->login($this->request->post('username'), 
	    $this->request->post('password'), $remember);
   
	    if ($user)
		HTTP::redirect('page'); #take user to index page
   
	    $message = 'Login failed';
	}
    }
 
    public function action_logout() 
    {
	Auth::instance()->logout();
	HTTP::redirect('auth/login');
    }
} // End Controller_auth
