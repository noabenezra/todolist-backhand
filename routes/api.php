<?php

use Illuminate\Http\Request;

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

Route::post('/task',[
    'uses'=> 'TaskController@postTask'
]);
Route::get('/tasks',[
    'uses'=> 'TaskController@getTasks'
]);
Route::put('/task/{id}',[
    'uses'=> 'TaskController@putTask'
]);
Route::delete('/task/{id}',[
    'uses'=> 'TaskController@deleteTask'
]);