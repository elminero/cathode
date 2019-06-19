<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

use App\Project;

use App\Employee;

//use Illuminate\Auth\Access\Gate;

//use Illuminate\Contracts\Auth\Access\Gate;

use Illuminate\Support\Facades\Gate;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where('owner_id', auth()->id())->get();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate(
            [
                'title' => ['required', 'min:3'],
                'description' => ['required', 'min:3']
            ]
        );

        Project::create($attributes + ['owner_id' => auth()->id()]);

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project

     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Employee $employee)
    {

        /*
        if ($project->owner_id !== auth()->id()) {
            abort(403);
        }
        */

       // abort_if($project->owner_id !== auth()->id(), 403);

      //  abort_unless(auth()->user()->owns($project), 403);

      //  dd($employee);

      //  $this->authorize('view', $project);

        /*
        if (Gate::denies('view', $project)) {
            abort(403);
        }
        */

        return view('projects.show', compact('project'), compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Project $project
     * @return RedirectResponse redirect()
     */
    public function update(Project $project)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);

        $project->update($attributes);

        return redirect('/projects/' . $project->id);
    }

    /**
     * Remove a Project resource from storage.
     *
     * @throws
     * @param  Project $project
     * @return RedirectResponse redirect()
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
