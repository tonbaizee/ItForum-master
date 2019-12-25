<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AuthorName');
            $table->string('Message',10000);
            $table->string('postImage',400);
            $table->integer('underTopicId')->unsigned();
            $table->timestamps();
        });
        Schema::table('discussion', function ($table) {
            $table->foreign('underTopicId')
                ->references('id')->on('underTopics')
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
        Schema::dropIfExists('discussion');
    }
}
