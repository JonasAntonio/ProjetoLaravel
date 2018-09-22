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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/create', 'UserController@create')->name('create');

Route::get('/list', 'UserController@list')->name('list');

Route::post('/create', 'UserController@createUser');

Route::get('/people', 'PeopleController@list')->name('people');

Route::get('/people/add', 'PeopleController@add')->name('/people/add');

Route::post('/people/add', 'PeopleController@addPeople');

Route::get('/people/edit/{id}', 'PeopleController@edit')->name('/people/edit/{id}');

Route::post('/people/edit/{id}', 'PeopleController@editPerson');

Route::post('/people/delete/{id}', 'PeopleController@deletePerson');