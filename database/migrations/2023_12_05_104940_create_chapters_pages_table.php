<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters_pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('manga_chapter_id');
            $table->string('page_path');
            $table->foreign('manga_chapter_id')->references('id')->on('mangas_chapters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapters_pages');
    }
}
