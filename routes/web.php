<?php

Route::get('/', function () {
    $tasks=DB::table('tasks')->get();
    return view('welcome', compact('tasks'));
});

//Route::get('/tasks', 'TaskController@getTasks');