<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration
{
    public function up()    {
        Schema::create('boards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('body',1000);
            $table->timestamps();
        });
    }

    public function down()
    {
         Schema::drop('boards');
    }
}
