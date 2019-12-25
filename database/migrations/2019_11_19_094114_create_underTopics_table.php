<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnderTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('underTopics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('AuthorName');
            $table->string('theme',10000);
            $table->string('postImage',400);
            $table->integer('categoryId')->unsigned();
            $table->timestamps();
        });
        Schema::table('underTopics', function ($table) {
            $table->foreign('categoryId')
                ->references('id')->on('topics')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('underTopics');
    }
}
