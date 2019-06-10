<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Team;

class LoginController extends Controller {

    public function __construct() 
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function create () {

        return view('auth.login');
    }

    public function store(Request $request) {
        
        if(!auth()->attempt(request(['email','password']))){
            
            return back()->withErrors([
                'message' => "Bad credentials. Please try again"
            ]);
        }
        elseif(auth()->user()->is_verified === 1) {

            return redirect('teams');
        }
        else {

            auth()->logout();
            return back()->withErrors([
                'message' => "You have to verify your email address. Please check your email address for verification"  
            ]);
        }

    }

    public function verify ($id) {

        $user = User::findOrFail($id);

        if ($user) {
            $user->is_verified = true;
            $user->save();
        }

        auth()->login($user);
        return view('email.verified_email_user',compact('user'));
    }

    public function logout() {

        auth()->logout();
        return redirect('teams');
    }
}