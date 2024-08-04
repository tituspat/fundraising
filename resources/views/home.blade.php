@extends('layouts.app')

@section('content')
    <!-- Jumbotron -->
    <div class="relative w-full h-[500px] bg-cover bg-center flex flex-col items-center justify-center gap-10"
        style="background-image: url('../images/vbg.png');">

        <!-- Logo -->
        <div class="mb-4">
            <img src="../images/vbg.png" alt="Logo" class="h-12">
        </div>
        <!-- Text -->
        <div class="text-center mb-4">
            <h1 class="text-2xl font-bold text-white">Your Headline Here</h1>
        </div>
        <!-- Button -->
        <div>
            <button
                class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-300 ease-in-out">
                Call to Action
            </button>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center w-full h-full bg-white">
        <i>bintang</i>
        <h1 class="text-4xl items-center justify-center mt-3">PEROLEHAN DONASI</h1>
        <div class="gap-10 bg-green-500 flex flex-row justify-between items-center my-4">
            <div class="card-program flex flex-col justify-center items-center">
                <h1>angka</h1>
                <h1>Program</h1>
            </div>
            <div class="card-donasi flex flex-col justify-center items-center">
                <h1>angka</h1>
                <h1>Jumlah Donasi Terkumpul</h1>
            </div>
            <div class="card-donatur flex flex-col justify-center items-center">
                <h1>angka</h1>
                <h1>Donatur</h1>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center">
        <h1>PROGRAM PILIHAN</h1>
        <div>
card
        </div>
    </div>

    <div class="flex flex-col justify-center items-center">
        <h1>GALLERY FOTO</h1>
        <div>
card
        </div>
    </div>

    <div class="flex flex-col justify-center items-center">
        <h1>BERITA DAN ARTIKEL</h1>
        <div>
card
        </div>
    </div>

@endsection
