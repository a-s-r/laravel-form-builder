<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFBQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fb_question', function(Blueprint $table){
            $table->increments('id');
            $table->integer('s_id')->unsigned()->comment('This is a fb_section id');
            $table->text('question');
            $table->boolean('is_comment');
            $table->boolean('is_comment_date');
            $table->string('comment_color', 12);
            $table->boolean('is_remedy');
            $table->boolean('is_remedy_date');
            $table->string('remedy_color', 12);
            $table->boolean('is_image');
            $table->string('image_color', 12);
            $table->integer('status');
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
        Schema::drop('fb_question');
    }
}
