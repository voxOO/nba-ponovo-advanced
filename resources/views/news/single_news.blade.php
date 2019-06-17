@extends('layouts.master')

@section('news' , 'single news')

@section('content')

   <h2>{{ $single_news->title }}</h2>
   <p>{{ $single_news->content }}</p>
   <p>{{ 'name: '.$user->name.' email: '.$user->email}}</p>
   
   @foreach($teams as $team)
   <span class="btn btn-info">
      {{$team->name}}
   </span>
   @endforeach

@endsection