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

public function login()
{
 
		if(Auth::check())
		{
			//return 'poda naaye';
			return Redirect::to('/');
		}

		else
		{
			$creds=Input::all();
			// $errorMsg=Session::get('error');
			// Session::forget('error');
			// if(isset($errorMsg))
			// {
			// 	//return 'yo';
			// 	return View::make('login')->with(array('errorMsg'=>'Invalid credentials','title'=>'TDC login'));
			// }
			if(!isset($creds['username'],$creds['pswd']))
			{
				//return 'panni';
				return View::make('login')->with(array('errorMsg'=>'Enter the details to login','title'=>'LOGIN',
					'head'=>'Login to explore'));

			}
			else if( Auth::attempt(array('username'=>$creds['username'],'password'=>$creds['pswd'])))
			{
				//return 'poda';
				return Redirect::to('/instructions');
			}
			else
			{
				//return 'error creds';
				return View::make('login')->with(array('title'=>'LOGIN','errorMsg'=>'Invalid credentials',
					'head'=>'Login to explore'));
			}
		}






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


	public function search($username)
	{
              
				$details=$username;
            
            $users=User::where('username', 'LIKE', '%'.$username.'%')->get();
            $count=User::where('username', 'LIKE', '%'.$username.'%')->count();
            
  echo "<table><tr><td><strong>RANK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td><td><strong>USERNAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td><td><strong>SCORE</td></tr></strong>";
  foreach($users as $user)

 { echo "<tr><td>".$user->rank."</td><td>".$user['username']."</td><td>".$user['score']."</td></tr>";}
  echo "</table>";
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
				return Redirect::to('home');
			}
  }}






public function display()
{

$answered=DB::table('filter')
	                 ->where('uid',Auth::user()->id)
           ->count();
$posted=DB::table('questions')->where('posted_by',Auth::user()->id)
                              ->count();
$pts=DB::table('filter')->where('uid',Auth::user()->id)->get();
$correct=0;

foreach($pts as $pt)
{


	if($pt->points>0)
		$correct++;

}
return View::make('stats')->with(array('posted'=>$posted,'answered'=>$answered,'correct'=>$correct));

}




}
