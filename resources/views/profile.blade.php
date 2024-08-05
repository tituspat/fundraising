@extends('layouts.app')

@section('content')
<section class="xl:px-24 md:px-10 lg:px-16">
    <div class="relative  bg-cover bg-center flex flex-col items-center justify-center pb-16 bg-amber-300">
        <div class="flex flex-col mx-3 md:mx-6" >
            <div class="flex-shrink px-4 basis-1/2 self-center"><img src="{{ asset('img/calon.png') }}"></div>
            <div class="basis-1/2 w-auto my-auto text-zinc-800">
                <!-- <h5 class="text-3xl font-bold my-4">Profile</h5> -->
                <h5 class="text-5xl font-bold my-4">I Gede Putu Atma Giri</h5>
                <p class="xl:text-2xl">
                Salam sejahtera, Om Swastiastu, Namo Buddhaya, Salam Kebajikan, saya Giri. Kandidat calon Bupati/Wakil Bupati Kabupaten Tabanan. Berdasarkan pengalaman hidup dan kerja saya, saya ingin berkontribusi lebih dalam memajukan dan meningkatkan kesejahteraan masyarakat di wilayah Kabupaten Tabanan, Bali.
                <br><br>
                Saya Giri, ingin mengabdikan diri untuk kesejahteraan masyarakat, karena saya percaya bahwa dengan menjadi bagian dari pemerintahan, dapat berkontribusi dalam mewujudkan perubahan positif untuk masyarakat.
                <br><br>
                Saat ini, demi memperjuangkan hak masyarakat di Kabupaten Tabanan, seperti Visi saya, "agar terwujudnya masyarakat Tabanan yang SAHABAT (Sinergi, Andal, Humanis, Antikorupsi, Berinofasi, Amanah, Terpercaya)".
                <br><br>
                Beberapa program kerja yang saya miliki, salah satunya Pengembangan Wilayah Usaha Tani Padi Merah, peningkatan ketersediaan beras merah dan mensejahterakan pendapatan petani di Kabupaten Tabanan.
                <br><br>
                Saya percaya bahwa dengan kerja keras, ketulusan hati, dan komitmen yang kuat, saya dapat membawa perubahan yang positif bagi masyarakat di Kabupaten Tabanan. Saya sangat mengharapkan dukungan dan doa dari seluruh masyarakat agar saya dapat terpilih dan mewujudkan visi dan misi yang telah saya tetapkan.
                </p>
            </div>         
        </div>
    </div>
</section>
<!-- Visi & Misi -->
<section>
    <div class="grid grid-rows-2 mx-20 my-12">
        <div class="text-center">
            <h1 class="text-4xl">VISI</h1>
            <h3 class="text-2xl">Terwujudnya masyarakat Tabanan yang SAHABAT <br>(Sinergi, Andal, Humanis, Antikorupsi, Amanah, dan Terpercaya)</h3>
        </div>
        <div class="text-center px-5">
            <h1 class="text-center text-4xl">MISI</h1>
            
                <ol class="text-2xl text-left" type="1">
                    <li>1. Memaksimalkan setiap potensi perekonomian masyarakat Tabanan menjadi lebih produktif dan berdaya saing</li>
                    <li>2. Meningkatkan sarana dan prasarana umum</li>
                    <li>3. Mendukung kegiatan prestasi masyarakat Tabanan</li>
                    <li>4. Meningkatkan dukungan terhadap kegiatan keagamaan</li>
                    <li>5. Memberikan pelayanan yang berkualitas</li>
                </ol>
            
        </div>
        
    </div>
</section>
<!-- program -->
<section>
    <div class="flex flex-col justify-center mx-4 lg:mx-9 xl:mx-20 my-9 gap-3">
        <div class="text-center flex flex-col gap-3">
            <h3 class="text-lg md:text-2xl lg:text-3xl font-bold">Program</h3>
            <h2 class="text-xl md:text-3xl lg:text-4xl">Untuk Indonesia Yang Lebih Sejahtera</h2>
        </div>
        <div class="grid grid-flow-row lg:grid-cols-2 gap-8 ">
            <div class="grid grid-rows-3 grid-flow-col gap-4 p-3 md:p-5 border-[1px] border-black h-36 md:h-48 lg:h-56 xl:h-64">
                <div class="grid row-span-3 items-center overflow-hidden">
                    <img class="align-middle w-10 md:w-20 lg:w-40" src="{{ asset('img/program/program-beras2.jpg')}}" alt="">
                </div>    
                <div class="col-span-2"><h3 class="font-bold">PENINGKATAN PRODUKSI BERAS MERAH</h3></div>
                <div class="row-span-2 col-span-2 overflow-hidden"><p>Tanaman padi merah adalah padi lokal Kabupaten Tabanan, Provinsi Bali. Tanaman ini tumbuh baik di kawasan dengan ketinggian tempat > 500 mdpl, seperti di Kecamatan Penebel. Saat ini di Kecamatan Penebel terdapat areal tanam padi merah sekitar 227 ha. ...</p></div>
            </div>
            <div class="grid grid-rows-3 grid-flow-col gap-4 p-3 md:p-5 border-[1px] border-black h-36 md:h-48 lg:h-56 xl:h-64">
                <div class="grid row-span-3 items-center overflow-hidden">
                    <img class="align-middle w-10 md:w-20 lg:w-40" src="{{ asset('img/program/program-peternakan2.jpg') }}" alt="">
                </div>
                <div class="col-span-2"><h3 class="font-bold">PETERNAKAN SAPI</h3></div>
                <div class="row-span-2 col-span-2 overflow-hidden">Untuk menunjang ketersediaan pupuk organik, populasi sapi perah di kawasan pengembangan padi merah ditambah sekitar 200 ekor sapi Bali, yang dikelola oleh 10 kelomok ternak (20 ekor per kelompok ternak).</div>
            </div>
            <div class="grid grid-rows-3 grid-flow-col gap-4 p-3 md:p-5 border-[1px] border-black h-36 md:h-48 lg:h-56 xl:h-64">
                <div class="grid row-span-3 items-center overflow-hidden">
                    <img class="align-middle w-10 md:w-20 lg:w-40" src="{{ asset('img/program/program-kelapa.jpg') }}" alt="">
                </div>
                <div class="col-span-2"><h3 class="font-bold">KELAPA KOPYOR GENJAH EXOTIC</h3></div>
                <div class="row-span-2 col-span-2 overflow-hidden">Budi daya kelapa kopyor dengan teknologi & inovasi genetika akan meningkatkan produktifitas buah kopyor mendekati 100% kopyor</div>
            </div>
            <div class="grid grid-rows-3 grid-flow-col gap-4 p-3 md:p-5 border-[1px] border-black h-36 md:h-48 lg:h-56 xl:h-64 ">
                <div class="grid row-span-3 items-center overflow-hidden">
                    <img class="align-middle w-10 md:w-20 lg:w-40" src="{{ asset('img/program/program-pupuk.jpg') }}" alt="" height="50px">
                </div>
                <div class="col-span-2"><h3 class="font-bold">PEMBUATAN PAKAN TERNAK SAPI & PUPUK ORGANIK</h3></div>
                <div class="row-span-2 col-span-2 overflow-hidden">Melalui Permentan no.70/Permentan/SR.140/10/2011, telah ditetapkan standar pupuk organik. Untuk bisa menghasilkan pupuk organik sesuai standar, maka pembuatan pupuk organiknya mengikuti cara pembuatan pupuk organik yang benar.</div>
            </div>
        </div>
    </div>
</section>
@endsection