<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('projects','ProjectsController');

# From a Direct Function Routes to Including Controller's In them.!
Route::get('/','PagesController@index');

Route::get('/about','PagesController@about');

Route::get('/contact','PagesController@contact');

//Route::get('/projects','ProjectsController@index');
//
//Route::get('/projects/{project}','ProjectsController@show');
//# Another Route That will Return the Contact Information.
//Route::get('/contact',function (){
//    return view('contact');
//});
//
//# Another Route
//Route::get('/about',function (){
//    return view('about');
//});
