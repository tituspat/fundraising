<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        DB::table('profile_calons')->insert([
            'nama_calon' => 'I Gede Putu Atma Giri',
            'visi' => 'Terwujudnya masyarakat Tabanan yang SAHABAT (Sinergi, Andal, Humanis, Antikorupsi, Amanah, dan Terpercaya)',
            'misi' => 'Memaksimalkan setiap potensi perekonomian masyarakat Tabanan menjadi lebih produktif dan berdaya saing; Meningkatkan sarana dan prasarana umum; Mendukung kegiatan prestasi masyarakat Tabanan; Meningkatkan dukungan terhadap kegiatan keagamaan; Memberikan pelayanan yang berkualitas',
            'profile' => 'Salam sejahtera, Om Swastiastu, Namo Buddhaya, Salam Kebajikan, saya Giri. Berdasarkan pengalaman hidup dan kerja saya, saya ingin berkontribusi lebih dalam memajukan dan meningkatkan kesejahteraan masyarakat di wilayah Kabupaten Tabanan, Bali. Saya percaya bahwa dengan kerja keras, ketulusan hati, dan komitmen yang kuat, saya dapat membawa perubahan yang positif bagi masyarakat di Kabupaten Tabanan. Saya sangat mengharapkan dukungan dan doa dari seluruh masyarakat agar saya dapat terpilih dan mewujudkan visi dan misi yang telah saya tetapkan.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
