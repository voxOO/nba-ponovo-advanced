<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function news () {

        $news = News::with('user')->paginate(10);
        //dd($news);
        return view('news.news', compact('news'));
        
    }

    public function singlenews($id) {
        
        $single_news = News::with('user')->find($id);
        //dd($single_news);
        return view ('news/single_news', compact('single_news'));
    }
}
