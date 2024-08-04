@extends('layouts.app')

@section('content')
<section class="px-20">
    <div class="relative  bg-cover bg-center flex flex-col items-center justify-center pb-16" style="background-image: url('https://democalon46.calon.id/template/calon-pancasila/assets/img/services-v1-shape3.png');">
        <div class="flex flex-col px-60" >
            <div class="flex-shrink px-4 basis-1/2 self-center"><img src="{{ asset('img/calon.png') }}"></div>
            <div class="basis-1/2 w-auto my-auto text-white">
                <!-- <h5 class="text-3xl font-bold my-4">Profile</h5> -->
                <h5 class="text-5xl font-bold my-4">I Gede Putu Atma Giri</h5>
                <p>
                    Salam sejahtera, saya Demo Calon. Kandidat calon Bupati Jawa Timur. Saya memiliki latar belakang sebagai pengusaha dan juga aktif dalam berbagai kegiatan sosial di masyarakat. Melalui pengalaman hidup dan kerja saya, saya ingin berkontribusi lebih dalam dalam memajukan Indonesia dan juga meningkatkan kesejahteraan masyarakat di wilayah Jawa Timur. 
                    <br> <br>
                    Saya ingin mengabdikan diri dalam ranah politik karena saya percaya bahwa dengan menjadi bagian dari pemerintahan, saya dapat berkontribusi dalam mewujudkan perubahan positif untuk masyarakat. 
                    <br><br>
                    Saat ini, saya sangat tertarik untuk memperjuangkan hak-hak rakyat. Saya memiliki beberapa program kerja yang akan saya jalankan apabila terpilih menjadi Bupati, seperti meningkatkan kualitas pendidikan dan kesehatan masyarakat, mengembangkan potensi kaum muda, serta memberikan dukungan kepada UMKM agar dapat berkembang lebih baik lagi.
                    <br><br>
                    Saya percaya bahwa dengan kerja keras, ketulusan hati, dan komitmen yang kuat, saya dapat membawa perubahan yang positif bagi masyarakat. Saya sangat mengharapkan dukungan dan doa dari seluruh masyarakat agar saya dapat terpilih dan mewujudkan visi dan misi yang telah saya tetapkan.
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id non dicta cupiditate nihil nostrum. Neque distinctio nam illo ut velit molestiae alias nesciunt at pariatur, commodi voluptatibus porro exercitationem adipisci.
                    <br><br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus ex voluptates, vitae dolor repellendus libero ipsa quisquam odit eius id, rerum culpa similique reiciendis quia, commodi veritatis voluptatem recusandae assumenda. Nemo consequuntur magnam exercitationem fugiat nostrum, dicta sequi. Sint deserunt itaque asperiores distinctio earum expedita illum quam nulla veritatis libero.
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur, blanditiis quam! Deleniti minus vero quam quasi omnis, error mollitia? Eos sit nemo laudantium neque reiciendis architecto in optio et, ratione excepturi suscipit, rerum ipsum nam odio rem, tempore dignissimos enim adipisci. Placeat magni maxime consequuntur mollitia architecto ipsa deserunt autem eligendi, nostrum temporibus quibusdam eos, modi molestiae nulla culpa fugit odio illum nesciunt doloribus neque repellat assumenda pariatur nisi? Tempore perspiciatis, sint totam maxime neque, aut consectetur assumenda fugiat saepe recusandae magnam tenetur delectus nihil beatae cupiditate ex praesentium. Quos eveniet autem et aliquam similique, facilis quod nulla itaque optio!
                </p>
            </div>         
        </div>
    </div>
</section>
<!-- program -->
<section>
        <div class="flex flex-col justify-center mx-24 my-9 gap-6">
            <div class="text-center flex flex-col gap-3">
                <h3 class="text-3xl font-bold">Program</h3>
                <h2 class="text-4xl">Untuk Indonesia Yang Lebih Sejahtera</h2>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-8">
                <div class="grid grid-rows-3 grid-flow-col gap-4 border-[1px] border-black p-3">
                    <div class="row-span-3"><img src="https://democalon46.calon.id/dirmember/00000001/democalon46/program-32-4.jpg" alt=""></div>
                    <div class="col-span-2"><h3 class="font-bold">PENINGKATAN PRODUKSI BERAS MERAH</h3></div>
                    <div class="row-span-2"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</p></div>
                </div>
                <div class="grid grid-rows-3 grid-flow-col gap-4 border-[1px] border-black p-3">
                    <div class="row-span-3 "><img src="https://democalon46.calon.id/dirmember/00000001/democalon46/program-32-2.jpg" alt=""></div>
                    <div class="col-span-2"><h3 class="font-bold">PETERNAKAN SAPI</h3></div>
                    <div class="row-span-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</div>
                </div>
                <div class="grid grid-rows-3 grid-flow-col gap-4 border-[1px] border-black p-3">
                    <div class="row-span-3"><img src="https://democalon46.calon.id/dirmember/00000001/democalon46/program-32-3.jpg" alt=""></div>
                    <div class="col-span-2"><h3 class="font-bold">KELAPA KOPYOR</h3></div>
                    <div class="row-span-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</div>
                </div>
                <div class="grid grid-rows-3 grid-flow-col gap-4 border-[1px] border-black p-3">
                    <div class="row-span-3 "><img src="https://democalon46.calon.id/dirmember/00000001/democalon46/program-32-1.jpg" alt=""></div>
                    <div class="col-span-2"><h3 class="font-bold">PEMBUATAN MAKAN TERNAK SAPI, PUPUK KANDANG ORGANIK</h3></div>
                    <div class="row-span-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nesciunt officia dolores neque, officiis corrupti?</div>
                </div>

            </div>
        </div>
</section>
@endsection