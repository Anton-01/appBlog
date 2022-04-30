<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePostsComments extends Migration
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
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id', 'foreignKey_comment_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('posts_id');
            $table->foreign('posts_id', 'foreignKey_post_users')->references('id')->on('posts')->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('comments_id')->nullable();
            $table->foreign('comments_id', 'foreignKey_comment_comments')->references('id')->on('comments')->onDelete('cascade')->onUpdate('restrict');
            $table->string('title', 70);
            $table->text('body');
            $table->boolean('condition')->default(0);
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
