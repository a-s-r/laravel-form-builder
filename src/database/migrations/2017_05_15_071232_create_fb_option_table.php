<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFBOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fb_option', function(Blueprint $table){
            $table->increments('id');
            $table->text('label');
            $table->text('value');
            $table->integer('t_id')->unsigned()->comment('This is fb_type table id');
            $table->integer('f_id')->unsigned()->comment('This is fb_form table id');
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
        Schema::drop('fb_option');
    }
}
