<?php

namespace App\Http\Middleware;

use Closure;

class ForbidenWords
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $word_array = explode(" ",$request->content);

        $forbiden_words_in_comments = [
            'hate' , 'stupid' , 'idiot' , 'govno'
        ];

        $intersect = array_intersect($word_array,$forbiden_words_in_comments);
        //dd($intersect);
        if(count($intersect) > 0) {
            return redirect()->back()->withErrors(["message" => "Please don't be rude and choose your words wisely!"]);
        }

        return $next($request);
    }
}
