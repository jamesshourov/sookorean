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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profile_pic')->nullable();
            $table->string('profile_pic_type')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('korean_level')->nullable();
            $table->string('carrot_points')->default(0);
            $table->string('social_type')->nullable();
            $table->string('social_id')->nullable();
            $table->string('device_type')->nullable();
            $table->string('device_token')->nullable();
            $table->tinyInteger('premium')->nullable();
            $table->string('email')->unique();
            $table->string('expire_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('user');
            $table->tinyInteger('status')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
