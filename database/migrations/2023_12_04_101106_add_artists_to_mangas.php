<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArtistsToMangas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mangas', function (Blueprint $table) {
            $table->unsignedBigInteger('artist_id');
            $table->foreign('artist_id')->references('id')->on('artists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mangas', function (Blueprint $table) {
            $table->dropForeign(['artist_id']);
            $table->dropColumn('artist_id');
        });
    }
}
