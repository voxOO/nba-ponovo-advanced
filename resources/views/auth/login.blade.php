@extends('layouts.master')

@section('title' , 'Login')

@section('content')
   
<h2>Login user</h2>

<form method="POST" action="/auth/login">
    
{{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email"/>
            @include('partials.error-message', ['fieldTitle' => 'email'])
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"/>
            @include('partials.error-message', ['fieldTitle' => 'password'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
</form>

@endsection