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
        return new TaskCollection(task::query()->where('completed', '!==', 0));
    }

    public function update(Request $request, task $task)
    {
        $task->update($request->all());
        return new TaskCollection($task);
    }
}
