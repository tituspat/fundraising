@extends('layouts.app')

@section('content')
    <!-- Jumbotron -->
    <section class="font-sans">
        <div class="relative w-full h-screen bg-cover bg-center flex flex-col items-center justify-center " style="background-image: url('https://democalon46.calon.id/template/calon-pancasila/assets/img/bg.jpg');">
            <div class="flex flex-row w-11/12 bg-center bg-cover mx-20" style="background-image: url(https://democalon46.calon.id/dirmember/00000001/democalon46/slide-32-1.jpg);">
                <div class="flex-shrink px-4"><img src="{{ asset('img/calon.png') }}"></div>
                <div class="basis-1/2 w-auto my-auto">
                    <h1 class="text-4xl font-bold my-4">Bersama Calon, Tabanan Bisa Makin Jaya</h1>
                    <p>Saya meyakini bahwa Indonesia akan menjadi negara maju dan sejahtera, bisa dimulai dari pemerintahan yang profesional, amanah dan jujur. Dan Saya Demo Calon, saya bisa memegang amanah dan kepercayaan itu dari anda semua. Mari jadikan Indonesia Jaya Sejahtera!</p>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- Navigation -->
    <section class="grid grid-cols-4 gap-4 justify-center py-10 px-20">
        <a href="#" style="text-decoration:none">
            <div class="relative flex flex-col mt-6 text-gray-700 bg-zinc-50 shadow-xl shadow-zinc-400 bg-clip-border rounded-xl">
                <div class="relative mx-4 mt-6 w-20  text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                    <img src="https://democalon46.calon.id/template/calon-pancasila/assets/img/playstore.png" alt="card-image" />
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Download App
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Berkontribusi Lebih Dekat dengan Aplikasi Praktis Berbasis Android
                    </p>
                </div>
            </div> 
        </a> 
        <a href="#" style="text-decoration:none">
            <div class="relative flex flex-col mt-6 text-gray-700 bg-zinc-50 shadow-xl shadow-zinc-400 bg-clip-border rounded-xl">
                <div class="relative mx-4 mt-6 w-20  text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                    <img src="https://democalon46.calon.id/template/calon-pancasila/assets/img/profile.png" alt="card-image" />
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Profile
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Temukan Lebih Dalam Profil dan Latar Belakang Demo Calon
                    </p>
                </div>
            </div> 
        </a> 
        <a href="#" style="text-decoration:none">
            <div class="relative flex flex-col mt-6 text-gray-700 bg-zinc-50 shadow-xl shadow-zinc-400 bg-clip-border rounded-xl">
                <div class="relative mx-4 mt-6 w-20  text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                    <img src="https://democalon46.calon.id/template/calon-pancasila/assets/img/checklist.png" alt="card-image" />
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Program
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Satukan Langkah, Wujudkan Perubahan Nyata Bersama Demo Calon
                    </p>
                </div>
            </div> 
        </a> 
        <a href="#" style="text-decoration:none">
            <div class="relative flex flex-col mt-6 text-gray-700 bg-zinc-50 shadow-xl shadow-zinc-400 bg-clip-border rounded-xl">
                <div class="relative mx-4 mt-6 w-20  text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                    <img src="https://democalon46.calon.id/template/calon-pancasila/assets/img/man.png" alt="card-image" />
                </div>
                <div class="p-6">
                    <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Dukungan
                    </h5>
                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    Suarakan Pesan Dukungan dan Aspirasi Anda kepada Demo Calon
                    </p>
                </div>
            </div> 
        </a> 
    </section>
    <!-- Section Profile -->
    <section>
        <div class="relative w-full h-screen bg-cover bg-center flex flex-col items-center justify-center" style="background-image: url('https://democalon46.calon.id/template/calon-pancasila/assets/img/services-v1-shape3.png');">
            <div class="flex flex-row px-40" >
                <div class="basis-1/2 w-auto my-auto text-white">
                    <h5 class="text-3xl font-bold my-4">Profile</h5>
                    <h5 class="text-5xl font-bold my-4">Calon</h5>
                    <p>
                        Salam sejahtera, saya Demo Calon. Kandidat calon Bupati Jawa Timur. Saya memiliki latar belakang sebagai pengusaha dan juga aktif dalam berbagai kegiatan sosial di masyarakat. Melalui pengalaman hidup dan kerja saya, saya ingin berkontribusi lebih dalam dalam memajukan Indonesia dan juga meningkatkan kesejahteraan masyarakat di wilayah Jawa Timur. 
                        <br> <br>
                        Saya ingin mengabdikan diri dalam ranah politik karena saya percaya bahwa dengan menjadi bagian dari pemerintahan, saya dapat berkontribusi dalam mewujudkan perubahan positif untuk masyarakat. 
                        <br><br>
                        Saat ini, saya sangat tertarik untuk memperjuangkan hak-hak rakyat. Saya memiliki beberapa program kerja yang akan saya jalankan apabila terpilih menjadi Bupati, seperti meningkatkan kualitas pendidikan dan kesehatan masyarakat, mengembangkan potensi kaum muda, serta memberikan dukungan kepada UMKM agar dapat berkembang lebih baik lagi.
                        <br><br>
                        Saya percaya bahwa dengan kerja keras, ketulusan hati, dan komitmen yang kuat, saya dapat membawa perubahan yang positif bagi masyarakat. Saya sangat mengharapkan dukungan dan doa dari seluruh masyarakat agar saya dapat terpilih dan mewujudkan visi dan misi yang telah saya tetapkan.
                    </p>
                </div>
                <div class="flex-shrink px-4 basis-1/2"><img src="{{ asset('img/calon.png') }}"></div>
                
            </div>
        </div>
    </section>
    <!-- Section Program -->
    <section>
        <div class="flex flex-col justify-center mx-24 my-9 gap-6">
            <div class="text-center flex flex-col gap-3">
                <h3 class="text-3xl font-bold">Program</h3>
                <h2 class="text-4xl">Untuk Indonesia Yang Lebih Sejahtera</h2>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 border-black">
                    <div class="row-span-3"><img src="https://democalon46.calon.id/dirmember/00000001/democalon46/program-32-4.jpg" alt=""></div>
                    <div class="col-span-2"><h3 class="font-bold">PENINGKATAN PRODUKSI BERAS MERAH</h3></div>
                    <div class="row-span-2 col-span-2"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</p></div>
                </div>
                <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 border-black">
                    <div class="row-span-3"><img src="https://democalon46.calon.id/dirmember/00000001/democalon46/program-32-2.jpg" alt=""></div>
                    <div class="col-span-2"><h3 class="font-bold">PETERNAKAN SAPI</h3></div>
                    <div class="row-span-2 col-span-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</div>
                </div>
                <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 border-black">
                    <div class="row-span-3"><img src="https://democalon46.calon.id/dirmember/00000001/democalon46/program-32-3.jpg" alt=""></div>
                    <div class="col-span-2"><h3 class="font-bold">KELAPA KOPYOR</h3></div>
                    <div class="row-span-2 col-span-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</div>
                </div>
                <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 border-black">
                    <div class="row-span-3"><img src="https://democalon46.calon.id/dirmember/00000001/democalon46/program-32-1.jpg" alt=""></div>
                    <div class="col-span-2"><h3 class="font-bold">PEMBUATAN MAKAN TERNAK SAPI, PUPUK KANDANG ORGANIK</h3></div>
                    <div class="row-span-2 col-span-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</div>
                </div>

            </div>
        </div>
    </section>
    <!-- Foto terbaru -->
    <section>
        <div class="flex flex-col justify-center mx-12 my-9 gap-4">
            <div class="text-center">
                <h3>FOTO TERBARU</h3>
            </div>
            <div class="grid grid-cols-3 gap-8">
                <div class="relative text-center">
                    <img src="{{ asset('img/program/program-1.jpg') }}" alt="img"/>
                </div>
                <div class="relative text-center">
                    <img src="{{ asset('img/program/program-2.jpg') }}" alt="img"/>
                </div>
                <div class="relative text-center">
                    <img src="{{ asset('img/program/program-3.jpg') }}" alt="img"/>
                </div> 
            </div>
        </div>
    </section>

@endsection
