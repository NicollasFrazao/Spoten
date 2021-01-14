<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create
        (
            'movie', 
            function (Blueprint $table) 
            {
                $table -> increments('id') -> index();
                $table -> string('name', 256) -> index();
                $table -> year('year');
                $table -> string('sinopse', 512) -> index();
                $table -> string('duration', 5);
                $table -> string('directors', 256) -> index();
                $table -> string('writers', 256) -> index();
                $table -> json('stars');
                $table -> decimal('rating', 5, 2);
                $table -> string('image', 256);
                
                $table -> timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie');
    }
}
