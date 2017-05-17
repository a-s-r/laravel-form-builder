<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFBQuestionOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fb_question_option', function(Blueprint $table){
            $table->increments('id');
            $table->integer('q_id')->unsigned()->comment('This is a fb_question table id');
            $table->integer('o_id')->unsigned()->comment('This is a fb_option table id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fb_question_option');
    }
}
