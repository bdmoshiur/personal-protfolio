<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('title');
            $table->string('meta_title');
            $table->longText('descriptions');
            $table->string('email')->unique();
            $table->string('date_of_birth');
            $table->integer('phone');
            $table->longText('address');
            $table->longText('facebook');
            $table->longText('twitter');
            $table->longText('linkedin');
            $table->longText('image')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('abouts');
    }
}
