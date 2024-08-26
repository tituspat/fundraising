<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
            'title' => 'PENINGKATAN PRODUKSI BERAS MERAH',
            'gambar' => 'img/program/program-beras.jpg',
            'description' => 'Tanaman padi merah adalah padi lokal Kabupaten Tabanan, Provinsi Bali. Tanaman ini tumbuh baik di kawasan dengan ketinggian tempat > 500 mdpl, seperti di Kecamatan Penebel. Saat ini di Kecamatan Penebel terdapat areal tanam padi merah sekitar 227 ha.',
        ]);
        DB::table('programs')->insert([
            'title' => 'PETERNAKAN SAPI',
            'gambar' => 'img/program/program-peternakan2.jpg',
            'description' => 'Untuk menunjang ketersediaan pupuk organik, populasi sapi perah di kawasan pengembangan padi merah ditambah sekitar 200 ekor sapi Bali, yang dikelola oleh 10 kelomok ternak (20 ekor per kelompok ternak).',
        ]);
        DB::table('programs')->insert([
            'title' => 'KELAPA KOPYOR GENJAH EXOTIC',
            'gambar' => 'img/program/program-kelapa.jpg',
            'description' => 'Budi daya kelapa kopyor dengan teknologi & inovasi genetika akan meningkatkan produktifitas buah kopyor mendekati 100% kopyor',
        ]);
        DB::table('programs')->insert([
            'title' => 'PEMBUATAN PAKAN TERNAK SAPI & PUPUK ORGANIK',
            'gambar' => 'img/program/program-pupuk.jpg',
            'description' => 'Melalui Permentan no.70/Permentan/SR.140/10/2011, telah ditetapkan standar pupuk organik. Untuk bisa menghasilkan pupuk organik sesuai standar, maka pembuatan pupuk organiknya mengikuti cara pembuatan pupuk organik yang benar.',
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);
        DB::table('profile_calons')->insert([
            'nama_calon' => 'I Gede Putu Atma Giri',
            // 'foto_calon' => 'null',
            'visi' => 'Terwujudnya masyarakat Tabanan yang SAHABAT (Sinergi, Andal, Humanis, Antikorupsi, Amanah, dan Terpercaya)',
            'misi' => 'jaya',
            'profile' => 'Salam sejahtera, Om Swastiastu, Namo Buddhaya, Salam Kebajikan, saya Giri. Berdasarkan pengalaman hidup dan kerja saya, saya ingin berkontribusi lebih dalam memajukan dan meningkatkan kesejahteraan masyarakat di wilayah Kabupaten Tabanan, Bali.

            Saya percaya bahwa dengan kerja keras, ketulusan hati, dan komitmen yang kuat, saya dapat membawa perubahan yang positif bagi masyarakat di Kabupaten Tabanan. Saya sangat mengharapkan dukungan dan doa dari seluruh masyarakat agar saya dapat terpilih dan mewujudkan visi dan misi yang telah saya tetapkan.',
        ]);
    }
}
