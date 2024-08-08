<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            'name' => 'Juan',
            'rating' => '5',
            'testimonial' => 'Atma Giri sangat baik, dapat membantu dalam pertanian saya. Saya sangat mendukung anda!'
        ]);
        DB::table('testimonials')->insert([
            'name' => 'Ginting',
            'rating' => '4',
            'testimonial' => 'Kerjanya nyata! Orangnya ramah. saya sangat senang membantu anda!',
        ]);
    }
}
