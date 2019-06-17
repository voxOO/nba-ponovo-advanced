<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;

class NewsController extends Controller
{
    public function news () {

        $news = News::with('user')->paginate(10);
        //dd($news);
        //dd($news->links());
        return view('news.news', compact('news'));
        
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
        $teamNews = $team->news()->paginate(5);
        //dd($teamNews);
        return view ('news.tag_news', compact('team','teamNews'));
    }
}
