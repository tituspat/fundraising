@extends('layouts.app')

@section('content')
    <!-- Jumbotron -->
    <section class="font-sans">
        <div class="relative w-full h-screen bg-cover bg-center flex flex-col items-center justify-center" style="background-image: url('img/pura.jpg');">
            <div class="flex flex-col md:flex-row max-md:items-center max-md:text-center md:w-11/12 md:bg-center md:bg-cover md:mx-20 text-white" >
                <div class="flex-shrink px-4"><img src="{{ asset('img/calon.png') }}"></div>
                <div class="basis-1/2 w-auto my-auto">
                    <h1 class="text-4xl font-bold my-4">Bersama Giri, Tabanan Makin Maju dan Berjaya</h1>
                    <p class="text-2xl font-bold text-zinc-50 drop-shadow-xl md:mix-blend-difference" >Dari tangan pemimpin yang amanah dan jujur, saya yakin Tabanan akan lebih makmur dan bermartabat</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Navigation -->
    <section class="grid grid-flow-row md:grid-cols-3 gap-4 justify-between py-10 px-20">
        <a href="#" style="text-decoration:none">
            <div class="relative flex flex-col mt-6 text-gray-700 bg-zinc-50 shadow-xl shadow-zinc-400 bg-clip-border rounded-xl">
                <div class="flex justify-center items-center bg-gray-100">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="{{ asset('img/profile-giri.png') }}" alt="Profile Picture" class="w-40 h-40 object-cover object-top">
                    </div>
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Profile
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Kenali Lebih Dalam Terkait Profil I Putu Atma Giri
                    <br><br>
                    </p>
                </div>
            </div> 
        </a> 
        <a href="#" style="text-decoration:none">
            <div class="relative flex flex-col mt-6 text-gray-700 bg-zinc-50 shadow-xl shadow-zinc-400 bg-clip-border rounded-xl">
                <div class="flex justify-center items-center bg-gray-100">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="{{ asset('img/icons/task.png') }}" alt="Profile Picture" class="w-full h-full object-cover object-top">
                    </div>
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Program
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Wujudkan Perubahan Nyata Bagi Warga Tabanan dengan Beragam Program Kerja
                    </p>
                </div>
            </div> 
        </a> 
        <a href="#" style="text-decoration:none">
            <div class="relative flex flex-col mt-6 text-gray-700 bg-zinc-50 shadow-xl shadow-zinc-400 bg-clip-border rounded-xl">
                <div class="flex justify-center items-center bg-gray-100">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="{{ asset('img/icons/masa.png') }}" alt="Profile Picture" class="w-full h-full object-cover object-top">
                    </div>
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Dukungan
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Suarakan Pesan Dukungan dan Aspirasi Anda Kepada I Putu Atma Giri
                    </p>
                </div>
            </div> 
        </a> 
    </section>
    <!-- Section Profile -->
    <section >
        <div class="relative w-full h-screen bg-cover bg-center flex flex-col items-center justify-center" style="background-image: url('img/assets/pura_tanahlot.jpg');">
            <div class="flex lg:flex-row flex-col px-10 lg:px-20" >
                <div class="lg:hidden flex flex-shrink px-4 basis-1/2 justify-center">
                    <img class="w-28 md:w-60 h-28 md:h-60" src="{{ asset('img/calon.png') }}">
                </div>
                <div class="basis-1/2 w-auto my-auto text-zinc-950">
                    <h5 class="text-xl md:text-3xl xl:text-5xl font-bold my-4">Profile</h5>
                    <h5 class="text-lg md:text-5xl xl:text-7xl font-bold my-4">Giri</h5>
                    <p class="md:block xl:text-xl text font-semibold ">
                        Salam sejahtera, saya Demo Calon. Kandidat calon Bupati Jawa Timur. Saya memiliki latar belakang sebagai pengusaha dan juga aktif dalam berbagai kegiatan sosial di masyarakat. Melalui pengalaman hidup dan kerja saya, saya ingin berkontribusi lebih dalam dalam memajukan Indonesia dan juga meningkatkan kesejahteraan masyarakat di wilayah Jawa Timur. 
                        <br> <br>
                        Saya ingin mengabdikan diri dalam ranah politik karena saya percaya bahwa dengan menjadi bagian dari pemerintahan, saya dapat berkontribusi dalam mewujudkan perubahan positif untuk masyarakat. 
                        <br><br>
                        <span class="hidden sm:block">Saat ini, saya sangat tertarik untuk memperjuangkan hak-hak rakyat. Saya memiliki beberapa program kerja yang akan saya jalankan apabila terpilih menjadi Bupati, seperti meningkatkan kualitas pendidikan dan kesehatan masyarakat, mengembangkan potensi kaum muda, serta memberikan dukungan kepada UMKM agar dapat berkembang lebih baik lagi.</span>
                    </p>
                </div>
                <div class="hidden lg:flex flex-shrink px-4 basis-3/5 translate-x-1/3 xl:translate-x-1/3 translate-y-1/3">
                    <img class="h-2/4 xl:h-3/4" src="{{ asset('img/calon.png') }}">
                </div>
                
            </div>
        </div>
    </section>
    <!-- Section Program -->
        <section>
            
            <div class="flex flex-col justify-center mx-4 my-9 gap-3">
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
    <!-- Foto terbaru -->
    <section>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        </style>
        <div class="flex flex-col justify-center mx-12 lg:mx-20 my-9 lg:my-16 gap-4">
            <div class="text-center">
                <h3>FOTO TERBARU</h3>
            </div>
            <div class="mx-auto w-1/2 h-1/2">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ asset('img/program/program-1.jpg') }}" alt="img"/></div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/program/program-2.jpg') }}" alt="img"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/program/program-3.jpg') }}" alt="img"/>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            </div>
        <!-- swipperjs -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    dynamicBullets: true,
                },
            });
        </script>
    </section>

@endsection
