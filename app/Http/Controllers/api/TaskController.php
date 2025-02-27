<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskCollection;
use App\Http\Resources\TaskResource;
use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpParser\Node\Stmt\Return_;

class TaskController extends Controller
{
    public function index()
    {
        return new TaskCollection(task::all());
    }

    public function store(Request $request)
    {
        $task = new task();
        $t = $task->create([
            'content' => $request->input('content'),
            'completed' => false
        ]);
        return new TaskResource($t);
    }

    public function update(Request $request, task $task)
    {
        $task->update($request->all());
        return new TaskCollection($task);
    }

    public function remove(task $task)
    {
        $task->delete();
        return response()->json(["message" => "deleted"]);
    }
}
