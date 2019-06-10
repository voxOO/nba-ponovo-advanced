<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Middleware\ForbidenWords;
use App\Team;



class CommentController extends Controller
{

    public function __construct () {
        
        $this->middleware('forbiden_words');
    }

    public function store (Request $request) {

        $this->validate(request(), Comment::STORE_RULES);
        $comment = new Comment;

        
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = request('team_id');
        $comment->save();
        
        $team = Team::findOrFail(request('team_id'));

        return view('teams.show',compact('team'));
    }
}
