<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function postTask(Request $request)
    {
        $task= new Task();
        $task ->title =$request->input('title');
        $task->save();
        return response()->json(['task'=> $task],201);
    }

    public function getTasks()
    {
        $tasks=  Task::all();
        $response =['tasks'=> $tasks];
        return response()->json($response,200);
    }
    public function putTask(Request $request,$id)
    {
        
    }
    public function deleteTask($id)
    {
        
    }
}