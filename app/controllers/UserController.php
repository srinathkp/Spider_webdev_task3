<?php

class UserController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('hello');
	}

  public function create()
  {
    		$details=Input::all();
if(Auth::check())
		{
			return	Redirect::to('/login');
		}

		$validator = Validator::make(
 			    array(
        			'fullname' => $details['fullname'],
        			'pswd' => $details['pswd'],
        			'pswd2' => $details['pswd2'],
        			'username'=>$details['username']
    				),
    			array(
        			'fullname' => 'required',
        			'pswd' => 'required|min:5',
        			'username' => 'required|min:4|unique:users',
        			'pswd2'=>'required|min:5'
    				)
			);

		if($validator->fails() || $details['pswd']!=$details['pswd2'])
			{
				return View::make('signup')->with(array('msg'=>"Check your form", 'title'=>'SignUp'
					,'head'=>'Signup to Discover,Ask and Answer'));
			}
 else
			{
                if(isset($details['profilepic']))
				{
					if(Input::file('profilepic')->isValid())
				{
					$destination='/assets/';
					$filename = Input::file('profilepic')->getClientOriginalName();
					$hashedfilename=Hash::make($filename);
					Input::file('profilepic')->move(public_path().$destination, $filename);
					$details['profilepic']=$filename;

				}
			}
				$user=new User;
				$user->username=$details['username'];
				$user->fullname=$details['fullname'];
	            $hashpass=Hash::make($details['pswd']);
	            $user->password = $hashpass;
                if(isset($details['profilepic']))
					$user->prof_pic=$details['profilepic'];
				$user->save();
			

$userdata=array('username'=>$user->username,'password'=>$details['pswd'] );
if( Auth::attempt($userdata))
			{
				return Redirect::to('profile');
			}
  }}





}
