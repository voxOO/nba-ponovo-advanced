@extends('layouts.master')

@section('news' , 'single news')

@section('content')

   <h2>{{ $single_news->title }}</h2>
   <p>{{ $single_news->content }}</p>
   <p>{{ 'name: '.$single_news->user->name.' email: '.$single_news->user->email}}</p>
  
@endsection