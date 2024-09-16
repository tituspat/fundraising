@extends('layouts.dashboard.app')


@section('content')
    <!-- Main Content -->
    <main class="bg-normalBG dark:bg-main-dark">
        <div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">


            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12">

                    <!-- Breadcrumb Section -->
                    <div
                        class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                        <!-- Title -->
                        <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Dashboard</h4>
                        <!-- Breadcrumb Navigation -->
                        <div class="flex flex-wrap justify-center">
                            <nav>
                                <ol class="flex flex-wrap p-0 mb-0 list-none gap-[8px] max-sm:justify-center">
                                    <!-- Parent Link -->
                                    <li class="inline-flex items-center">
                                        <a class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 hover:text-primary group">
                                            <i
                                                class="uil uil-estate text-light dark:text-white/50 me-[8px] text-[16px] group-hover:text-current"></i>Dashboard</a>
                                    </li>
                                    <!-- Middle (Conditional) -->

                                    <!-- Child (Current Page) -->
                                    <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]"
                                        aria-current="page">
                                        <span
                                            class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">dashboard</span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

    
                    <div class="grid grid-cols-12 gap-[25px]">
                        <!-- <div class="col-span-12 2xl:col-span-3 md:col-span-6">
                            <div bordered="false"
                                class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                                <div class="flex justify-between">
                                    <div
                                        class="bg-primary/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-primary w-[58px]">
                                        <i class="uil uil-ticket"></i>
                                    </div>
                                    <div>
                                        <h4
                                            class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                                            <span>
                                                {{ $usercount }}
                                            </span>
                                        </h4>
                                        <span class="font-normal text-body dark:text-white/60 text-15">Jumlah
                                            Pengguna</span>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="col-span-12 xl:col-span-6 lg:col-span-3 sm:col-span-6">
                            <div class="p-[25px] bg-white dark:bg-box-dark rounded-10 relative text-[15px] text-body dark:text-subtitle-dark leading-6">
                               <div class="flex justify-between">
                                  <div class="bg-warning/10 flex h-[58px] items-center justify-center rounded-2xl text-warning w-[58px] order-2">
                                     <div class="flex items-center text-warning text-[30px]">
                                        <i class="uil uil-users-alt"></i>
                                     </div>
                                  </div>
                                  <div>
                                     <h4 class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-title-dark">
                                        <span class="flex items-center countCategories" data-number="{{ $usercount }}">


                                           <span class="countNumber">1211</span>

                                           <span>+</span>

                                        </span>
                                     </h4>
                                     <span class="font-normal text-body dark:text-subtitle-dark text-15">New Customers</span>
                                  </div>
                               </div>
                               <div class="mt-3">
                                  <span class="inline-flex items-center w-full py-[12px] bg-normalBG dark:bg-box-dark-up px-2.5 rounded-lg gap-x-[10px] gap-y-[5px] flex-wrap">

                                     <span class="flex font-medium gap-[2px] items-center text-sm text-success">
                                        <i class="uil uil-arrow-up text-[18px]"></i> {{$userDifference}} </span>
                                     <span class="text-sm text-light dark:text-subtitle-dark">Since last month</span>

                                  </span>
                               </div>
                            </div>
                        </div>

                        <!-- <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                            <div bordered="false"
                                class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                                <div class="flex justify-between">
                                    <div
                                        class="bg-secondary/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-secondary w-[58px]">
                                        <i class="uil uil-ticket"></i>
                                    </div>
                                    <div>
                                        <h4
                                            class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                                            <span>
                                                {{ $testimonialcount }}
                                            </span>
                                        </h4>
                                        <span class="font-normal text-body dark:text-white/60 text-15">Jumlah
                                            Testimoni</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                            <div bordered="false"
                                class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                                <div class="flex justify-between">
                                    <div
                                        class="bg-warning/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-warning w-[58px]">
                                        <i class="uil uil-ticket"></i>
                                    </div>
                                    <div>
                                        <h4
                                            class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                                            <span>
                                                {{ $questioncount }}
                                            </span>
                                        </h4>
                                        <span class="font-normal text-body dark:text-white/60 text-15">Jumlah
                                            Pertanyaan</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                            <div bordered="false"
                                class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                                <div class="flex justify-between">
                                    <div
                                        class="bg-success/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-success w-[58px]">
                                        <i class="uil uil-ticket"></i>
                                    </div>
                                    <div>
                                        <h4
                                            class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                                            <span>
                                                {{ $newscount }}
                                            </span>
                                        </h4>
                                        <span class="font-normal text-body dark:text-white/60 text-15">Jumlah Berita</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-span-12 2xl:col-span-3 md:col-span-6">
                            <div bordered="false"
                                class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                                <div class="flex justify-between">
                                    <div
                                        class="bg-primary/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-primary w-[58px]">
                                        <i class="uil uil-ticket"></i>
                                    </div>
                                    <div>
                                        <h4
                                            class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                                            <span>
                                                {{ $blogcount }}
                                            </span>
                                        </h4>
                                        <span class="font-normal text-body dark:text-white/60 text-15">Jumlah Blog</span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    </br>
                    <div class="grid grid-cols-12 gap-[25px]">
                        <div class="col-span-12 2xl:col-span-3 md:col-span-6">
                            <div bordered="false"
                                class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                                <div class="flex justify-between">
                                    <div
                                        class="bg-primary/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-primary w-[58px]">
                                        <i class="uil uil-ticket"></i>
                                    </div>
                                    <div>
                                        <h4
                                            class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                                            <span>
                                                {{ $programcount }}
                                            </span>
                                        </h4>
                                        <span class="font-normal text-body dark:text-white/60 text-15">Jumlah Program</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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


    <!-- inject:js-->

    <!-- endinject-->
@endsection
