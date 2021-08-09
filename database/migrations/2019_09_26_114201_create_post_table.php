<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->string('title');
          
          // i commented the user id out because we er gonna be using the polymorphic relationship so chill

            $table->integer('user_id')->unsigned(); //adding the column using referesh but the entries in the database will be deleted
                                        //instead add another column to the table
            $table->text('content');
            $table->increments('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post');
    }
}
