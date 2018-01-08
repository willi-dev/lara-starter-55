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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', ['as'=>'admin.dashboard', 'uses'=>'HomeController@index']);

// for templating references
Route::get('/admin/template-email', ['as' => 'admin.template-email', 'uses'=>'HomeController@templateEmail']);
Route::get('/admin/template-compose',['as' => 'admin.template-compose', 'uses'=>'HomeController@templateCompose']);
Route::get('/admin/template-calendar', ['as' => 'admin.template-calendar', 'uses'=>'HomeController@templateCalendar']);
Route::get('/admin/template-chat', ['as' => 'admin.template-chat', 'uses'=>'HomeController@templateChat']);
Route::get('/admin/template-chart', ['as' => 'admin.template-chart', 'uses'=>'HomeController@templateChart']);
Route::get('/admin/template-form', ['as' => 'admin.template-form', 'uses'=>'HomeController@templateForm']);
Route::get('/admin/template-element', ['as' => 'admin.template-element', 'uses'=>'HomeController@templateElement']);
Route::get('/admin/template-basictable', ['as' => 'admin.template-basictable', 'uses' =>'HomeController@templateBasicTable']);
Route::get('/admin/template-datatable', ['as' => 'admin.template-datatable', 'uses' => 'HomeController@templateDataTable']);
Route::get('/admin/template-googlemaps', ['as' => 'admin.template-googlemaps', 'uses' => 'HomeController@templateGoogleMap']);
Route::get('/admin/template-vectormaps', ['as' => 'admin.template-vectormaps', 'uses' => 'HomeController@templateVectorMap']);