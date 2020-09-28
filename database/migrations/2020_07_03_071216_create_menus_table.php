<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
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
            $table->tinyInteger('parent_id')->default(0);
            $table->string('name');
            $table->string('nicename')->unique();
            $table->string('nameEn')->nullable();
            $table->string('nicenameEn')->unique();
            $table->string('banner')->nullable();
            $table->string('icon')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
			$table->softDeletes();
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