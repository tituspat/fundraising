@extends('layouts.dashboard.app')

@section('content')
    <!-- Main Content -->
    <main class="bg-normalBG dark:bg-main-dark">
        <div class="mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">

            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12">

                    <!-- Breadcrumb Section -->
                    <div class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                        <!-- Title -->
                        <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">berita</h4>
                        <!-- Breadcrumb Navigation -->
                        <div class="flex flex-wrap justify-center">
                            <nav>
                                <ol class="flex flex-wrap p-0 mb-0 list-none gap-[8px] max-sm:justify-center">
                                    <!-- Parent Link -->
                                    <li class="inline-flex items-center">
                                        <a class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 hover:text-primary group" href="index.html">
                                            <i class="uil uil-estate text-light dark:text-white/50 me-[8px] text-[16px] group-hover:text-current"></i>Dashboard
                                        </a>
                                    </li>
                                    <!-- Middle (Conditional) -->
                                    <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]">
                                        <span class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">Pages</span>
                                    </li>
                                    <!-- Child (Current Page) -->
                                    <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]" aria-current="page">
                                        <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">berita</span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex items-center ssm:justify-between justify-center max-sm:flex-wrap gap-x-[30px] gap-y-[15px] ssm:mb-[33px] mb-[18px]">
                <div class="inline-flex items-center">
                </div>
                <button type="button" onclick="window.location='{{ URL::to(Auth::user()->role . '/berita/tambah') }}'" class="flex items-center px-[20px] text-sm text-white rounded-md font-semibold bg-primary border-primary h-10 gap-[6px] transition-[0.3s]">
                    <i class="uil uil-plus"></i>
                    <span class="m-0">Buat Berita</span>
                </button>
            </div>

            <div class="grid grid-cols-12 md:gap-x-[25px] gap-y-[25px]">
                @foreach($berita as $item)
                    <div class="col-span-12 xl:col-span-4 md:col-span-6">
                        <!-- Blog Post -->
                        <figure class="p-6 mb-0 bg-white group dark:bg-box-dark rounded-10 shadow-regular dark:shadow-none">
                            <!-- Image Container -->
                            <div class="relative after:absolute after:h-0 after:w-full ltr:after:left-0 rtl:after:right-0 after:top-0 after:bg-[#0a0a0a15] after:rounded-10 after:transition-all after:duration-300 group-hover:after:h-full rounded-10 overflow-hidden">
                                <!-- Blog Image -->
                                <img alt="hexadash Blog" class="w-full rounded-10" src="{{ $item->thumbnail }}">
                            </div>
                            <!-- Caption and Metadata -->
                            <figcaption class="">
                                <!-- Date -->
                                <div class="flex justify-between items-center flex-wrap mt-2.5 gap-x-[10px] gap-y-[6px] text-14">
                                    <span class="inline-block text-light dark:text-subtitle-dark text-15">{{ $item->created_at }}</span>
                                </div>
                                <!-- Blog Title -->
                                <h2 class="mt-4 mb-3 text-xl font-semibold capitalize">
                                    <a class="text-dark hover:text-primary dark:text-title-dark dark:hover:text-primary" href="{{ $item->url }}">{{ $item->title }}</a>
                                </h2>
                                <!-- Blog Excerpt -->
                                <p class="mb-4 text-base text-dark dark:text-title-dark">{{ $item->description }}</p>
                                <!-- Author and Engagement -->
                                <div class="flex justify-between">
                                    <!-- Engagement Metrics -->
                                    {{-- <ul class="flex items-center gap-[8px]">
                                        <!-- Likes -->
                                        <li>
                                            <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                                <i class="uil uil-heart group-hover:text-danger"></i>
                                                <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">15k</span>
                                            </span>
                                        </li>
                                        <!-- Views -->
                                        <li>
                                            <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                                <i class="uil uil-file-info-alt group-hover:text-info"></i>
                                                <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">20k</span>
                                            </span>
                                        </li>
                                    </ul> --}}
                                </div>
                                <!-- Tampilkan Button -->
                                @if($item->is_previewed == 0)
    <div class="mt-4">
        <!-- Tampilkan Button -->
        <button type="button" onclick="window.location='{{ URL::to(Auth::user()->role . '/berita/tampilkan', $item->id) }}'" class="px-4 py-2 text-sm text-white bg-blue-500 rounded-md hover:bg-blue-600">
            Tampilkan
        </button>
    </div>
@else
    <div class="mt-4">
        <!-- Sembunyikan Button -->
        <button type="button" onclick="window.location='{{ URL::to(Auth::user()->role . '/berita/sembunyikan', $item->id) }}'" class="px-4 py-2 text-sm text-white bg-blue-500 rounded-md hover:bg-blue-600">
            Sembunyikan
        </button>
    </div>
@endif
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>

        </div>

        <!-- Footer -->
        @include('layouts.dashboard.footer')
        <!-- end: Footer -->
    </main>
    <!-- End: Main Content -->
@endsection
