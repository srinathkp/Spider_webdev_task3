<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function check($username)
	{
              
				$details=$username;


			$validator = Validator::make(
 			    array(
        			'username' => $details,

    				),
    			array(
        			'username' => 'required|unique:users',
        			)
			);
			if($validator->fails())
			{
                echo "Username already exists";			}
          else
          {
          	echo "OK";
          }

	}

}
