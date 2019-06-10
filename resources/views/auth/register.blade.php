@extends('layouts.master')

@section('title' , 'Registration')

@section('content')
   
<h2>Register user</h2>

<form method='POST' action='/auth/register'>
    {{csrf_field()}}

    <div class='form-group'>
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
         @include('partials.error-message' , ['fieldTitle' => 'name' ])
    </div>

    <div class="form-group">
            <label for="name">Email</label>
            <input type="text" class="form-control" id="email" name="email">
            @include('partials.error-message' ,['fieldTitle' => 'email'])
    </div>

    <div class="form-group">
            <label for="name">Password</label>
            <input 
                type="password" 
                class="form-control" 
                id="password" 
                name="password"
            >
            @include('partials.error-message' ,['fieldTitle' => 'password'])
    </div>

    <div class="form-group">
            <label for="name">Confirm Password</label>
            <input 
                type="password" 
                class="form-control" 
                id="password_confirmation" 
                name="password_confirmation"
            >
            @include('partials.error-message' ,['fieldTitle' => 'password_confirmation'])
    </div>

    <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
    </div>

</form>
    
@endsection