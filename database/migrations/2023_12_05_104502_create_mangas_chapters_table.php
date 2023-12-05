<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangasChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas_chapters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('manga_id');
            $table->integer('chapter_number');
            $table->foreign('manga_id')->references('id')->on('mangas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas_chapters');
    }
}
