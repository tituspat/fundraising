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
                     <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Manajemen Konten</h4>
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
                                 <span class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">features</span>
                              </li>

                              <!-- Child (Current Page) -->
                              <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]" aria-current="page">
                                 <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">basic forms</span>
                              </li>
                           </ol>
                        </nav>
                     </div>
                  </div>

               </div>
            </div>
            <div class="grid grid-cols-12 gap-[25px]">
               <div class="col-span-12 xl:col-start-4 xl:col-span-6">
                  <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                     <div class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                        <h1 class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                           Form Konten</h1>
                     </div>
                     <div class="p-[25px]">
                        <div class="grid grid-cols-12">
                           <div class="col-span-12">
                              <form action="{{ route(Auth::user()->role . '.content.update') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-6">
                                    <div class="mb-4">
                                       <img id="previewImage2" src="{{ asset($content->logo) }}" alt="Image 2" class="w-1/2 mx-auto rounded-4" style="display: {{ $content->jumbotron_img ? 'block' : 'none' }}">
                                    </div>
                                    <!-- Input for the first image -->
                                    <div class="mt-4">
                                       <label for="image2" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Masukan Foto </label>
                                       <input type="file" id="image2" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="logo" onchange="previewFile('image2', 'previewImage2')">
                                    </div>
                                 </div>
                                 <div class="mb-6">
                                    <input type="hidden" id="id" value="{{$content->id}}" name="id" required>
                                    <label for="jumbotron_title" class="block mb-2 text-sm font-medium text-gray-900 capitalize dark:text-title-dark">Section 1 Judul</label>
                                    <input type="text" id="jumbotron_title" name="jumbotron_title" class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary" placeholder="{{$content->jumbotron_title}}" value="{{$content->jumbotron_title}}" required>
                                    @error('jumbotron_title')
        						        <span class="text-danger">{{ $message }}</span>
    						        @enderror
                                 </div>
                                 <div class="mb-6">
                                    <label for="jumbotron_subtitle" class="block mb-2 text-sm font-medium text-gray-900 capitalize dark:text-title-dark">Section 1 Sub Judul</label>
                                    <input type="text" id="jumbotron_subtitle" name="jumbotron_subtitle" class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary" placeholder="{{$content->jumbotron_subtitle}}" value="{{$content->jumbotron_subtitle}}" required>
                                    @error('jumbotron_subtitle')
        						        <span class="text-danger">{{ $message }}</span>
    						        @enderror
                                 </div>

                                 <div class="mb-6">
                                    <div class="mb-4">
                                       <img id="previewImage1" src="{{ asset($content->jumbotron_img) }}" alt="Image 1" class="w-1/2 mx-auto rounded-4" style="display: {{ $content->jumbotron_img ? 'block' : 'none' }}">
                                    </div>
                                    <!-- Input for the first image -->
                                    <div class="mt-4">
                                       <label for="image1" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Masukan Foto </label>
                                       <input type="file" id="image1" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="image1" onchange="previewFile('image1', 'previewImage1')">
                                    </div>
                                 </div>
                                 

                                 <div class="mb-6">
                                    <label for="profile_title" class="block mb-2 text-sm font-medium text-gray-900 capitalize dark:text-title-dark">Section Profile Judul</label>
                                    <input type="text" id="profile_title" name="profile_title" class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary" placeholder="{{$content->profile_title}}" value="{{$content->profile_title}}" required>
                                    @error('profile_title')
        						        <span class="text-danger">{{ $message }}</span>
    						        @enderror
                                 </div>
                                 <div class="mb-6">
                                    <label for="program_title" class="block mb-2 text-sm font-medium text-gray-900 capitalize dark:text-title-dark">Section Program Judul</label>
                                    <input type="text" id="program_title" name="program_title" class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary" placeholder="{{$content->program_title}}" value="{{$content->program_title}}" required>
                                    @error('program_title')
        						        <span class="text-danger">{{ $message }}</span>
    						        @enderror
                                 </div>
                                 <div class="mb-6">
                                    <label for="support_text" class="block mb-2 text-sm font-medium text-gray-900 capitalize dark:text-title-dark">Section Bantuan</label>
                                    <input type="text" id="support_text" name="support_text" class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary" placeholder="{{$content->support_text}}" value="{{$content->support_text}}" required>
                                    @error('support_text')
        						        <span class="text-danger">{{ $message }}</span>
    						        @enderror
                                 </div>
                                 <div class="mb-6">
                                    <label for="email_title" class="block mb-2 text-sm font-medium text-gray-900 capitalize dark:text-title-dark">Section Email</label>
                                    <input type="text" id="email_title" name="email_title" class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary" placeholder="{{$content->email_title}}" value="{{$content->email_title}}" required>
                                    @error('email_title')
        						        <span class="text-danger">{{ $message }}</span>
    						        @enderror
                                 </div>

                                 <div class="mb-6">
                                    <label for="footer_address" class="block mb-2 text-sm font-medium text-gray-900 capitalize dark:text-title-dark">Alamat pada catatan kaki</label>
                                    <input type="text" id="footer_address" name="footer_address" class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark focus:ring-primary focus:border-primary" placeholder="{{$content->footer_address}}" value="{{$content->footer_address}}" required>
                                    @error('footer_address')
        						        <span class="text-danger">{{ $message }}</span>
    						        @enderror
                                 </div>
                                 
                                 <button type="submit" class="min-w-[180px] h-[50px] text-white bg-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto px-5 text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear" data-te-ripple-init data-te-ripple-color="light">Perbarui</button>
                              </form>
                           </div>
                        </div>
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


      <script>
      function previewFile(inputId, previewId) {
         var file = document.getElementById(inputId).files[0];
         var reader = new FileReader();
         var preview = document.getElementById(previewId);
      
         reader.onloadend = function() {
            preview.src = reader.result;
            preview.style.display = 'block';
         };
      
         if (file) {
            reader.readAsDataURL(file);
         } else {
            preview.src = "";
            preview.style.display = 'none';
         }
      }
      </script>
      <!-- End: Main Content -->
 @endsection