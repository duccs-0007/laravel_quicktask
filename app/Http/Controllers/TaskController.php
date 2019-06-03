<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\TaskFormRequest;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(TaskFormRequest $request)
    {
        return view('task.index');
    }

    public function store(TaskFormRequest $request)
    {
        
    }
}
