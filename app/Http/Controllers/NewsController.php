<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;

class NewsController extends Controller
{   

    public function __construct() 
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function news () {

        $news = News::with('user')->orderBy('created_at', 'desc')->paginate(10);
        $news_team = Team::with('news')->get();
        //dd($news);
        //dd($news->links());
        return view('news.news', compact('news','news_team'));
        
    }

    public function singlenews($id) {
        
        $single_news = News::with('user','team')->find($id);
        //dd($single_news->team);
        return view ('news.single_news', compact('single_news'))
                    ->with(['user' => $single_news->user , 'teams' => $single_news->team]);
    }

    public function tagnews($team_id) {

        // $teamNews = Team::with('news')->findOrFail($team_id);

        // $teamNews = $teamNews->news()->paginate(5);
        // dd($teamNews);
        // return view ('news.tag_news', compact('teamNews'));

        $team = Team::find($team_id);
        $teamNews = $team->news()->orderBy('created_at', 'desc')->paginate(5);
        //dd($teamNews);
        return view ('news.tag_news', compact('team','teamNews'));
    }

    public function create () {

        $teams = Team::all();

        return view ('news.create_news', compact('teams'));
    }

    public function store (Request $request) {

        //dd(request('teams'));
        $this->validate(request(), News::STORE_RULES);

        $news = new News;
        $news->title = request('title');
        $news->content = request('content');
        $news->user_id = auth()->user()->id;

        $news->save();
        $news->team()->attach(request('teams'));

        session()->flash('message' , 'Thank you for publishing article on www.nba.com');
        
        return redirect('news/news'); 
    }
}
