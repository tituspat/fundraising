@extends('layouts.app')

@section('content')
    <!-- Atas -->
    <div class=" w-full h-[180px] bg-center bg-cover flex flex-col bg-stone-400">
        <h1 class="text-white text-md px-20 py-[30px]">Beranda / Program</h1>
        <h1 class="text-white text-2xl font-bold px-20">Program</h1>
    </div>


    <div class="flex flex-col justify-center mx-24 my-9 gap-6">
        {{-- Beras --}}
        <div class="grid grid-flow-row gap-8">
            <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 bg-gray-500">
                <div class="row-span-3 items-center">
                    <img class="w-[600px] h-[400px] object-cover" src="img/program/program-beras.jpg" alt=""></div>
                <div class="col-span-2 text-white text-2xl m-10"><h2 class="font-bold">PENINGKATAN PRODUKSI BERAS MERAH</h2></div>
                <div class="row-span-2 col-span-2 text-white px-10">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</p>
                </div>
            </div>
        </div>

        {{-- Peternakan sapi --}}
        <div class="grid grid-flow-row gap-8">
            <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 bg-gray-500">
                <div class="row-span-3 items-center">
                    <img class="w-[600px] h-[400px] object-cover" src="img/program/program-peternakan.jpg" alt=""></div>
                <div class="col-span-2 text-white text-2xl m-10"><h2 class="font-bold">PETERNAKAN SAPI</h2></div>
                <div class="row-span-2 col-span-2 text-white px-10">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</p>
                </div>
            </div>
        </div>

        {{-- Kelapa Kopyor --}}
        <div class="grid grid-flow-row gap-8">
            <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 bg-gray-500">
                <div class="row-span-3 items-center">
                    <img class="w-[600px] h-[400px] object-cover" src="img/program/program-kelapa.jpg" alt=""></div>
                <div class="col-span-2 text-white text-2xl m-10"><h2 class="font-bold">KELAPA KOPYOR</h2></div>
                <div class="row-span-2 col-span-2 text-white px-10">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</p>
                </div>
            </div>
        </div>

        {{-- PEMBUATAN MAKAN TERNAK SAPI, PUPUK KANDANG ORGANIK --}}
        <div class="grid grid-flow-row gap-8">
            <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 bg-gray-500">
                <div class="row-span-3 items-center">
                    <img class="w-[600px] h-[400px] object-cover" src="img/program/program-pupuk.jpg" alt=""></div>
                <div class="col-span-2 text-white text-2xl m-10"><h2 class="font-bold">PEMBUATAN MAKAN TERNAK SAPI, PUPUK KANDANG ORGANIK</h2></div>
                <div class="row-span-2 col-span-2 text-white px-10">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</p>
                </div>
            </div>
        </div>


    </div>

@endsection
