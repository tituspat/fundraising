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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // title column
            $table->longText('content')->nullable(); // description column, nullable
            $table->string('category')->nullable(); // description column, nullable
            $table->string('thumbnail')->nullable(); // description column, nullable
            $table->boolean('is_previewed')->default(false); // description column, nullable
            $table->string('meta_desc')->nullable(); // description column, nullable
            $table->string('created_by'); // 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
