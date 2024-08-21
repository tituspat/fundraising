@extends('layouts.dashboard.app')

@section('content')
      <!-- Main Content -->
      <main class="bg-normalBG dark:bg-main-dark">
         <div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">

            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12">

                    <!-- Breadcrumb Section -->
                    <div class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y [5px]">
                        <!-- Title -->
                        <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">gallery</h4>
                        <!-- Breadcrumb Navigation -->
                        <div class="flex flex-wrap justify-center">
                            <nav>
                                <ol class="flex flex-wrap p-0 mb-0 list-none gap-[8px] max-sm:justify-center">
                                    <!-- Parent Link -->
                                    <li class="inline-flex items-center">
                                        <a class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 hover:text-primary group" href="index.html">
                                            <i class="uil uil-estate text-light dark:text-white/50 me-[8px] text-[16px] group-hover:text-current"></i>Dashboard</a>
                                    </li>
                                    <!-- Middle (Conditional) -->

                                    <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]">
                                        <span class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">pages</span>
                                    </li>

                                    <!-- Child (Current Page) -->
                                    <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]" aria-current="page">
                                        <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">gallery</span>
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
                  
                <button type="button" onclick="window.location='{{ URL::to(Auth::user()->role . '/gallery/tambah') }}'" class="flex items-center px-[20px] text-sm text-white rounded-md font-semibold bg-primary border-primary h-10 gap-[6px] transition-[0.3s]">
                    <i class="uil uil-plus"></i>
                    <span class="m-0">Tambah Gallery</span>
                </button>
            </div>

            <!-- contents -->

            <div>
               <div class="grid grid-cols-12 gap-[25px]">
                  <div class="col-span-12">
                     
                  </div>
               </div>
               <div class="grid grid-cols-12 gap-[25px] mixitup-gallery">
                    @foreach($galleries as $gallery)
                    <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-web-design" data-order="1">

                        <figure class="bg-white dark:bg-box-dark-down rounded-10">
                            <img class="w-full h-[276px] rounded-10" src="{{ Storage::url($gallery->url) }}" alt="presentation web-design">
                            <figcaption>
                                <div class="px-6 py-5">
                                    <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">{{$gallery->title}}</h1>
                                    <p class="mb-0 text-light dark:text-subtitle-dark text-13" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{$gallery -> description}}
                                    </p>
                                </div>
                            </figcaption>
                        </figure>

                    </div>
                    @endforeach
               </div>
            </div>


         </div>

         
         <!-- Footer -->
         @include('layouts.dashboard.footer')
         <!-- end: Footer -->
      </main>
      <!-- End: Main Content -->

   <!-- End: Wrapping Content -->

   <!-- Customizing option -->

   <!-- End: Customizing option -->
@endsection