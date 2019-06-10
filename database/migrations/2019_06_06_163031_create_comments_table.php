<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content');
           
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                   ->references('id')
                   ->on('users')
                   ->onDelete('cascade');

            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')
                  ->references('id')
                  ->on('teams')
                  ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    //id, content, user_id (ovo je strani ključ), team_id (ovo je strani ključ)




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
