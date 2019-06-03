<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\TaskFormRequest;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    public function index(TaskFormRequest $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    public function store(TaskFormRequest $request)
    {
        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/task');
    }
}
