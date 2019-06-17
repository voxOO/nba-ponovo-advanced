@extends('layouts.master')

@section('title' , 'News about the team')

@section('content')

<h3>News about the {{$team->name}}</h3>
<hr>

<ul>
    @foreach ($teamNews as $news)
        <li>
            <a href="/news/news/{{$news->id}}">{{ $news->title }}</a><br>
            {{$news->content}}
        </li>
    @endforeach
</ul>

{{ $teamNews->links() }}

@endsection