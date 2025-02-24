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
        return new TaskCollection(task::all()->where('completed', '=', 0));
        // return TaskResource::collection(task::all());
    }

    public function completed()
    {
        return new TaskCollection(task::query()->where('completed', '!==', 0));
    }

    public function store(task $task)
    {
        $task->completed = true;
        $task->save();
        return new TaskCollection($task);
    }
}
