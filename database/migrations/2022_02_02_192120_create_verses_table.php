<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVersesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verses', function (Blueprint $table) {
            $table->increments('verseId');
            $table->text('text');
            $table->integer('verse');
            $table->integer('capitulo');

            $table->integer('versionId')->unsigned();
            $table->foreign('versionId')->references('versionId')->on('versions')->onDelete("cascade");

            $table->integer('bookId')->unsigned();
            $table->foreign('bookId')->references('bookId')->on('books')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verses');
    }
}
