<?php

namespace App\Http\Controllers;
use App\Team;
use App\Comment;

use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index() {
        
        $teams = Team::all();
        return view('teams.index',compact('teams'));
    }

    public function show($team_id) {

        //$team = Team::findOrFail($team_id);
        $team = Team::with('players', 'comments')->find($team_id);
        
        return view('teams.show',compact('team'));
    }
}
