<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => 'Apa itu Sahabat Tabanan?',
                'answer' => 'Sahabat Tabanan adalah sebuah platform yang menyediakan berbagai informasi dan layanan terkait Kabupaten Tabanan.',
            ],
            [
                'question' => 'Bagaimana cara bergabung dengan Sahabat Tabanan?',
                'answer' => 'Anda bisa bergabung dengan mendaftar melalui website kami atau menghubungi kami langsung.',
            ],
            [
                'question' => 'Apa manfaat menjadi anggota Sahabat Tabanan?',
                'answer' => 'Sebagai anggota, Anda akan mendapatkan akses ke berbagai informasi eksklusif dan penawaran khusus dari Sahabat Tabanan.',
            ],
            [
                'question' => 'Apakah Sahabat Tabanan memiliki aplikasi mobile?',
                'answer' => 'Saat ini, kami hanya menyediakan layanan melalui website, tetapi kami sedang mempertimbangkan pengembangan aplikasi mobile di masa depan.',
            ],
            [
                'question' => 'Bagaimana cara menghubungi Sahabat Tabanan?',
                'answer' => 'Anda dapat menghubungi kami melalui formulir kontak di website kami atau melalui email dan nomor telepon yang tersedia di halaman kontak.',
            ],
        ]);
    }
}
