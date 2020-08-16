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
Auth::routes();




//------------------------front-end-----------------------------------


Route::get('/', 'HomeController@index')->name('home');
Route::get('/pactices', 'HomeController@pactices')->name('pactices');

Route::get('/service', 'HomeController@service')->name('service');
Route::get('/ourteam', 'HomeController@ourteam')->name('ourteam');

Route::get('/client', 'HomeController@client')->name('client');

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/resource', 'HomeController@resource')->name('resource');
Route::get('/contact', 'HomeController@contact')->name('contact');


Route::get('/chambers', 'HomeController@chambers')->name('chambers');

Route::get('/associates', 'HomeController@associates')->name('associates');
Route::get('/supporting-staff', 'HomeController@supportingstaff')->name('supportingstaff');






//-------------------------end front-end------------------------------













// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
