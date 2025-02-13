<?php

namespace App\Http\Controllers;

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
}
