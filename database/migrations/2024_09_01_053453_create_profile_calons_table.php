profile_calons_table

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
        Schema::create('profile_calons', function (Blueprint $table) {
            $table->id();
            $table->string('nama_calon');
            $table->string('foto_calon')->nullable();
            $table->text('visi');
            $table->text('more_visi');
            $table->text('profile');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_calons');
    }
};
