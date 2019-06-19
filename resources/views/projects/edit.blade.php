@extends('layouts.master')

@section('title', 'Edit Project')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-6">
            <h1>Change Your New Project</h1>

            <form method="post" action="/projects/{{$project->id}}">

                @csrf
                @method('patch')

                <div class="form-group">
                    <label for="title" class="{{$errors->has('title')?'error':''}}">Title</label>
                    <input type="text" name="title" id="title" class="form-control {{$errors->has('title')?'error-border':''}}" value="{{$project->title}}">
                </div>

                <div class="form-group">
                    <label for="description" class="{{$errors->has('description')?'error':''}}">Description</label>
                    <textarea id="description" name="description" class="form-control {{$errors->has('description')?'error-border':''}}">{{$project->description}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Make Changes</button>
                </div>

            </form>

            @if($errors->count())
            <ul class="error">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif

        </div>

    </div>

</div>
@endsection
