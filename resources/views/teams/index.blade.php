@extends('layouts.master')

@section('title' , 'List of teams')

@section('content')

    <ul>
        @foreach ($teams as $team)
            <li>
                 <h2><a href="/teams/{{$team->id}}">{{$team->name}}</a></h2>
            </li>
        @endforeach
    </ul>

@endsection