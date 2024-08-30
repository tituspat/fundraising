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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id(); // id column
            $table->string('title')->nullable(); // title column
            $table->text('description')->nullable(); // description column, nullable
            $table->boolean('is_expired')->default(false); // is_expired column, boolean
            $table->boolean('is_previewed')->default(false); // is_previewed column, boolean
            $table->string('media')->nullable(); // media column, nullable
            $table->string('thumbnail'); // media column, nullable
            $table->string('url'); // url column, nullable
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
