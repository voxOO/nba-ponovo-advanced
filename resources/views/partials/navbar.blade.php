

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5>NBA</h5>
    <nav class="navbar my-2 my-md-0 mr-md-3">
    </nav>


    @if(auth()->check())
    <span>{{auth()->user()->name}}</span>
    <a class="btn btn-outline-primary" href="/logout">Logout</a>
    @else
    <a class="btn btn-outline-primary" href="/auth/login">Login</a>
    @endif
    <a class="btn btn-outline-primary" href="/auth/register">Register</a>
    <div class="navbar "><a href="/teams" class="btn btn-outline-primary">TEAMS</a></div>
    
</div>

@if(count($errors->all()) > 0)
    <p class="alert alert-danger">{{$errors->first('message')}}</p>
@endif