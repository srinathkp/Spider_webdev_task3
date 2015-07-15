<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/usernamecheck/{username}','UserController@check');
// Route::get('/usernamecheck','UserController@check');
Route::get('/usernamesearch/{username}','UserController@search');


Route::post('/','UserController@create');

// Route::get('/profile',function()
// {
// 	return View::make('profile1');
// });


if(Auth::check())
{
Route::get('/home', function()
{	
	
    $filter=Auth::user()->qid_answered;

	$users=DB::table('users')
	                 ->whereNotIn('id',function($q){$q->select('qid')->from('filter')->where('uid',Auth::user()->id);})
	                 ->get();
	return View::make('dashboard')->with(array('title'=>'Hello '.$filter,
		'head'=>'Here You Are Amigo!!!','users'=>$users));
} );
Route::get('logout',function()
{
   Auth::logout();
   return Redirect::to('login');
});



Route::get('/instructions',function()
{
   return View::make('instructions')->with(array('title'=>'Instructions','head'=>'Here are the Instructions !!'));
});

Route::get('/leaderboard',function()
{


$users = User::orderBy('score', 'DESC')->get();
$sort_users= User::orderBy('username', 'ASC')->get();
   return View::make('leaderboard')->with(array('title'=>'Leaderboard','head'=>'Know where you stand !!','users'=>$users,'sortedusers'=>$sort_users));
});


Route::post('/questions/create','QuestController@create');


Route::get('/questions/{any}','QuestController@display');

Route::get('/myanswers/{any}','AnswerController@index');

// 	function()
// {
//    return View::make('myanswers')->with(array('title'=>'Your Answers','head'=>'Your journey in this corner so far ..!.:-)'));
// });
Route::get('/', function()
{
	return Redirect::to('/home');
});

Route::post('/questions/{any}','QuestController@ans_check');


	
Route::any('{rest}',function(){
     
	return Redirect::to('/home');
     


})->where('rest','.*');


	}






else {
	Route::get('/home',function()
	{
      return Redirect::to('login');
	});

Route::get('/', function()
{
	return View::make('signup')->with(array('title'=>'SignUp','head'=>'Signup to Discover,Ask and Answer'));
});


Route::get('/login',function()
{
	return View::make('login')->with(array('title'=>'Login','head'=>'Login to explore'));
});

Route::post('/login','UserController@login');

Route::any('{rest}',function(){
     
	return Redirect::to('login');
     


})->where('rest','.*');

}