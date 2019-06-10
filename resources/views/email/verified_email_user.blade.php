@extends('layouts.master')

@section('title' , 'Show player')

@section('content')



<p>Welcome {{$user->name}} your email has been successfully authenticated.</p>
<h5><a href="/teams">Click here to proceede to the website!</a></h5>

@endsection