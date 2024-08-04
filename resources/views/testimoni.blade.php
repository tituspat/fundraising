@extends('layouts.app')

@section('content')
    <!-- Atas -->
    <div class=" w-full h-[180px] bg-center bg-cover flex flex-col bg-customYellow2">
        <h1 class="text-white text-md px-20 py-[30px]">Beranda / Testimoni</h1>
        <h1 class="text-white text-2xl font-bold px-20">Testimoni</h1>
    </div>

    <div class="grid grid-cols-2 gap-5 h-[500px] mt-10 mb-10 mr-20 ml-20">

        <div class="grid grid-rows-2 gap-5 bg-white">
            <div class=" bg-white flex flex-col">
                <div class="bg-gray-100 w-full h-[75%] p-3">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque blanditiis dolor totam, ratione rem modi, quae, ipsam quasi soluta laborum non aliquid voluptate! Debitis quod fuga exercitationem qui! Praesentium, perferendis.</p>
                </div>
                <div class="px-2 py-2 flex flex-row justify-left items-center">
                    <img class="h-[70px] w-[70px] rounded-full" src="../img/vbg.png" alt="photo-profile">
                    <h1 class="ml-3 text-md font-bold">Nama Pemberi Testimoni</h1>
                </div>
            </div>
            <div class=" bg-white flex flex-col">
                <div class="bg-gray-100 w-full h-[75%] p-3">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id dolores dolore cumque. Quaerat possimus commodi, similique quo eum, sit eos odit laboriosam corporis cupiditate earum ducimus perferendis! Nobis, in error. </p>
                </div>
                <div class="px-2 py-2 flex flex-row justify-left items-center">
                    <img class="h-[70px] w-[70px] rounded-full" src="../img/vbg.png" alt="photo-profile">
                    <h1 class="ml-3 text-md font-bold">Nama Pemberi Testimoni</h1>
                </div>
            </div>
        </div>

        <div class="grid grid-rows-2 gap-5 bg-white">
            <div class=" bg-white flex flex-col">
                <div class="bg-gray-100 w-full h-[75%] p-3">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta sint natus quo vel enim ullam quisquam fugiat et, nulla ipsam vitae. Libero ipsam quaerat deleniti facilis rerum temporibus inventore nobis.</p>
                </div>
                <div class="px-2 py-2 flex flex-row justify-left items-center">
                    <img class="h-[70px] w-[70px] rounded-full" src="../img/vbg.png" alt="photo-profile">
                    <h1 class="ml-3 text-md font-bold">Nama Pemberi Testimoni</h1>
                </div>
            </div>
            <div class=" bg-white flex flex-col">
                <div class="bg-gray-100 w-full h-[75%] p-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor rem totam, qui ducimus distinctio mollitia doloribus reiciendis itaque dolorum eveniet perspiciatis aliquid, velit magni deleniti explicabo, obcaecati ut voluptatibus perferendis. </p>
                </div>
                <div class="px-2 py-2 flex flex-row justify-left items-center">
                    <img class="h-[70px] w-[70px] rounded-full" src="../img/vbg.png" alt="photo-profile">
                    <h1 class="ml-3 text-md font-bold">Nama Pemberi Testimoni</h1>
                </div>
            </div>
        </div>


    </div>
@endsection
