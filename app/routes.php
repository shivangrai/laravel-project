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


Route::get('/','HomeController@homepage');




Route::get('forgotpass', function()


{
	return View::make('forgotpass');
	
	
}
);


Route::post('fpass', 'HomeController@fpass') ;

Route::post('changepass', 'HomeController@changepass') ;


Route::get('passtemp',function()

{
	
	return View::make('changepass');
}
);







Route::post('signup','HomeController@signup');



Route::post('login','HomeController@login');


Route::post('login1','HomeController@login1');

Route::get ('login1temp', function()

{
	return View::make('firstlogin');
}
);




Route::post('login2','HomeController@login2');


Route::get ('login2temp', function()

{
	return View::make('fpfinal');
}
);




Route::post('logout','HomeController@logout');



Route::post('edit1','HomeController@edit1');


Route::post('edit2','HomeController@edit2');

Route::post('edit3','HomeController@edit3');


Route::get('etemp',function()

{
	
	return View::make('edit'); 
}

);



Route::get('updated',function()

{
	
	return View::make('updated'); 
}

);



Route::post('viewpro',function()

{
	
	return View::make('viewpro'); 
}

);




//upload 1

Route::post('upload1', 'HomeController@upload1') ;

Route::get('upload1', 'HomeController@upload1') ;


//upload2

Route::post('upload2', 'HomeController@upload2') ;

Route::get('upload3', 'HomeController@upload3') ;








