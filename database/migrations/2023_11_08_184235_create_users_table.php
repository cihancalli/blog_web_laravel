<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('imageUrl');
            $table->string('username');
            $table->string('slug');
            $table->longText('userToken');
            $table->longText('userCode');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('password');
            $table->string('timezone');
            $table->integer('userLevel')->default(0);
            $table->integer('userLevelPoint')->default(0);
            $table->boolean('userPremium')->default(0);
            $table->boolean('blocked')->default(0);
            $table->unsignedBigInteger('roleId');
            $table->foreign('roleId')->references('id')->on('roles');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
