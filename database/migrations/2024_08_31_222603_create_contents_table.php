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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->String('jumbotron_title');
            $table->String('jumbotron_img');
            $table->String('jumbotron_subtitle');
            $table->String('profile_title');
            $table->String('program_title');
            $table->String('support_text');
            $table->String('email_title');
            $table->String('footer_address');
            $table->string('logo')->nullable();
            // $table->String('jumb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
