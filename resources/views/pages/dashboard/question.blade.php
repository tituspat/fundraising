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
                     <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Manajemen Pertanyaan</h4>
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

                              {{-- <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]">
                                 <span class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">Pages</span>
                              </li> --}}

                              <!-- Child (Current Page) -->
                              <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]" aria-current="page">
                                 <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">Manajemen Pertanyaan</span>
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
                                {{$questioncount}}
                              </span>
                           </h4>
                           <span class="font-normal text-body dark:text-white/60 text-15">Total Pertanyaan</span>
                        </div>
                     </div>
                  </div>

               </div>
               <div class="col-span-12 2xl:col-span-3 md:col-span-6">

               </div>


               <div class="col-span-12">
                  <div class="bg-white dark:bg-box-dark-up m-0 p-0 text-theme-gray dark:text-subtitle-dark text-[15px] rounded-10 relative mb-[25px] w-full py-[30px] px-[25px] flex flex-col gap-x-[15px] lg:gap-y-[25px] gap-y-[15px]">
                     {{-- <div class="text-dark dark:text-title-dark font-medium text-[17px] flex items-center justify-between max-sm:flex-col max-sm:gap-[15px]">
                        <h4 class="mb-0 text-[20px] leading-6 font-medium text-dark dark:text-title-dark">All Testimoni
                        </h4>
                     </div> --}}
                     <div class="max-h-[455px] pb-[15px] scrollbar overflow-y-auto">
                        <table class="min-w-full text-sm font-light text-left whitespace-nowrap">
                           <thead>
                              <tr class="whitespace-nowrap">
                                 <th class="bg-regularBG dark:bg-box-dark-up px-[25px] py-[17px] text-start text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden rounded-s-[10px] sticky top-0">
                                    ID</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                    Nama</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                    Email</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0 max-w-sm overflow-hidden">
                                    Pertanyaan</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                    Asal Daerah</th>
                                    <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                        Tanggal Dibuat</th>
                                 <th class="bg-regularBG dark:bg-box-dark-up px-[25px] py-[17px] text-end text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden rounded-e-[10px] sticky top-0">
                                    Nomor HP</th>
                              </tr>
                           </thead>
                           <tbody>
                            @foreach($question as $q)
                           <tr class="group">
                              <td class="ps-[25px] pe-4 py-[12px] text-start last:text-end text-dark dark:text-title-dark group-hover:bg-transparent text-15 font-medium border-none before:hidden rounded-s-[4px]">
                                 {{$q->id}}
                              </td>
                              <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                 <div class="flex items-center">
                                    <span class="font-medium capitalize text-dark dark:text-title-dark text-15">
                                       {{ $q->name }}</span>
                                 </div>
                              </td>
                              <td class="ps-[20px] py-[12px] font-normal last:text-end text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                 <a href="mailto:{{$q->email}}" target="_blank">{{$q->email}}</a>
                              </td>
                              <td  class="ps-[20px] py-[12px] font-normal last:text-end text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                {{$q->question}}
                              </td>
                              <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                 {{$q->origin}}
                              </td>
                              <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                 {{$q->created_at}}
                              </td>
                              <td class="ps-[20px] py-[12px] font-normal last:text-center capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                 <a href="https://wa.me/62{{$q->phone_number}}" target="_blank">0{{$q->phone_number}}</a>
                              </td>
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
