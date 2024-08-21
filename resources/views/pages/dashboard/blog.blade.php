@extends('layouts.dashboard.app')


@section('content')

   <!-- Aside -->

   @include('layouts.dashboard.aside')

   <!-- End: Aside -->

   <!-- Wrapping Content -->
   <div class="relative flex flex-col flex-1 xl:ps-[280px] xl:[&.expanded]:ps-[80px] xl:[&.TopExpanded]:ps-[0px] !transition-all !duration-[0.2s] ease-linear delay-[0s] bg-normalBG dark:bg-main-dark" id="content">
      <!-- Header -->
      @include('layouts.dashboard.header')
      <!-- End: Header -->

      <!-- Main Content -->
      <main class="bg-normalBG dark:bg-main-dark">
         <div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">

            <div class="grid grid-cols-12 gap-5">
               <div class="col-span-12">

                  <!-- Breadcrumb Section -->
                  <div class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                     <!-- Title -->
                     <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">blog</h4>
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
                                 <span class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">Pages</span>
                              </li>

                              <!-- Child (Current Page) -->
                              <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]" aria-current="page">
                                 <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">blog</span>
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
                  
               <button type="button" class="flex items-center px-[20px] text-sm text-white rounded-md font-semibold bg-primary border-primary h-10 gap-[6px] transition-[0.3s]">
                  <i class="uil uil-plus"></i>
                  <span class="m-0">Buat Blog</span>
               </button>
            </div>

            <div class="grid grid-cols-12 md:gap-x-[25px] gap-y-[25px]">


               <div class="col-span-12 xl:col-span-4 md:col-span-6">

                  <!-- Blog Post -->
                  <figure class="p-6 mb-0 bg-white group dark:bg-box-dark rounded-10 shadow-regular dark:shadow-none">
                     <!-- Image Container -->
                     <div class="relative after:absolute after:h-0 after:w-full ltr:after:left-0 rtl:after:right-0 after:top-0 after:bg-[#0a0a0a15] after:rounded-10 after:transition-all after:duration-300 group-hover:after:h-full rounded-10 overflow-hidden">
                        <!-- Blog Image -->
                        <img alt="hexadash Blog" class="w-full rounded-10" src="{{ asset('vendor/hexadash/images/blogs/1.png') }}">
                     </div>
                     <!-- Caption and Metadata -->
                     <figcaption class="">
                        <!-- Date -->
                        <div class="flex justify-between items-center flex-wrap mt-2.5 gap-x-[10px] gap-y-[6px] text-14">



                           <span class="inline-block text-light dark:text-subtitle-dark text-15">15 March 2023</span>



                        </div>
                        <!-- Blog Title -->
                        <h2 class="mt-4 mb-3 text-xl font-semibold capitalize">
                           <a class="text-dark hover:text-primary dark:text-title-dark dark:hover:text-primary" href="blog-details.html">Multiple Dashboard Design Idea</a>
                        </h2>
                        <!-- Blog Excerpt -->
                        <p class="mb-4 text-base text-dark dark:text-title-dark">There are many variations of passages of majority have suffered alteration in some form</p>
                        <!-- Author and Engagement -->
                        <div class="flex justify-between">
                           <!-- Author Information -->
                           <div class="flex items-center gap-x-4">
                              <img alt="author" class="rounded-full max-w-[32px]" src="{{ asset('vendor/hexadash/images/avatars/t1.jpg') }}">
                              <span class="text-light dark:text-subtitle-dark text-15">Machel Bold</span>
                           </div>
                           <!-- Engagement Metrics -->
                           <ul class="flex items-center gap-[8px]">
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
                           </ul>
                        </div>
                     </figcaption>
                  </figure>

               </div>

               <div class="col-span-12 xl:col-span-4 md:col-span-6">

                  <!-- Blog Post -->
                  <figure class="p-6 mb-0 bg-white group dark:bg-box-dark rounded-10 shadow-regular dark:shadow-none">
                     <!-- Image Container -->
                     <div class="relative after:absolute after:h-0 after:w-full ltr:after:left-0 rtl:after:right-0 after:top-0 after:bg-[#0a0a0a15] after:rounded-10 after:transition-all after:duration-300 group-hover:after:h-full rounded-10 overflow-hidden">
                        <!-- Blog Image -->
                        <img alt="hexadash Blog" class="w-full rounded-10" src="{{ asset('vendor/hexadash/images/blogs/2.png') }}">
                     </div>
                     <!-- Caption and Metadata -->
                     <figcaption class="">
                        <!-- Date -->
                        <div class="flex justify-between items-center flex-wrap mt-2.5 gap-x-[10px] gap-y-[6px] text-14">



                           <span class="inline-block text-light dark:text-subtitle-dark text-15">20 March 2023</span>



                        </div>
                        <!-- Blog Title -->
                        <h2 class="mt-4 mb-3 text-xl font-semibold capitalize">
                           <a class="text-dark hover:text-primary dark:text-title-dark dark:hover:text-primary" href="blog-details.html">Creating Stunning User Interfaces</a>
                        </h2>
                        <!-- Blog Excerpt -->
                        <p class="mb-4 text-base text-dark dark:text-title-dark">A guide to creating responsive web designs using CSS and media queries.</p>
                        <!-- Author and Engagement -->
                        <div class="flex justify-between">
                           <!-- Author Information -->
                           <div class="flex items-center gap-x-4">
                              <img alt="author" class="rounded-full max-w-[32px]" src="{{ asset('vendor/hexadash/images/avatars/t2.jpg') }}">
                              <span class="text-light dark:text-subtitle-dark text-15">John Doe</span>
                           </div>
                           <!-- Engagement Metrics -->
                           <ul class="flex items-center gap-[8px]">
                              <!-- Likes -->
                              <li>
                                 <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                    <i class="uil uil-heart group-hover:text-danger"></i>
                                    <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">12k</span>
                                 </span>
                              </li>
                              <!-- Views -->
                              <li>
                                 <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                    <i class="uil uil-file-info-alt group-hover:text-info"></i>
                                    <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">18k</span>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </figcaption>
                  </figure>

               </div>

               <div class="col-span-12 xl:col-span-4 md:col-span-6">

                  <!-- Blog Post -->
                  <figure class="p-6 mb-0 bg-white group dark:bg-box-dark rounded-10 shadow-regular dark:shadow-none">
                     <!-- Image Container -->
                     <div class="relative after:absolute after:h-0 after:w-full ltr:after:left-0 rtl:after:right-0 after:top-0 after:bg-[#0a0a0a15] after:rounded-10 after:transition-all after:duration-300 group-hover:after:h-full rounded-10 overflow-hidden">
                        <!-- Blog Image -->
                        <img alt="hexadash Blog" class="w-full rounded-10" src="{{ asset('vendor/hexadash/images/blogs/3.png') }}">
                     </div>
                     <!-- Caption and Metadata -->
                     <figcaption class="">
                        <!-- Date -->
                        <div class="flex justify-between items-center flex-wrap mt-2.5 gap-x-[10px] gap-y-[6px] text-14">



                           <span class="inline-block text-light dark:text-subtitle-dark text-15">25 March 2023</span>



                        </div>
                        <!-- Blog Title -->
                        <h2 class="mt-4 mb-3 text-xl font-semibold capitalize">
                           <a class="text-dark hover:text-primary dark:text-title-dark dark:hover:text-primary" href="blog-details.html">Responsive Web Design Techniques</a>
                        </h2>
                        <!-- Blog Excerpt -->
                        <p class="mb-4 text-base text-dark dark:text-title-dark">A guide to creating responsive web designs using CSS and media queries.</p>
                        <!-- Author and Engagement -->
                        <div class="flex justify-between">
                           <!-- Author Information -->
                           <div class="flex items-center gap-x-4">
                              <img alt="author" class="rounded-full max-w-[32px]" src="{{ asset('vendor/hexadash/images/avatars/t3.jpg') }}">
                              <span class="text-light dark:text-subtitle-dark text-15">Jane Smith</span>
                           </div>
                           <!-- Engagement Metrics -->
                           <ul class="flex items-center gap-[8px]">
                              <!-- Likes -->
                              <li>
                                 <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                    <i class="uil uil-heart group-hover:text-danger"></i>
                                    <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">8k</span>
                                 </span>
                              </li>
                              <!-- Views -->
                              <li>
                                 <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                    <i class="uil uil-file-info-alt group-hover:text-info"></i>
                                    <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">15k</span>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </figcaption>
                  </figure>

               </div>

               <div class="col-span-12 xl:col-span-4 md:col-span-6">

                  <!-- Blog Post -->
                  <figure class="p-6 mb-0 bg-white group dark:bg-box-dark rounded-10 shadow-regular dark:shadow-none">
                     <!-- Image Container -->
                     <div class="relative after:absolute after:h-0 after:w-full ltr:after:left-0 rtl:after:right-0 after:top-0 after:bg-[#0a0a0a15] after:rounded-10 after:transition-all after:duration-300 group-hover:after:h-full rounded-10 overflow-hidden">
                        <!-- Blog Image -->
                        <img alt="hexadash Blog" class="w-full rounded-10" src="{{ asset('vendor/hexadash/images/blogs/1.png') }}">
                     </div>
                     <!-- Caption and Metadata -->
                     <figcaption class="">
                        <!-- Date -->
                        <div class="flex justify-between items-center flex-wrap mt-2.5 gap-x-[10px] gap-y-[6px] text-14">



                           <span class="inline-block text-light dark:text-subtitle-dark text-15">30 March 2023</span>



                        </div>
                        <!-- Blog Title -->
                        <h2 class="mt-4 mb-3 text-xl font-semibold capitalize">
                           <a class="text-dark hover:text-primary dark:text-title-dark dark:hover:text-primary" href="blog-details.html">Building Cross-Platform Mobile Apps</a>
                        </h2>
                        <!-- Blog Excerpt -->
                        <p class="mb-4 text-base text-dark dark:text-title-dark">Learn how to develop mobile apps that work on both iOS and Android platforms.</p>
                        <!-- Author and Engagement -->
                        <div class="flex justify-between">
                           <!-- Author Information -->
                           <div class="flex items-center gap-x-4">
                              <img alt="author" class="rounded-full max-w-[32px]" src="{{ asset('vendor/hexadash/images/avatars/t4.jpg') }}">
                              <span class="text-light dark:text-subtitle-dark text-15">Sarah Johnson</span>
                           </div>
                           <!-- Engagement Metrics -->
                           <ul class="flex items-center gap-[8px]">
                              <!-- Likes -->
                              <li>
                                 <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                    <i class="uil uil-heart group-hover:text-danger"></i>
                                    <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">10k</span>
                                 </span>
                              </li>
                              <!-- Views -->
                              <li>
                                 <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                    <i class="uil uil-file-info-alt group-hover:text-info"></i>
                                    <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">17k</span>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </figcaption>
                  </figure>

               </div>

               <div class="col-span-12 xl:col-span-4 md:col-span-6">

                  <!-- Blog Post -->
                  <figure class="p-6 mb-0 bg-white group dark:bg-box-dark rounded-10 shadow-regular dark:shadow-none">
                     <!-- Image Container -->
                     <div class="relative after:absolute after:h-0 after:w-full ltr:after:left-0 rtl:after:right-0 after:top-0 after:bg-[#0a0a0a15] after:rounded-10 after:transition-all after:duration-300 group-hover:after:h-full rounded-10 overflow-hidden">
                        <!-- Blog Image -->
                        <img alt="hexadash Blog" class="w-full rounded-10" src="{{ asset('vendor/hexadash/images/blogs/2.png') }}">
                     </div>
                     <!-- Caption and Metadata -->
                     <figcaption class="">
                        <!-- Date -->
                        <div class="flex justify-between items-center flex-wrap mt-2.5 gap-x-[10px] gap-y-[6px] text-14">



                           <span class="inline-block text-light dark:text-subtitle-dark text-15">5 April 2023</span>



                        </div>
                        <!-- Blog Title -->
                        <h2 class="mt-4 mb-3 text-xl font-semibold capitalize">
                           <a class="text-dark hover:text-primary dark:text-title-dark dark:hover:text-primary" href="blog-details.html">Exploring the Latest Web Design Trends</a>
                        </h2>
                        <!-- Blog Excerpt -->
                        <p class="mb-4 text-base text-dark dark:text-title-dark">Stay up-to-date with the latest trends in web design and user experience.</p>
                        <!-- Author and Engagement -->
                        <div class="flex justify-between">
                           <!-- Author Information -->
                           <div class="flex items-center gap-x-4">
                              <img alt="author" class="rounded-full max-w-[32px]" src="{{ asset('vendor/hexadash/images/avatars/t5.png') }}">
                              <span class="text-light dark:text-subtitle-dark text-15">David Brown</span>
                           </div>
                           <!-- Engagement Metrics -->
                           <ul class="flex items-center gap-[8px]">
                              <!-- Likes -->
                              <li>
                                 <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                    <i class="uil uil-heart group-hover:text-danger"></i>
                                    <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">14k</span>
                                 </span>
                              </li>
                              <!-- Views -->
                              <li>
                                 <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                    <i class="uil uil-file-info-alt group-hover:text-info"></i>
                                    <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">22k</span>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </figcaption>
                  </figure>

               </div>

               <div class="col-span-12 xl:col-span-4 md:col-span-6">

                  <!-- Blog Post -->
                  <figure class="p-6 mb-0 bg-white group dark:bg-box-dark rounded-10 shadow-regular dark:shadow-none">
                     <!-- Image Container -->
                     <div class="relative after:absolute after:h-0 after:w-full ltr:after:left-0 rtl:after:right-0 after:top-0 after:bg-[#0a0a0a15] after:rounded-10 after:transition-all after:duration-300 group-hover:after:h-full rounded-10 overflow-hidden">
                        <!-- Blog Image -->
                        <img alt="hexadash Blog" class="w-full rounded-10" src="{{ asset('vendor/hexadash/images/blogs/3.png') }}">
                     </div>
                     <!-- Caption and Metadata -->
                     <figcaption class="">
                        <!-- Date -->
                        <div class="flex justify-between items-center flex-wrap mt-2.5 gap-x-[10px] gap-y-[6px] text-14">



                           <span class="inline-block text-light dark:text-subtitle-dark text-15">10 April 2023</span>



                        </div>
                        <!-- Blog Title -->
                        <h2 class="mt-4 mb-3 text-xl font-semibold capitalize">
                           <a class="text-dark hover:text-primary dark:text-title-dark dark:hover:text-primary" href="blog-details.html">Effective Programming Tips for Beginners</a>
                        </h2>
                        <!-- Blog Excerpt -->
                        <p class="mb-4 text-base text-dark dark:text-title-dark">Get valuable tips to kickstart your programming journey as a beginner.</p>
                        <!-- Author and Engagement -->
                        <div class="flex justify-between">
                           <!-- Author Information -->
                           <div class="flex items-center gap-x-4">
                              <img alt="author" class="rounded-full max-w-[32px]" src="{{ asset('vendor/hexadash/images/avatars/t6.png') }}">
                              <span class="text-light dark:text-subtitle-dark text-15">Alex Turner</span>
                           </div>
                           <!-- Engagement Metrics -->
                           <ul class="flex items-center gap-[8px]">
                              <!-- Likes -->
                              <li>
                                 <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                    <i class="uil uil-heart group-hover:text-danger"></i>
                                    <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">9k</span>
                                 </span>
                              </li>
                              <!-- Views -->
                              <li>
                                 <span class="flex items-center leading-none gap-x-1 text-light dark:text-subtitle-dark text-13 group">
                                    <i class="uil uil-file-info-alt group-hover:text-info"></i>
                                    <span class="flex items-center leading-none text-light dark:text-subtitle-dark text-13">16k</span>
                                 </span>
                              </li>
                           </ul>
                        </div>
                     </figcaption>
                  </figure>

               </div>

            </div>

         </div>

         <!-- Footer -->
         @include('layouts.dashboard.footer')
         <!-- end: Footer -->
      </main>
      <!-- End: Main Content -->
   </div>
   <!-- End: Wrapping Content -->

   <!-- Customizing option -->

   <!-- End: Customizing option -->

   <!-- Preloader -->

   <div class="preloader fixed w-full h-full z-[9999] flex items-center justify-center top-0 bg-white dark:bg-black">
      <div class="animate-spin inline-block w-[50px] h-[50px] border-[3px] border-current border-t-transparent text-primary rounded-full" role="status" aria-label="loading">
         <span class="sr-only">Loading...</span>
      </div>
   </div>

   <!-- End: Preloader -->

   <!-- inject:js-->
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/apexcharts.min.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/datepicker-full.min.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/fslightbox.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/index.global.min.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/mixitup.min.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/moment.min.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/nouislider.min.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/quill.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/svg-pan-zoom.min.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/svgMap.min.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/tw-elements.umd.min.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/vendor_assets/js/yscountdown.min.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/theme_assets/js/apex-custom.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/theme_assets/js/full-calendar.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/theme_assets/js/googlemap-init.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/theme_assets/js/main.js') }}"></script>
   <script src="{{ asset('vendor/hexadash/assets/theme_assets/js/svgMapData.js') }}"></script>
   
   <!-- endinject-->
   @endsection