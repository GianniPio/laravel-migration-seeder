<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('nickname', 30)->nullable();
            $table->string('surname', 30);
            $table->date('year_of_birth');
            $table->string('birth_place', 50);
            $table->integer('number_of_album');
            $table->integer('number_of_songs');
            $table->string('website', 30)->nullable();
            $table->string('instagram', 30)->nullable();
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
        Schema::dropIfExists('artist');
    }
}
