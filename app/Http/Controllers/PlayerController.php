<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{   

    public function __construct() 
    {
        $this->middleware('auth');
        $this->middleware('verified');

    }

    public function showplayer ($id) {
        
        $player = Player::findOrFail($id);

        return view('players.showplayer', compact('player') );
    }
}
