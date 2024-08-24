<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'user_id' => 6,
                'testimonial' => 'Layanan dari tim Sahabat Tabanan sangat luar biasa. Mereka selalu responsif dan memberikan solusi terbaik untuk setiap permasalahan.',
                'is_previewed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'testimonial' => 'Saya sangat puas dengan kerja keras dan dedikasi Sahabat Tabanan. Mereka benar-benar peduli dengan kebutuhan kami.',
                'is_previewed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'testimonial' => 'Profesionalisme dan komitmen yang ditunjukkan oleh Sahabat Tabanan membuat saya merasa sangat dihargai sebagai pelanggan.',
                'is_previewed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'testimonial' => 'Tim Sahabat Tabanan tidak hanya memberikan layanan yang hebat, tetapi juga memastikan bahwa kami selalu mendapatkan hasil yang maksimal.',
                'is_previewed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'testimonial' => 'Saya sangat merekomendasikan Sahabat Tabanan kepada siapa pun yang mencari mitra yang dapat diandalkan dan berkualitas.',
                'is_previewed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
