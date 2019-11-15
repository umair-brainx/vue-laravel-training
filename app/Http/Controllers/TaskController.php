<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //
    public function fetchAll(){
        $tasks = Task::all();
        //return response()->json($tasks);
        return $tasks;
    }

    public function store(Request $request){
        $task = Task::create($request->all());
        return response()->json("added");
    }

    public function delete($id){
        $task = Task::find($id);
        Task::destroy($id);
        return response()->json("deleted");
    }
}
