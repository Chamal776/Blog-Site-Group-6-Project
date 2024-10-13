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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();         // Title of the blog post
            $table->text('content')->nullable();         // Body/content of the blog post
            $table->string('author')->nullable();        // Author's name
            $table->string('category')->nullable();      // Category of the blog post
            $table->timestamp('published_at')->nullable(); // Date and time the post is published

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
