<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$comments = factory(App\Comment::class, 50)->create();
        
        \App\User::all()->each(function(\App\User $user) {
            $user->comments()->saveMany(factory(\App\Comment::class, 5)->make());
        });
    }
}
