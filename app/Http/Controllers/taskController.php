<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\task;
use Illuminate\Http\Request;
use Inertia\Inertia;

class taskController extends Controller
{
    public function index()
    {
        $tasks = task::all(['id', 'content']);
        return Inertia::render('Home', [
            'tasks' => $tasks
        ]);
    }

    public function store(StoreTaskRequest $request)
    {
        $data = $request->validated();
        $data  += ['completed' => false];
        return task::create($data);
    }

    public function completed()
    {
        $completdTask = task::all()->where('compled', true);
        dd($completdTask);
    }
}
