<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'content',
    ];

    protected $hidden= [
        'user_id', 'team_id',
    ];

    const STORE_RULES =[
        'content' => 'required|min:10|string',
    ];
}
