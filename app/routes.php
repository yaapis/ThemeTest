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

Route::get('/', function()
{

    Theme::init('default');
    // this will render default app/views/hello view
    return View::make('hello');
});


Route::get('/welcome', function()
{

    Theme::init('default');
    // this will render default app/views/themes/welcome view
    return View::make('welcome');
});
