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

            <!-- contents -->

            <div>
               <div class="grid grid-cols-12 gap-[25px]">
                  <div class="col-span-12">
                     
                  </div>
               </div>
               <div class="grid grid-cols-12 gap-[25px] mixitup-gallery">
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-web-design" data-order="1">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g1.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">Presentation Web Design</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">A collection of web design images for presentations.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-web-design" data-order="2">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g2.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">Web Design</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">
                                 Various web design examples and inspirations.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-ui-design" data-order="3">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g3.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">UI Design Web Design</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">Examples of UI design for web applications and websites.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-wireframe" data-order="4">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g4.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">Wireframe</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">Wireframe designs for planning and prototyping.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-presentation" data-order="5">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g5.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">Presentation</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">Images and graphics for presentations.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-web-design" data-order="6">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g6.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">Web Design Wireframe</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">Combining web design and wireframe concepts.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-ui-design" data-order="7">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g7.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">UI Design</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">User interface design examples and ideas.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-wireframe" data-order="8">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g8.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">Wireframe</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">Wireframe designs for planning and prototyping.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-web-design" data-order="9">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g9.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">Web Design</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">Various web design examples and inspirations.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-ui-design" data-order="10">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g10.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">UI Design Presentation</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">UI design examples for presentations.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-web-design" data-order="11">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g11.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">Web Design</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">Various web design examples and inspirations.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
                  <div class="col-span-12 2xl:col-span-3 sm:col-span-6 lg:col-span-4 mix mix-wireframe" data-order="12">

                     <figure class="bg-white dark:bg-box-dark-down rounded-10">
                        <img class="w-full h-[276px] rounded-10" src="images/gallery/g12.png" alt="presentation web-design">
                        <figcaption>
                           <div class="px-6 py-5">
                              <h1 class="text-15 font-medium mb-0.5 text-dark dark:text-title-dark">Wireframe</h1>
                              <p class="mb-0 text-light dark:text-subtitle-dark text-13">Wireframe designs for presentations.
                              </p>
                           </div>
                        </figcaption>
                     </figure>

                  </div>
               </div>
            </div>


         </div>

         <!-- Footer -->
         <footer class="px-[25px] bg-white dark:bg-box-dark">

            <!-- Footer content -->
            <div class="flex justify-between flex-wrap py-[22px] gap-x-[30px] gap-y-[15px] max-ssm:gap-y-[8px] items-center max-md:flex-col">
               <!-- Copyright information -->
               <div class="flex items-center gap-[4px] text-[14px] font-medium max-md:text-center text-body dark:text-subtitle-dark">© <span class="current-year">2022</span> <a href="#" class="text-primary">SovWare</a></div>

               <!-- Footer navigation links -->
               <div class="justify-end md:justify-center items-center flex gap-[15px]">
                  <a href="#" class="text-body dark:text-subtitle-dark text-[14px] hover:text-primary dark:hover:text-title-dark">About</a>
                  <a href="#" class="text-body dark:text-subtitle-dark text-[14px] hover:text-primary dark:hover:text-title-dark">Team</a>
                  <a href="#" class="text-body dark:text-subtitle-dark text-[14px] hover:text-primary dark:hover:text-title-dark">Contact</a>
               </div>
            </div>

         </footer>
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
   <script src="assets/vendor_assets/js/apexcharts.min.js"></script>
   <script src="assets/vendor_assets/js/datepicker-full.min.js"></script>
   <script src="assets/vendor_assets/js/fslightbox.js"></script>
   <script src="assets/vendor_assets/js/index.global.min.js"></script>
   <script src="assets/vendor_assets/js/mixitup.min.js"></script>
   <script src="assets/vendor_assets/js/moment.min.js"></script>
   <script src="assets/vendor_assets/js/nouislider.min.js"></script>
   <script src="assets/vendor_assets/js/quill.js"></script>
   <script src="assets/vendor_assets/js/svg-pan-zoom.min.js"></script>
   <script src="assets/vendor_assets/js/svgMap.min.js"></script>
   <script src="assets/vendor_assets/js/tw-elements.umd.min.js"></script>
   <script src="assets/vendor_assets/js/yscountdown.min.js"></script>
   <script src="assets/theme_assets/js/apex-custom.js"></script>
   <script src="assets/theme_assets/js/full-calendar.js"></script>
   <script src="assets/theme_assets/js/googlemap-init.js"></script>
   <script src="assets/theme_assets/js/main.js"></script>
   <script src="assets/theme_assets/js/svgMapData.js"></script>
   <!-- endinject-->
@endsection