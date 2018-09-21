<?php

use Illuminate\Http\Request;
use App\Http\Resources\UsersResource;
use App\Http\Resources\PeopleResource;
use App\User;
use App\People;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{id}', 'UserApiController@userData');

Route::post('/users/add/', 'UserApiController@addUser');

Route::post('/people/add/', 'PeopleApiController@addPeople');

Route::get('/people', 'PeopleApiController@listAll')->name('people');

Route::get('/people/{id}', 'PeopleApiController@listById');

Route::get('/test', 'PeopleApiController@test');