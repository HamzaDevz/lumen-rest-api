<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{

    public function up()
    {
        Schema::create('Questions', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('usr_id')->unsigned();
            $table->longText('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('Questions');
    }
}
