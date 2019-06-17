@extends('layouts.master')

@section('news' , 'single news')

@section('content')

   <h2>{{ $single_news->title }}</h2>
   <p>{{ $single_news->content }}</p>
   <p>{{ 'name: '.$user->name.' email: '.$user->email}}</p>
   
   @foreach($teams as $team)
   <a class="btn btn-info" href="{{ route('single_team' , ['team_id' => $team->id]) }}">
      {{$team->name}}
   </a>
   @endforeach

@endsection