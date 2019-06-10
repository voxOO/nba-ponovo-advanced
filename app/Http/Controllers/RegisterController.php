<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Team;
use App\Mail\UserVerification;


class RegisterController extends Controller
{   
    public function __construct() 
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {

        $this->validate(request(), User::STORE_RULES);
        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        \Mail::to($request->email)->send(new UserVerification($user));

        return redirect('login');
    }
}
