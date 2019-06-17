@extends('layouts.master')

@section('title' , 'News about the team')

@section('content')

<h2>Create news</h2>

<form method="POST" action="/news/create_news">
    {{csrf_field()}}

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
        @include('partials.error-message' , ['fieldTitle' => 'title' ])
    </div>

    <div class="form-group">
        <label for="content">Give as some awesome news</label>
        <textarea name="content" id="content" cols="100%" rows="10"></textarea>
        @include('partials.error-message' , ['fieldTitle' => 'content' ])
    </div>

    <div class="form-group">
        @foreach ($teams as $team) 
            <input type="checkbox" name="teams[]" value="{{ $team->id }}"> {{$team->name}} <br>
        @endforeach
    </div>

    <div class="form-group">
         <button type="submit" class="btn btn-primary">SEND NEWS</button>
    </div>

</form>

@endsection