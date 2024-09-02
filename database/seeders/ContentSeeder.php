<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('contents')->insert([
            
            'jumbotron_title' => 'Halo, Sahabat Tabanan',
            'jumbotron_img' => '/img/pura.png',
            'jumbotron_subtitle' => 'Mari majukan Tabanan agar lebih baik dan sejahtera.',
            'profile_title' => 'Salam Kenal',
            'program_title' => 'Rencana Kerja Sahabat Tabanan',
            'support_text' => 'Dukung Kami Untuk Wujudkan Mimpi SAHABAT Tabanan',
            'email_title'  => 'Kirimkan pertanyaan Anda di sini.',
            'footer_address'  => 'Tabanan, Bali, Indonesia - 82115',
        ]);

    }
}
