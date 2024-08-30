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
        DB::table('blogs')->insert([
            'title' => 'PENINGKATAN PRODUKSI BERAS MERAH',
            'thumbnail' => 'img/program/program-beras.jpg',
            'category' => 'program',
            'created_by' => 'admin',
            'content' => '<p>Tanaman padi merah adalah padi lokal Kabupaten Tabanan, Provinsi Bali. Tanaman ini tumbuh baik di kawasan dengan ketinggian tempat &gt; 500 mdpl, seperti di Kecamatan Penebel. Saat ini di Kecamatan Penebel terdapat areal tanam padi merah sekitar 227 ha.</p>',
        ]);
        DB::table('blogs')->insert([
            'title' => 'PETERNAKAN SAPI',
            'thumbnail' => 'img/program/program-peternakan2.jpg',
            'category' => 'program',
            'created_by' => 'admin',
            'content' => '<p>Untuk menunjang ketersediaan pupuk organik, populasi sapi perah di kawasan pengembangan padi merah ditambah sekitar 200 ekor sapi Bali, yang dikelola oleh 10 kelomok ternak (20 ekor per kelompok ternak).</p>',
        ]);
        DB::table('blogs')->insert([
            'title' => 'KELAPA KOPYOR GENJAH EXOTIC',
            'thumbnail' => 'img/program/program-kelapa.jpg',
            'category' => 'program',
            'created_by' => 'admin',
            'content' => '<p>Budi daya kelapa kopyor dengan teknologi & inovasi genetika akan meningkatkan produktifitas buah kopyor mendekati 100% kopyor</p>',
        ]);
        DB::table('blogs')->insert([
            'title' => 'PEMBUATAN PAKAN TERNAK SAPI & PUPUK ORGANIK',
            'thumbnail' => 'img/program/program-pupuk.jpg',
            'category' => 'program',
            'created_by' => 'admin',
            'content' => '<p>Melalui Permentan no.70/Permentan/SR.140/10/2011, telah ditetapkan standar pupuk organik. Untuk bisa menghasilkan pupuk organik sesuai standar, maka pembuatan pupuk organiknya mengikuti cara pembuatan pupuk organik yang benar.</p>',
        ]);
        DB::table('beritas')->insert([
            'title' => 'Kapolsek Tanggulangin Hadiri Tanam Pohon Sukun, di Sub Kogartap III/0816 Sidoarjo',
            'description' => 'SIDOARJO — Sub Kogartap III Kodim 0816 Sidoarjo telah memulai serempak penanaman 2000 pohon sukun secara simbolis sesuai instruksi Kaskogartap',
            'thumbnail' => 'https://gelorajatim.com/wp-content/uploads/2024/08/IMG-20240830-WA0036.jpg',
            'url' => 'https://gelorajatim.com/kapolsek-tanggulangin-hadiri-tanam-pohon-sukun-di-sub-kogartap-iii-0816-sidoarjo/', // password
            'is_previewed' => true,
        ]);

    }
}
