@extends('layouts.master')

@if(Session::has('flash_message'))
  <div class="alert alert-success">
    {{ Session::get('flash_message') }}
  </div>
@endif

@if($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  </div>
@endif

@section('content')

<h1>Add a New Task</h1>
<p class="lead">Add to your task list below.</p>
<hr>

<form method="POST" action="/tasks" accept-charset="UTF-8"><input name="_token" type="hidden" value="6CNajBsWcNjJ8iTAfHzj1zX5rZr9bE7qZfOGMT6i">

    <div class="form-group">
        <label for="title" class="control-label">Title:</label>
        <input class="form-control" name="title" type="text" id="title">
    </div>
    
    <div class="form-group">
        <label for="description" class="control-label">Description:</label>
        <textarea class="form-control" name="description" cols="50" rows="10" id="description"></textarea>
    </div>
    
    <input class="btn btn-primary" type="submit" value="Create New Task">
    
    </form>

@stop
