<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::auth();


//---------Home Controller------------------//

Route::get('/', 'QuotesController@index');
Route::get('/edit/{{quotes_id}}', 'QuotesController@edit');





//---------Home Controller------------------//

Route::get('/home', 'HomeController@index');





