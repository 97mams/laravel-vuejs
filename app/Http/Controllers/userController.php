<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class userController extends Controller
{
    public function show()
    {
        return Inertia::render('Home', [
            'user' => [
                'name' => 'mamisoa',
                'lastName' => 'ratsimbariso',
            ]
        ]);
    }
}
