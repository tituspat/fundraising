@extends('layouts.app')

@section('content')
    <!-- Atas -->
    <div class=" w-full h-[180px] bg-center bg-cover flex flex-col bg-stone-400">
        <h1 class="text-white text-md px-20 py-[30px]">Beranda / Program</h1>
        <h1 class="text-white text-3xl font-bold px-20">Program</h1>
    </div>


    <div class="flex flex-col justify-center mx-24 my-9 gap-10">
        {{-- Beras --}}
        <div class="grid grid-flow-row gap-8">
            <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 bg-gray-500  drop-shadow-sm shadow-lg rounded-e-3xl">
                <div class="row-span-3 items-center overflow-hidden">
                    <img class="w-[600px] h-[400px]  bg-black opacity-70 object-cover hover:scale-110 transition-transform transition-duration 300"
                        src="img/program/program-beras.jpg" alt="">
                </div>
                <div class="col-span-2 text-white text-3xl m-10">
                    <h2 class="font-bold">PENINGKATAN PRODUKSI BERAS MERAH</h2>
                </div>
                <div class="row-span-2 col-span-2 text-white px-10">
                    <p class="text-lg">Tanaman padi merah adalah padi lokal Kabupaten Tabanan, Provinsi Bali. Tanaman ini tumbuh baik di
                        kawasan dengan ketinggian tempat > 500 mdpl, seperti di Kecamatan Penebel. Saat ini di Kecamatan
                        Penebel terdapat areal tanam padi merah sekitar 227 ha. ...</p>
                    <a class="text-yellow-400" href="#">Baca Selengkapnya</a>
                </div>

            </div>
        </div>

        {{-- Peternakan sapi --}}
        <div class="grid grid-flow-row gap-8">
            <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 bg-gray-500 drop-shadow-sm shadow-lg rounded-s-3xl">
                <div class="col-span-2 text-white text-3xl m-10">
                    <h2 class="font-bold">PETERNAKAN SAPI</h2>
                </div>
                <div class="row-span-2 col-span-2 text-white px-10">
                    <p class="text-lg">Untuk menunjang ketersediaan pupuk organik, populasi sapi perah di kawasan pengembangan padi merah ditambah sekitar 200 ekor sapi Bali, yang dikelola oleh 10 kelomok ternak (20 ekor per kelompok ternak).</p>
                    <a class="text-yellow-400" href="#">Baca Selengkapnya</a>
                </div>
                <div class="row-span-3 items-center overflow-hidden">
                    <img class="w-[600px] h-[400px]  bg-black opacity-70 object-cover hover:scale-110 transition-transform transition-duration 300"
                        src="img/program/program-peternakan.jpg" alt="">
                </div>
            </div>
        </div>

        {{-- Kelapa Kopyor --}}
        <div class="grid grid-flow-row gap-8">
            <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 bg-gray-500 drop-shadow-sm shadow-lg rounded-e-3xl">
                <div class="row-span-3 items-center overflow-hidden">
                    <img class="w-[600px] h-[400px] object-cover  bg-black opacity-70 hover:scale-110 transition-transform transition-duration 300"
                        src="img/program/program-kelapa.jpg" alt="">
                </div>
                <div class="col-span-2 text-white text-3xl m-10">
                    <h2 class="font-bold">KELAPA KOPYOR</h2>
                </div>
                <div class="row-span-2 col-span-2 text-white px-10">
                    <p class="text-lg">Budi daya kelapa kopyor dengan teknologi & inovasi genetika akan meningkatkan produktifitas buah kopyor mendekati 100% kopyor</p>
                    <a class="text-yellow-400" href="#">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        {{-- PEMBUATAN MAKAN TERNAK SAPI, PUPUK KANDANG ORGANIK --}}
        <div class="grid grid-flow-row gap-8">
            <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 bg-gray-500 drop-shadow-sm shadow-lg rounded-s-3xl">
                <div class="col-span-2 text-white text-3xl m-10">
                    <h2 class="font-bold">PEMBUATAN MAKAN TERNAK SAPI, PUPUK KANDANG ORGANIK</h2>
                </div>
                <div class="row-span-2 col-span-2 text-white px-10">
                    <p class="text-lg">Melalui Permentan no.70/Permentan/SR.140/10/2011, telah ditetapkan standar pupuk organik. Untuk bisa menghasilkan pupuk organik sesuai standar, maka pembuatan pupuk organiknya mengikuti cara pembuatan pupuk organik yang benar.</p>
                    <a class="text-yellow-400" href="#">Baca Selengkapnya</a>
                </div>
                <div class="row-span-3 items-center overflow-hidden">
                    <img class="w-[600px] h-[400px] object-cover bg-black opacity-70 hover:scale-110 transition-transform transition-duration 300"
                        src="img/program/program-pupuk.jpg" alt="">
                </div>
            </div>
        </div>



    </div>
@endsection
