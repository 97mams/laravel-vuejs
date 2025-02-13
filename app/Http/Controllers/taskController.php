<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;
use Inertia\Inertia;

class taskController extends Controller
{
    public function index()
    {
        $task = task::all();
        return Inertia::render('Task', $task);
    }
}
