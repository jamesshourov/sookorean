<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('title_english');
            $table->text('title_japanese')->nullable();
            $table->text('title_french')->nullable();
            $table->text('title_spanish')->nullable();
            $table->text('title_arabic')->nullable();
            $table->text('description_english');
            $table->text('description_japanese')->nullable();
            $table->text('description_french')->nullable();
            $table->text('description_spanish')->nullable();
            $table->text('description_arabic')->nullable();
            $table->string('background_color');
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
        Schema::dropIfExists('categories');
    }
};
