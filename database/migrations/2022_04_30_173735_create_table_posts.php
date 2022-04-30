<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'foreign_user_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('restrict');
            $table->string('title', 150);
            $table->string('slug', 150)->unique();
            $table->string('excerpt', 255)->nullable();
            $table->text('body');
            $table->enum('state_post', ['public', 'pending', 'private'])->default('public');
            $table->enum('condition', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('posts');
    }
}
