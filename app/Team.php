<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'email', 'address','city'
    ];

    protected $hidden = [
        'id'
    ];

    public function players() {
        return $this->hasMany(Player::class);
    }

    public function comments () {
        return $this->hasMany(Comment::class);
    }
}
