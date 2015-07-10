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


Route::post('/','UserController@create');

// Route::get('/profile',function()
// {
// 	return View::make('profile1');
// });
if(Auth::check())
{
Route::get('/home', function()
{	
	return View::make('dashboard')->with(array('title'=>'Hello '.Auth::user()->username,'head'=>'Here You Are Amigo!!!'));
} );
Route::get('logout',function()
{
   Auth::logout();
   return Redirect::to('login');
});

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
}

Route::get('/login',function()
{
	return View::make('login');
});

