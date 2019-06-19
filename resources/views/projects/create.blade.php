@extends('layouts.master')

@section('title', 'New Project')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-6">
            <h1>Describe Your New Project</h1>

            <form method="post" action="/projects">

                @csrf

                <div class="form-group">
                    <label for="title" class="{{$errors->has('title')?'error':''}}">Title</label>
                    <input type="text" name="title" id="title" class="form-control {{$errors->has('title')?'error-border':''}}" value="{{old('title')}}">
                </div>

                <div class="form-group">
                    <label for="description" class="{{$errors->has('description')?'error':''}}">Description</label>
                    <textarea id="description" name="description" class="form-control {{$errors->has('description')?'error-border':''}}">{{old('description')}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create a New Project</button>
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




