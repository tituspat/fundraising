@extends('layouts.app')

@section('content')
    <!-- Atas -->
    <div class=" w-full h-[180px] bg-center bg-cover flex flex-col bg-customYellow2">
        <h1 class="text-white text-md px-20 py-[30px]">Beranda / Galeri</h1>
        <h1 class="text-white text-2xl font-bold px-20">Galeri Video</h1>
    </div>

    <div class="grid grid-cols-3 gap-5 h-[500px] mt-10 mb-10 mr-20 ml-20">
        <div class="pt-40 col-span-2 flex flex-col bg-cover bg-center hover:opacity-50 transition-opacity duration-300  "  onclick="window.location.href='https://google.com';" style="background-image: url(../images/vbg.png)">
            {{-- <img class="w-full h-full" src="../images/vbg.png" alt=""> --}}>
                <h1 class="mt-40 text-white text-md px-20">Diisi tanggal Video kegiatan</h1>
                <h1 class="text-white text-2xl font-bold px-20 mt-3">Diisi judul kegiatan</h1>
        </div>

        <div class="grid grid-rows-2 gap-5 bg-white">
            <div class=" bg-white flex flex-col bg-cover bg-center hover:opacity-50 transition-opacity duration-300  "  onclick="window.location.href='https://google.com';" style="background-image: url(../images/vbg.png)">
                <h1 class="mt-40 text-white text-md px-3">Diisi tanggal Video kegiatan</h1>
                <h1 class="text-white text-2xl font-bold px-3 ">Diisi judul kegiatan</h1>
            </div>
            <div class=" bg-white flex flex-col bg-cover bg-center hover:opacity-50 transition-opacity duration-300  "  onclick="window.location.href='https://google.com';" style="background-image: url(../images/vbg.png)">
                <h1 class="mt-40 text-white text-md px-3">Diisi tanggal Video kegiatan</h1>
                <h1 class="text-white text-2xl font-bold px-3 ">Diisi judul kegiatan</h1>
            </div>

        </div>


    </div>
@endsection
