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
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->json('content')->nullable(); // Store dynamic blocks as JSON // Adjusted to longText for storing large amounts of text
            $table->uuid('author_id'); // Match users.id data type
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');// Foreign key linking to users table
            $table->timestamp('published_at')->nullable();
            $table->string('featured_image')->nullable();
            $table->uuid('category_id')->constrained(); // Foreign key linking to categories table
            $table->json('tags')->nullable(); // Store tags as JSON array
            $table->enum('status', ['draft', 'published', 'review'])->default('draft');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('seo_keywords')->nullable();
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
