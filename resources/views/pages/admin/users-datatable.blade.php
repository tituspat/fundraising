<!doctype html>
<html lang="en" dir="ltr" class="scroll-smooth focus:scroll-auto">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Meta Tags -->
   <meta name="description" content="This is a page about support ticket.">
   <meta name="keywords" content="hexadash, web development, UI components">
   <meta name="author" content="dashboardmarket.com">
   <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendor/hexadash/images/favicon.ico') }}">
   <!-- Title -->
   <title>Support ticket</title>

   <!-- inject:css-->
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/apexcharts.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/datepicker.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/line-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/nouislider.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/quill.snow.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/svgMap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/tailwind.css')}}">
   <!-- endinject -->

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
   <!-- Icons -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body class=" bg-white [&.dark]:bg-main-dark font-jost relative text-[15px] font-normal leading-[1.5] m-0 p-0">
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
                     <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">User Management</h4>
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
                                 <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">User Management</span>
                              </li>
                           </ol>
                        </nav>
                     </div>
                  </div>

               </div>
            </div>
            <div class="grid grid-cols-12 gap-[25px]">
               <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                  <div bordered="false" class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                     <div class="flex justify-between">
                        <div class="bg-primary/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-primary w-[58px]">
                           <i class="uil uil-ticket"></i>
                        </div>
                        <div>
                           <h4 class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                              <span>
                                 {{$admincount}}
                              </span>
                           </h4>
                           <span class="font-normal text-body dark:text-white/60 text-15">Admin</span>
                        </div>
                     </div>
                  </div>

               </div>
               <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                  <div bordered="false" class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                     <div class="flex justify-between">
                        <div class="bg-secondary/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-secondary w-[58px]">
                           <i class="uil uil-ticket"></i>
                        </div>
                        <div>
                           <h4 class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                              <span>
                                 {{$modcount}}
                              </span>
                           </h4>
                           <span class="font-normal text-body dark:text-white/60 text-15">Moderator</span>
                        </div>
                     </div>
                  </div>

               </div>
               <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                  <div bordered="false" class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                     <div class="flex justify-between">
                        <div class="bg-warning/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-warning w-[58px]">
                           <i class="uil uil-ticket"></i>
                        </div>
                        <div>
                           <h4 class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                              <span>
                                 {{$mediacount}}
                              </span>
                           </h4>
                           <span class="font-normal text-body dark:text-white/60 text-15">Media</span>
                        </div>
                     </div>
                  </div>

               </div>
               <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                  <div bordered="false" class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                     <div class="flex justify-between">
                        <div class="bg-success/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-success w-[58px]">
                           <i class="uil uil-ticket"></i>
                        </div>
                        <div>
                           <h4 class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                              <span>
                                 {{$membercount}}
                              </span>
                           </h4>
                           <span class="font-normal text-body dark:text-white/60 text-15">Member</span>
                        </div>
                     </div>
                  </div>

               </div>
               <div class="col-span-12">
                  <div class="bg-white dark:bg-box-dark-up m-0 p-0 text-theme-gray dark:text-subtitle-dark text-[15px] rounded-10 relative mb-[25px] w-full py-[30px] px-[25px] flex flex-col gap-x-[15px] lg:gap-y-[25px] gap-y-[15px]">
                     <div class="text-dark dark:text-title-dark font-medium text-[17px] flex items-center justify-between max-sm:flex-col max-sm:gap-[15px]">
                        <h4 class="mb-0 text-[20px] leading-6 font-medium text-dark dark:text-title-dark">All User
                        </h4>
                        <button type="button" class="flex items-center px-[14px] text-sm text-white rounded-md font-semibold bg-primary border-primary h-10 gap-[6px]">
                           <i class="uil uil-plus"></i>
                           <span class="m-0">Add User</span>
                        </button>
                     </div>
                     <div class="flex items-center flex-wrap justify-between gap-x-[30px] gap-y-[10px] max-lg:flex-col max-lg:justify-center">
                        <div class="flex items-center max-md:flex-wrap max-sm:justify-center gap-[10px]">
                           <div class="inline-flex items-center">
                              <span class="me-2 dark:text-subtitle-dark">Id:</span>
                              <input type="search" placeholder="Search with Id" class="h-10 px-[20px] text-body dark:text-subtitle-dark bg-white dark:bg-box-dark-up border-normal border-1 dark:border-box-dark-up rounded-6 outline-none placeholder:text-gray dark:placeholder:text-subtitle-dark search-close-icon:appearance-none search-close-icon:w-[20px] search-close-icon:h-[23px] search-close-icon:bg-[url(images/svg/x.svg)] search-close-icon:cursor-pointer" autocomplete="off">
                           </div>
                           <div class="inline-flex items-center">
                              <span class="me-2 dark:text-subtitle-dark">Status</span>
                              <select data-te-select-init data-te-class-select-input="py-[7px] px-[20px] w-full capitalize [&~span]:top-[14px] [&~span]:w-[15px] [&~span]:h-[15px] [&~span]:text-body dark:[&~span]:text-white text-light dark:text-subtitle-dark border-normal dark:border-box-dark-up border-1 rounded-6 dark:bg-box-dark-up outline-none ltr:[&~span]:right-[0.75rem] rtl:[&~span]:left-[0.75rem] rtl:[&~span]:right-auto" data-te-class-notch-leading="!border-0 !shadow-none group-data-[te-input-focused]:shadow-none group-data-[te-input-focused]:border-none" data-te-class-notch-middle="!border-0 !shadow-none !outline-none" data-te-class-notch-trailing="!border-0 !shadow-none !outline-none">
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                              </select>
                           </div>
                        </div>
                        <div class="sm:w-[280px] relative w-full">
                           <span class="start-5 absolute -translate-y-2/4 leading-[0] top-2/4 text-light dark:text-subtitle-dark text-[14px]">
                              <i class="uil uil-search"></i>
                           </span>
                           <input type="search" class="ps-[50px] h-[40px] rounded-6 border border-normal dark:border-box-dark-up bg-white dark:bg-box-dark-up font-normal shadow-none px-[15px] py-[5px] text-[15px] text-dark dark:text-title-dark outline-none placeholder:text-gray dark:placeholder:text-subtitle-dark w-full search-close-icon:appearance-none search-close-icon:w-[20px] search-close-icon:h-[23px] search-close-icon:bg-[url(images/svg/x.svg)] search-close-icon:cursor-pointer" placeholder="Search contact" autocomplete="off">
                        </div>
                     </div>
                     <div class="max-h-[455px] pb-[15px] scrollbar overflow-y-auto">
                        <table class="min-w-full text-sm font-light text-left whitespace-nowrap">
                           <thead>
                              <tr class="whitespace-nowrap">
                                 <th class="bg-regularBG dark:bg-box-dark-up px-[25px] py-[17px] text-start text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden rounded-s-[10px] sticky top-0">
                                    ID</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                    Name</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                    Email</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0 max-w-sm overflow-hidden">
                                    Password</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                    Role</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                    Updated Date</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-[25px] py-[17px] text-end text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden rounded-e-[10px] sticky top-0">
                                    Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($users as $u)
                              <tr class="group">
                                 <td class="ps-[25px] pe-4 py-[12px] text-start last:text-end text-dark dark:text-title-dark group-hover:bg-transparent text-15 font-medium border-none before:hidden rounded-s-[4px]">
                                    {{$u->id}}
                                 </td>
                                 <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    <div class="flex items-center">
                                       {{-- <div class="me-2.5 w-[34px] h-[34px]">
                                          <img class="min-w-[34px] h-[34px] rounded-full" src="{{ asset('vendor/hexadash/images/avatars/t1.jpg') }}" alt="John Doe">
                                       </div>--}}
                                       <span class="font-medium capitalize text-dark dark:text-title-dark text-15">
                                          {{$u -> name}}</span>
                                    </div>
                                 </td>
                                 <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    {{$u->email}}
                                 </td>
                                 <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    {{$u->password}}</td>
                                 <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">

                                    <span class="capitalize font-medium inline-flex items-center justify-center min-h-[24px] px-3 rounded-[15px] text-xs">
                                       {{$u->role}}
                                    </span>

                                 </td>
                                 <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    {{$u->updated_at}}
                                 </td>
                                 <td class="ps-[20px] pe-[25px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[4px]">
                                    <div class="text-light dark:text-subtitle-dark text-[19px]  flex items-center justify-end p-0 m-0 gap-[20px]">
                                       <button type="button" class="cursor-pointer edit-task-title uil uil-setting hover:text-primary"></button>
                                       <button type="button" class="cursor-pointer edit-task-title uil uil-edit-alt hover:text-info"></button>
                                       <button type="button" class="cursor-pointer remove-task-wrapper uil uil-times hover:text-danger"></button>
                                    </div>
                                 </td>
                              </tr>
                              @endforeach

                           </tbody>
                        </table>
                     </div>
                     <div class="flex items-center pt-[30px] justify-center border-t border-normal dark:border-box-dark-up">
                        <nav aria-label="Page navigation example">
                           <ul class="flex items-center justify-center gap-2 list-style-none listItemActive">
                              <li>
                                 <a class="relative flex justify-center items-center rounded bg-transparent h-[30px] w-[30px]  text-light transition-all duration-300 dark:text-white dark:hover:bg-box-dark-up dark:hover:text-white  border border-regular dark:border-box-dark-up  text-[13px] font-normal capitalize text-[rgb(64_64_64_/_var(--tw-text-opacity))] duration ease-in-out border-solid hover:bg-primary hover:text-white" href="#" aria-label="Previous">
                                    <i class="uil uil-angle-left text-[16px]"></i>
                                 </a>
                              </li>
                              <li>
                                 <a class="relative flex justify-center items-center border border-regular dark:border-box-dark-up rounded bg-white text-dark h-[30px] w-[30px] text-sm transition-all duration-300 hover:bg-primary hover:text-white dark:text-white dark:bg-box-dark-up dark:hover:text-white [&.active]:bg-primary [&.active]:text-white active" href="#">1</a>
                              </li>
                              <li aria-current="page">
                                 <a class="relative flex justify-center items-center border border-regular dark:border-box-dark-up rounded bg-white text-dark h-[30px] w-[30px] text-sm transition-all duration-300 hover:bg-primary hover:text-white dark:text-white dark:bg-box-dark-up dark:hover:text-white [&.active]:bg-primary [&.active]:text-white" href="#">2</a>
                              </li>
                              <li>
                                 <a class="relative flex justify-center items-center border border-regular dark:border-box-dark-up rounded  bg-white text-dark h-[30px] w-[30px] text-sm transition-all duration-300 hover:bg-primary hover:text-white dark:text-white dark:bg-box-dark-up dark:hover:text-white [&.active]:bg-primary [&.active]:text-white" href="#">3</a>
                              </li>
                              <li>
                                 <a class="relative flex justify-center items-center rounded bg-transparent h-[30px] w-[30px]  text-light transition-all duration-300 dark:text-white dark:hover:bg-box-dark-up dark:hover:text-white  border border-regular dark:border-box-dark-up text-[13px] font-normal capitalize text-[rgb(64_64_64_/_var(--tw-text-opacity))] duration ease-in-out border-solid hover:bg-primary hover:text-white cursor-pointer" href="#" aria-label="Next">
                                    <i class="uil uil-angle-right text-[16px]"></i>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
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
</body>

</html>