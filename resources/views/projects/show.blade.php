@extends('layouts.master')

@section('title', 'Project: ' . $project->title)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Project: {{$project->title}}</h1>
                <h2>Description</h2>
                <p>{{$project->description}}</p>

                <a href="/projects/{{$project->id}}/edit"><button class="btn btn-primary">Edit</button></a>

                <form class="float-right" method="post" action="/projects/{{$project->id}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

                <div class="clear-both"></div>

            </div>


            <div class="col-md-4">

                <h1>Add a Task </h1>
                <form method="post" action="/projects/{{$project->id}}/Task">

                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add a Task</button>
                    </div>

                </form>


            </div>


            <div class="col-md-4">

                <h1>Project Tasks</h1>


                    @foreach($project->tasks as $task)
                        <form method="post" action="/tasks/{{$task->id}}">
                            @csrf
                            @method('patch')
                            <label class="{{$task->completed?'completed':''}}">
                                <input type="checkbox" name="complete" onchange="this.form.submit()"
                                    {{$task->completed?'checked':''}}
                                >
                                {{$task->title}}
                            </label>
                        </form>
                    @endforeach

            </div>

        </div>


        <div class="row">
            <div class="col-md-4">

                <h1>Employee</h1>

                Position: {{$employee->position}} <br/>
                Age: {{$employee->age}} <br />
                Gender: {{$employee->gender}}

            </div>

        </div>



    </div>








@endsection
