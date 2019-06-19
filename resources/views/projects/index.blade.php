@extends('layouts.master')

@section('title', 'New Project')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>List of Projects</h1>
                <ul>
                    @foreach($projects as $project)
                        <li><a href="projects/{{$project->id}}">{{$project->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
