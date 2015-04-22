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

Route::get('/', array(
    'before' => 'birthdate:4/22',
    'after'=> 'logvisits',
    function(){
        return View::make('hello');
    }));


Route::get('about', function(){
    return 'ABOUT content';
});

Route::get('about/directions', function(){
    return 'DIRECTIONS go here';
});

Route::any('submit-form', function(){
    return 'process FORM';
});

Route::get('about/{theSubject}', function($theSubject){
    return $theSubject.'content goes here';
});

Route::get('about/{theArt}/{theSpecialty}', function($theArt, $theSpecialty){
    return 'Welcome to' . $theSpecialty . ' in ' . $theArt;
});
