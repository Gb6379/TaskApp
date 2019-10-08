<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;

class DateRangeController extends Controller
{
    //

    public function index (Request $request)
    {

        $tasks = Task::whereBetween('created_at', [$request->get('from'),
        $request->get('to')])->get();

        return view('tasks.index')->with('tasks', $tasks);

    }   
}
