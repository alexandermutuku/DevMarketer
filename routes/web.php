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

route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function(){
  route::get('/' , 'ManageController@index');
  route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
  route::resource('/users','UserController');
  route::resource('/permissions','PermissionController',['except' => 'destroy']);
  route::resource('/roles','RoleController',['except' => 'destroy']);
});

Route::get('/home', 'HomeController@index')->name('home');
