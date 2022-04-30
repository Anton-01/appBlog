<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menus_id')->nullable();
            $table->foreign('menus_id', 'foreignKey_menu_menus')->references('id')->on('menus')->onDelete('cascade')->onUpdate('restrict');
            $table->string('name', 50);
            $table->string('path', 100);
            $table->unsignedBigInteger('order')->default(1);
            $table->string('icon', 50)->nullable();
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
        Schema::dropIfExists('menus');
    }
}
