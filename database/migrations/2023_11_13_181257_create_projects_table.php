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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('metaId')->nullable();
            $table->string('projectTitle');
            $table->string('imageUrl');
            $table->string('projectSummary');
            $table->longText('projectContent');
            $table->integer('view')->default(0);
            $table->boolean('published')->default(false);
            $table->string('slug');
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('metaId')->references('id')->on('metas');
            $table->foreign('categoryId')->references('id')->on('project_categories');
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
