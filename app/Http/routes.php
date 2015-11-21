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

Route::get('/', ['as' => 'home', function () {
    return view('pages.index');
}]);

Route::get('/our-team', ['as' => 'our-team', function () {
    return view('pages.our-team');
}]);
Route::get('/partners', ['as' => 'partners', function () {
    return view('pages.partners');
}]);

Route::get('/edutainment', ['as' => 'edutainment', function () {
    return view('pages.edutainment');
}]);

Route::get('/edutainment/{id}', ['as' => 'edutainment-package', 'uses' => 'packageController@showPackage']);


Route::get('/SAT-tour', ['as' => 'SAT-tour', function () {
    return view('pages.SAT-tour');
}]);
Route::get('/guides-roster', ['as' => 'guides-roster', function () {
    return view('pages.guides-roster');
}]);


Route::get('/SAT-tutor', ['as' => 'SAT-tutor', function () {
    return view('pages.SAT-tutor');
}]);
Route::get('/SM-tutor', ['as' => 'SM-tutor', function () {
    return view('pages.SM-tutor');
}]);
Route::get('/tutors-roster', ['as' => 'tutors-roster', function () {
    return view('pages.tutors-roster');
}]);


Route::get('/contact-us', ['as' => 'contact-us', function () {
    return view('pages.contact-us');
}]);