<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Task;
use App\Project;

class TasksController extends Controller
{

    /**
     * Store a newly created task in storage.
     *
     * @param  Project $project
     * @return Response
     */
    public function store(Project $project)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3']
        ]);

        $project->tasks()->create($attributes);

        return back();
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  Task $task
     * @return Response
     */
    public function update(Task $task)
    {
        request()->has('complete')?$task->update(['completed' => true]):$task->update(['completed' => false]);

        return back();
    }

}
