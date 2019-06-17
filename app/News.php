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

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function team() {
        return $this->belongsToMany(Team::class, 'news_teams');
    }
}
