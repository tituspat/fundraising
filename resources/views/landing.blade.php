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
    <section class="grid grid-cols-3 gap-4 justify-between py-10 px-20">
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
            <div class="flex lg:flex-row flex-col px-40" >
                <div class="lg:hidden flex flex-shrink px-4 basis-1/2 justify-center"><img class="w-60 h-60" src="{{ asset('img/calon.png') }}"></div>
                <div class="basis-1/2 w-auto my-auto text-zinc-950">
                    <h5 class="text-3xl font-bold my-4">Profile</h5>
                    <h5 class="text-5xl font-bold my-4">Calon</h5>
                    <p class="text font-semibold bg-blend-difference">
                        Salam sejahtera, saya Demo Calon. Kandidat calon Bupati Jawa Timur. Saya memiliki latar belakang sebagai pengusaha dan juga aktif dalam berbagai kegiatan sosial di masyarakat. Melalui pengalaman hidup dan kerja saya, saya ingin berkontribusi lebih dalam dalam memajukan Indonesia dan juga meningkatkan kesejahteraan masyarakat di wilayah Jawa Timur. 
                        <br> <br>
                        Saya ingin mengabdikan diri dalam ranah politik karena saya percaya bahwa dengan menjadi bagian dari pemerintahan, saya dapat berkontribusi dalam mewujudkan perubahan positif untuk masyarakat. 
                        <br><br>
                        Saat ini, saya sangat tertarik untuk memperjuangkan hak-hak rakyat. Saya memiliki beberapa program kerja yang akan saya jalankan apabila terpilih menjadi Bupati, seperti meningkatkan kualitas pendidikan dan kesehatan masyarakat, mengembangkan potensi kaum muda, serta memberikan dukungan kepada UMKM agar dapat berkembang lebih baik lagi.
                    </p>
                </div>
                <div class="hidden lg:flex flex-shrink px-4 basis-3/5 translate-x-1/2 translate-y-1/3"><img class="h-3/4" src="{{ asset('img/calon.png') }}"></div>
                
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
