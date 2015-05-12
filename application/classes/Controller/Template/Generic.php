<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Template_Generic extends Controller_Template
{
    
    /**
    * The before() method is called before your controller action.
    * In our template controller we override this method so that we can
    * set up default values. These variables are then available to our
    * controllers if they need to be modified.
    */
    public function before()
    {
	parent::before();
	if ($this->auto_render)
	{
	    // keep the last url if it's not home/language			
	    if (Auth::instance()->logged_in('participant'))
	    {
		$this->template->loged = TRUE;
	    }
			
	    // Initialize empty values
	    $this->template->title   = '';
	    $this->template->content = '';
			
	    $this->template->styles = array();
	    $this->template->scripts = array(); 
	}
    }
	 
    /**
    * The after() method is called after your controller action.
    * In our template controller we override this method so that we can
    * make any last minute modifications to the template before anything
    * is rendered.
    */
    public function after()
    {
	if ($this->auto_render)
	{
	    $styles = array(
		'assets/css/bootstrap.min.css',
		'assets/css/bootstrap-datepicker3.min.css',
		'assets/css/style.css',
	    );
	    $scripts = array(
		'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
		'assets/js/bootstrap.min.js',
		'assets/js/bootstrap-datepicker.min.js',
		'assets/js/vendor/holder.js',
		'assets/js/ie10-viewport-bug-workaround.js',
		'assets/js/app.js',
	    );
	
	    $this->template->styles = array_merge( $this->template->styles, $styles );
	    $this->template->scripts = array_merge( $this->template->scripts, $scripts );
	}
	parent::after();
    }
}
