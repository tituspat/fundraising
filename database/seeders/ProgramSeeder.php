<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'description' => 'Tanaman padi merah adalah padi lokal Kabupaten Tabanan, Provinsi Bali. Tanaman ini tumbuh baik di kawasan dengan ketinggian tempat > 500 mdpl, seperti di Kecamatan Penebel. Saat ini di Kecamatan Penebel terdapat areal tanam padi merah sekitar 227 ha.',
        ]);
        DB::table('programs')->insert([
            'title' => 'PETERNAKAN SAPI',
            'description' => 'Untuk menunjang ketersediaan pupuk organik, populasi sapi perah di kawasan pengembangan padi merah ditambah sekitar 200 ekor sapi Bali, yang dikelola oleh 10 kelomok ternak (20 ekor per kelompok ternak).',
        ]);
        DB::table('programs')->insert([
            'title' => 'KELAPA KOPYOR GENJAH EXOTIC',
            'description' => 'Budi daya kelapa kopyor dengan teknologi & inovasi genetika akan meningkatkan produktifitas buah kopyor mendekati 100% kopyor',
        ]);
        DB::table('programs')->insert([
            'title' => 'PEMBUATAN PAKAN TERNAK SAPI & PUPUK ORGANIK',
            'description' => 'Melalui Permentan no.70/Permentan/SR.140/10/2011, telah ditetapkan standar pupuk organik. Untuk bisa menghasilkan pupuk organik sesuai standar, maka pembuatan pupuk organiknya mengikuti cara pembuatan pupuk organik yang benar.',
        ]);
    }
}
