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
                     <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">editors</h4>
                     <!-- Breadcrumb Navigation -->
                     <div class="flex flex-wrap justify-center">
                        <nav>
                           <ol class="flex flex-wrap p-0 mb-0 list-none gap-[8px] max-sm:justify-center">
                              <!-- Parent Link -->
                              <li class="inline-flex items-center">
                                 <a class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 hover:text-primary group" href="">
                                    <i class="uil uil-estate text-light dark:text-white/50 me-[8px] text-[16px] group-hover:text-current"></i>Dashboard</a>
                              </li>
                              <!-- Middle (Conditional) -->

                              <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]">
                                 <span class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">features</span>
                              </li>

                              <!-- Child (Current Page) -->
                              <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]" aria-current="page">
                                 <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">editors</span>
                              </li>
                           </ol>
                        </nav>
                     </div>
                  </div>

               </div>
            </div>
            <div class="grid grid-cols-12">
               <div class="col-span-12 mb-[30px]">
                  <div class="relative p-0 m-0 bg-white dark:bg-box-dark rounded-10 pb-[40px]">
                     <div class="relative [&>.tox]:border-0 [&>.tox~.tox-menubar]:bg-transparen [&>.ql-toolbar]:py-[15px] mx-[25px] mt-0 border-b border-regular dark:border-box-dark-up">
                        <div class="editorMessage h-[200px]"></div>
                     </div>
                  </div>
               </div>
               <div class="col-span-12 mb-[30px]">
                  <div class="relative p-0 m-0 bg-white dark:bg-box-dark rounded-10">
                     <div class="py-[30px] px-[30px] max-3xl:h-[300px] max-md:h-[245px] overflow-x-auto">
                        <div class="static w-full rounded-10 z-998">
                           <div class="relative flex items-center justify-between w-full border-b border-regular dark:border-box-dark-up">
                              <div class="relative flex items-center gap-2.5 min-h-[50px] w-full border-0 border-t border-regular dark:border-box-dark-up">
                                 <div data-te-chips-input-init data-te-chips-placeholder class="mb-0 min-h-[50px] border-none pb-0 shadow-none outline-none transition-all duration-300 ease-[cubic-bezier(0.25,0.1,0.25,1)] hover:cursor-text w-full [&>div>label]:hidden [&>div>.group>div]:border-0 [&>div>input]:h-[50px]" data-te-editable="true"></div>
                              </div>
                              <span class="absolute ltr:right-[30px] rtl:left-[30px] top-1/2 -translate-y-1/2 text-light dark:text-title-dark">Cc</span>
                           </div>
                        </div>
                        <div class="relative [&>.tox]:border-0 [&>.tox~.tox-menubar]:bg-transparen [&>.ql-toolbar]:py-[15px] mt-0">
                           <div class="editorCompose h-[260px]"></div>
                        </div>
                        <div class="flex items-center justify-between pt-[30px] border-t border-regular dark:border-box-dark-up ">
                           <div class="flex items-center gap-[15px]">
                              <button type="button" class="h-[44px] px-[20px] rounded-4 bg-primary text-white border-primary">
                                 Send
                              </button>
                              <a href="#" class="text-[13px] text-body dark:text-subtitle-dark hover:text-primary">
                                 <i class="uil uil-link"></i>
                              </a>
                              <a href="#" class="text-[13px] text-body dark:text-subtitle-dark hover:text-primary">
                                 <i class="uil uil-smile"></i>
                              </a>
                           </div>
                           <button type="button" class="text-[15px] text-body dark:text-subtitle-dark hover:text-primary bg-transparent border-none">
                              <i class="uil uil-trash"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-span-12">
                  <div class="bg-white dark:bg-box-dark w-full rounded-[10px]">
                     <div class="flex items-center justify-between bg-dark dark:bg-box-dark-up p-5 text-white dark:text-title-dark rounded-tl-10 rounded-tr-10">
                        <h6 class="text-white dark:text-title-dark">New message</h6>
                        <div class="flex items-center gap-[10px]">
                           <button type="button" class="full-window-trigger text-white bg-transparent border-none dark:text-title-dark screen flex items-center">
                              <i class="hidden uil uil-compress-arrows"></i>
                              <i class="uil uil-expand-arrows"></i>
                           </button>
                           <button type="button" class="email-overlay-message-close text-white bg-transparent border-none dark:text-title-dark screen flex items-center">
                              <i class="uil uil-multiply"></i>
                           </button>
                        </div>
                     </div>
                     <div class="pb-[30px] px-[30px] max-3xl:h-[300px] max-md:h-[245px] overflow-x-auto">
                        <div class="static w-full rounded-10 z-998">
                           <div class="relative flex items-center gap-2.5 border-b border-regular dark:border-box-dark-up w-full min-h-[50px]">
                              <input type="email" placeholder="Subject" class="text-dark dark:text-title-dark border-none bg-white dark:bg-box-dark shadow-none placeholder:text-body dark:placeholder:text-subtitle-dark w-full outline-none">
                           </div>
                           <div class="relative flex items-center justify-between w-full border-b border-regular dark:border-box-dark-up">
                              <div class="relative flex items-center gap-2.5 min-h-[50px] w-full">
                                 <input type="email" placeholder="Reply to" class=" text-dark dark:text-title-dark border-none bg-white dark:bg-box-dark shadow-none placeholder:text-body dark:placeholder:text-subtitle-dark w-full outline-none">
                              </div>
                              <span class="absolute ltr:right-[30px] rtl:left-[30px] top-1/2 -translate-y-1/2 text-light dark:text-title-dark">Cc</span>
                           </div>
                           <div class="relative [&>.tox]:border-0 [&>.tox~.tox-menubar]:bg-transparen [&>.ql-toolbar]:py-[15px] mt-0">
                              <div class="editorMessage-two h-[200px]"></div>
                           </div>
                        </div>
                        <div class="flex items-center justify-between pt-[30px] border-t border-regular dark:border-box-dark-up">
                           <div class="flex items-center gap-[15px]">
                              <button type="button" class="h-[44px] px-[20px] rounded-4 bg-primary text-white border-primary">
                                 Send
                              </button>
                              <a href="#" class="text-[13px] text-body dark:text-subtitle-dark hover:text-primary">
                                 <i class="uil uil-link"></i>
                              </a>
                              <a href="#" class="text-[13px] text-body dark:text-subtitle-dark hover:text-primary">
                                 <i class="uil uil-smile"></i>
                              </a>
                           </div>
                           <button type="button" class="text-[15px] text-body dark:text-subtitle-dark hover:text-primary bg-transparent border-none">
                              <i class="uil uil-trash"></i>
                           </button>
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
@endsection