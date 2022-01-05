<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Followers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('followers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('image');
          $table->longText('job');
          $table->string('twitter');
          $table->string('facebook');
          $table->string('instagram');
          $table->string('linkedin');
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
