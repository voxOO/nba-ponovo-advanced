<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Team;

class News extends Model
{
    protected $fillabile = [
        'title','content'
    ];

    protected $hidden = [
        'id','user_id'
    ];

    const STORE_RULES = [
        'title' => 'required|max:250|string',
        'content' => 'required|max:10000|string'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function team() {
        return $this->belongsToMany(Team::class, 'news_teams');
    }
}
