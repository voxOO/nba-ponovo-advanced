@extends('layouts.master')

@section('news' , 'all news')

@section('content')

<h2>News section</h2>

<ul>
    @foreach ($news as $new)
        <li>
            <a href="/news/news/{{$new->id}}">{{ $new->title }}</a><br>
            {{'name: '.$new->user->name.', email: '.$new->user->email}}
        </li>
    @endforeach
</ul>

{{ $news->links() }}


@endsection