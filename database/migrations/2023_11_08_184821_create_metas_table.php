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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->string('keyword');
            $table->string('title');
            $table->integer('title_size');
            $table->string('description');
            $table->integer('description_size');
            $table->integer('content_size');
            $table->string('canonical');
            $table->string('locale');
            $table->string('type');
            $table->string('url');
            $table->string('site_name');
            $table->string('published_time');
            $table->string('modified_time');
            $table->string('image');
            $table->string('image_width');
            $table->string('image_height');
            $table->string('image_type');
            $table->string('author');
            $table->string('application_ld_json');
            $table->string('robots');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas');
    }
};
