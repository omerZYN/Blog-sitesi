<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hakkimda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('hakkimda', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('title');
          $table->string('image');
          $table->longText('content');
          $table->longText('ara');
          $table->longText('bara');
          $table->longText('cara');
          $table->string('slug');
          $table->softDeletes();
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
        //
    }
}
