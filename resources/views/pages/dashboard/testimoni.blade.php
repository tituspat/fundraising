@extends('layouts.dashboard.app')


@section('content')
      <!-- Main Content -->
      <main class="bg-normalBG dark:bg-main-dark">
         <div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">

            <div class="grid grid-cols-12 gap-5">
               <div class="col-span-12">

                  <!-- Breadcrumb Section -->
                  <div class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                     <!-- Title -->
                     <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Testimoni Managemen</h4>
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
                                 <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">Testimoni Management</span>
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
                                {{$testimoni}}
                              </span>
                           </h4>
                           <span class="font-normal text-body dark:text-white/60 text-15">Total Testimoni</span>
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
                                 {{$testimonipreviewed}}
                              </span>
                           </h4>
                           <span class="font-normal text-body dark:text-white/60 text-15">Jumlah Ditampilkan</span>
                        </div>
                     </div>
                  </div>

               </div>


               <div class="col-span-12">
                  <div class="bg-white dark:bg-box-dark-up m-0 p-0 text-theme-gray dark:text-subtitle-dark text-[15px] rounded-10 relative mb-[25px] w-full py-[30px] px-[25px] flex flex-col gap-x-[15px] lg:gap-y-[25px] gap-y-[15px]">
                     <div class="text-dark dark:text-title-dark font-medium text-[17px] flex items-center justify-between max-sm:flex-col max-sm:gap-[15px]">
                        <h4 class="mb-0 text-[20px] leading-6 font-medium text-dark dark:text-title-dark">All Testimoni
                        </h4>
                     </div>

                     <div class="flex items-center flex-wrap justify-between gap-x-[30px] gap-y-[10px] max-lg:flex-col max-lg:justify-center">
                        <div class="flex items-center max-md:flex-wrap max-sm:justify-center gap-[10px]">
                           <div class="inline-flex items-center">
                              <span class="me-2 dark:text-subtitle-dark">Name:</span>
                              <input type="search" placeholder="Search nama" class="h-10 px-[20px] text-body dark:text-subtitle-dark bg-white dark:bg-box-dark-up border-normal border-1 dark:border-box-dark-up rounded-6 outline-none placeholder:text-gray dark:placeholder:text-subtitle-dark search-close-icon:appearance-none search-close-icon:w-[20px] search-close-icon:h-[23px] search-close-icon:bg-[url(images/svg/x.svg)] search-close-icon:cursor-pointer" autocomplete="off">
                           </div>
                           <div class="inline-flex items-center">
                              <span class="me-2 dark:text-subtitle-dark">Status</span>
                              <select data-te-select-init data-te-class-select-input="py-[7px] px-[20px] w-full capitalize [&~span]:top-[14px] [&~span]:w-[15px] [&~span]:h-[15px] [&~span]:text-body dark:[&~span]:text-white text-light dark:text-subtitle-dark border-normal dark:border-box-dark-up border-1 rounded-6 dark:bg-box-dark-up outline-none ltr:[&~span]:right-[0.75rem] rtl:[&~span]:left-[0.75rem] rtl:[&~span]:right-auto" data-te-class-notch-leading="!border-0 !shadow-none group-data-[te-input-focused]:shadow-none group-data-[te-input-focused]:border-none" data-te-class-notch-middle="!border-0 !shadow-none !outline-none" data-te-class-notch-trailing="!border-0 !shadow-none !outline-none">
                                 <option value="member">Ditampilkan</option>
                                 <option value="media">TIdak ditampilkan</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="max-h-[455px] pb-[15px] scrollbar overflow-y-auto">
                        <table class="min-w-full text-sm font-light text-left whitespace-nowrap">
                           <thead>
                              <tr class="whitespace-nowrap">
                                 <th class="bg-regularBG dark:bg-box-dark-up px-[25px] py-[17px] text-start text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden rounded-s-[10px] sticky top-0">
                                    ID</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                    Nama Pendukung</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                    Testimoni</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0 max-w-sm overflow-hidden">
                                    Status</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                    Role</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-[25px] py-[17px] text-end text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden rounded-e-[10px] sticky top-0">
                                    Tampilkan</th>
                              </tr>
                           </thead>
                           <tbody>
                            @foreach($testimonials as $t)
                            <tr class="group">
                               <td class="ps-[25px] pe-4 py-[12px] text-start last:text-end text-dark dark:text-title-dark group-hover:bg-transparent text-15 font-medium border-none before:hidden rounded-s-[4px]">
                                  {{$t->id}}
                               </td>
                               <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                  <div class="flex items-center">
                                     {{-- <div class="me-2.5 w-[34px] h-[34px]">
                                        <!-- <img class="min-w-[34px] h-[34px] rounded-full" src="{{ asset('vendor/hexadash/images/avatars/t1.jpg') }}" alt="John Doe"> -->
                                     </div>--}}
                                     <span class="font-medium capitalize text-dark dark:text-title-dark text-15">
                                        {{ $t->user->name }}</span>
                                  </div>
                               </td>
                               <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                  {{$t->testimonial}}
                               </td>
                               <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                  {{$t->is_previewed}}</td>
                               <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                  {{$t->user->role}}</td>
                               <td class="ps-[20px] pe-[25px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[4px]">
                                <div class="text-light dark:text-subtitle-dark text-[19px] flex items-center justify-end p-0 m-0 gap-[20px]">
                                    @if($t->is_previewed == 1)
                                        <!-- Icon to set is_previewed to 0 -->
                                        <form action="{{ route(Auth::user()->role . '.testimoni.unpreview', $t->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="cursor-pointer uil uil-times hover:text-danger bg-transparent border-none p-0 m-0"></button>
                                        </form>
                                    @else
                                        <!-- Icon to set is_previewed to 1 -->
                                        <form action="{{ route(Auth::user()->role . '.testimoni.preview', $t->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="cursor-pointer uil uil-check hover:text-success bg-transparent border-none p-0 m-0"></button>
                                        </form>
                                    @endif
                                </div>


                               </td>
                            </tr>
                            @endforeach
                         </tbody>
                        </table>
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


@endsection
