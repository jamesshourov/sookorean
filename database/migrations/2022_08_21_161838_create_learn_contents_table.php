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
        Schema::create('learn_contents', function (Blueprint $table) {
            $table->id();
            $table->text('title_english');
            $table->text('title_japanese')->nullable();
            $table->text('title_french')->nullable();
            $table->text('title_spanish')->nullable();
            $table->text('title_arabic')->nullable();
            $table->text('description_english')->nullable();
            $table->text('description_japanese')->nullable();
            $table->text('description_french')->nullable();
            $table->text('description_spanish')->nullable();
            $table->text('description_arabic')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('audio')->nullable();
            $table->text('video_link')->nullable();
            $table->text('category_id')->nullable();
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
        Schema::dropIfExists('learn_contents');
    }
};
