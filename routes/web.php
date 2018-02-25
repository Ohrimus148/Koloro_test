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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/projects', 'ProjectController@index')->name('projects');
Route::post('/project/store', 'ProjectController@store')->name('project.store');
Route::get('/project/edit/{id}', 'ProjectController@edit')->name('project.edit');
Route::post('/project/update', 'ProjectController@update')->name('project.update');
Route::get('/managers', 'ManagerController@index')->name('managers');
Route::post('manager/store', 'ManagerController@store')->name('manager.store');
Route::get('manager/edit/{id}', 'ManagerController@edit')->name('manager.edit');
Route::post('manager/update', 'ManagerController@update')->name('manager.update');
Route::get('/get_projects/{id}/{section}', 'ManagerController@getAllData');






