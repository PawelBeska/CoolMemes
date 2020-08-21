<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('text',255)->nullable(false);
            $table->integer('points')->default(0);
            $table->unsignedBigInteger('post_id')->index()->nullable(true);
            $table->foreign('post_id')->references('id')->on('posts');
            $table->unsignedBigInteger('author_id')->index()->nullable(true);
            $table->foreign('author_id')->references('id')->on('users');
            $table->boolean('visible')->default(1);
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
        Schema::dropIfExists('comments');
    }
}
