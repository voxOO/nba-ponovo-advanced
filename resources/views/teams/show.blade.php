@extends('layouts.master')

@section('title' , 'List of teams')

@section('content')
    <div>
         <h3>{{$team->name}}</h3>
         <p>{{$team->email}}</p>
         <p>{{$team->address}}</p>
         <h5>{{$team->city}}</h5>
    </div>
    <hr>
    <ul>
    @foreach ($team->players as $player)
        <li>
            <a href="/players/{{$player->id}}">{{$player->first_name." ".$player->second_name}}</a>
        </li>
    @endforeach
    </ul>

    <form method="POST" action="{{ route('comment', ['team_id' => $team->id]) }}">
        {{csrf_field()}}
    
        <div class="form-group">
            <label for="content">Comment:</label>
            <input type="text" class="form-control" id="content" name="content">
            @include('partials.error-message' , ['fieldTitle' => 'content' ])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Comment</button>
        </div>
    </form>
    <hr>

    @foreach ($team->comments as $comment) 
        <p>
            {{$comment->content}}
        </p>
    @endforeach


@endsection