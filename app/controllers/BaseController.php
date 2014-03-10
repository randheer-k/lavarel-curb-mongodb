<?php

class BaseController extends Controller {

	protected $user;
	protected $layout = 'layouts.default';
	public function __construct()
    {	
    	$this->user = User::where('uid', (int)Session::get('user') )->first(); 
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
    		$this->layout->with('user_info',  (int)Session::get('user')); 
		}
	}

}