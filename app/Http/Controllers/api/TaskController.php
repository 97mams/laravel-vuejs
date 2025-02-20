<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskCollection;
use App\Http\Resources\TaskResource;
use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return new TaskCollection(task::all());
        // return TaskResource::collection(task::all());
    }

    public function completed()
    {
        return new TaskCollection(task::all()->where('completd', '==', true));
    }

    public function store(Request $request, task $task)
    {
        dd($task);
    }
}
