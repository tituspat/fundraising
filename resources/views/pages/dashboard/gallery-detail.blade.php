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
                     <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">gallery details</h4>
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
                                 <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">gallery details</span>
                              </li>
                           </ol>
                        </nav>
                     </div>
                  </div>

                  <!-- Include breadcrumb navigation with appropriate titles -->
               </div>
            </div>

            <div class="flex items-center ssm:justify-between justify-center max-sm:flex-wrap gap-x-[30px] gap-y-[15px] ssm:mb-[33px] mb-[18px]">
               <div class="inline-flex items-center">

               </div>

               <button type="button" id="editBtn" class="flex items-center px-[20px] text-sm text-white rounded-md font-semibold bg-primary border-primary h-10 gap-[6px] transition-[0.3s]">
                  <i class="uil uil-pen"></i>
                  <span class="m-0">Edit</span>
               </button>
            </div>
            <div class="grid grid-cols-12 gap-[25px]">
               <div class="col-span-12 2xl:col-start-3 2xl:col-span-8">
                  <div class="bg-transparent 3xl:px-[30px] pb-5 max-xl:pb-0">
                    @if($isEditing)
                        <form action="{{ route(Auth::user()->role . '.gallery.update') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $gallery->id }}"> <br/>
                        <!-- Dropzone-style Image Input with Preview -->
                        <div class="p-[25px] mb-4">
                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-[176px] transition-all duration-300 ease-linear bg-white border-2 border-gray-300 border-dashed rounded-lg cursor-pointer hover:bg-gray-100 dark:bg-box-dark-up dark:border-box-dark-up dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center py-5">
                                            <p class="text-[15px] text-light font-medium dark:text-subtitle-dark">
                                                Drop files here to upload
                                            </p>
                                        </div>
                                        <input id="dropzone-file" type="file" name="image" class="hidden" accept="image/*" onchange="previewImage(event)" required />
                                    </label>
                                </div>

                                <!-- Image Preview -->
                                <div id="image-preview" class="mt-4 hidden flex items-center border rounded-md px-4 py-2 bg-gray-50">
                                    <!-- Image Thumbnail -->
                                    <img id="preview" src="" alt="Image Preview" class="w-8 h-8 object-cover rounded-md mr-4">
                                    <!-- File Information -->
                                    <div class="flex-1">
                                        <p id="file-name" class="text-sm font-medium text-gray-700 truncate overflow-hidden"></p>
                                        <p id="file-size" class="text-xs text-gray-500"></p>
                                    </div>
                                    <!-- Remove Button -->
                                    <button type="button" onclick="removePreview()" class="text-gray-400 hover:text-gray-600">
                                        &times;
                                    </button>
                                </div>
                            </div>

                           <div class="pb-4">
                              <label for="nameVertical" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Nama Kegiatan</label>
                              <div class="flex flex-col flex-1 md:flex-row">
                                 <input type="text" id="nameVertical" class=" rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="title" placeholder="{{$gallery->title}}" required>
                              </div>
                           </div>
                           <div class="pb-4">
                              <label for="emailVertical" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Deskripsi Singkat</label>
                              <div class="flex flex-col flex-1 md:flex-row">
                                 <textarea  id="emailVertical" class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark  focus:ring-primary focus:border-primary" name="description" placeholder="{{$gallery->description}}" required></textarea>
                              </div>
                           </div>

                           <div class="flex items-center gap-[15px] mt-[14px]">
                              <button type="button" class="px-[30px] h-[44px] text-body dark:text-subtitle-dark bg-regular dark:bg-box-dark-up border-regular dark:border-box-dark-up font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear hover:opacity-60" data-te-ripple-init="" data-te-ripple-color="dark" onclick="window.location='{{ URL::to(Auth::user()->role . '/gallery') }}'">Cancel</button>
                              <button type="submit" class="px-[30px] h-[44px] text-white bg-primary border-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear" data-te-ripple-init="" data-te-ripple-color="light">save</button>
                           </div>
                        @else
                        <div class="mb-[25px]">
                            <div class="max-h-[450px] rounded-10">
                                @if($gallery->media=='foto')
                                <img src="{{ Storage::url($gallery->url) }}" style="width:970px; height:450px" alt="gallery-details" class="object-cover w-full h-full">
                                @elseif($gallery->media=='video')
                                <iframe src="{{ $gallery->url }}" style="height:450px" class="object-cover w-full h-full" title="{{$gallery->title}}"></iframe>
                                @endif
                                <!-- Display the gallery thumbnail image -->
                            </div>
                            <div class="px-24 max-3xl:px-14 max-2xl:px-[30px] max-xl:px-0">
                                <h1 class="mt-10 mb-6 font-semibold text-dark dark:text-title-dark text-3xl lg:text-[26px] max-sm:text-2xl leading-10">
                                    {{$gallery->title}}
                                </h1>
                                 <!-- Display the gallery post title -->
                                <ul class="flex flex-wrap items-center mb-11 max-lg:mb-8 max-md:mb-5">
                                    <li class="relative flex items-center gap-x-2.5 m-1 text-light dark:text-subtitle-dark text-15">
                                        {{--<img src="{{ asset('vendor/hexadash/assets/images/avatars/t1.jpg') }}" alt="hexadash gallery author" class="min-w-[50px] w-[50px] rounded-full">--}}
                                        {{--<span class="inline-block text-base font-semibold text-dark dark:text-title-dark">Charli Day</span>--}}
                                        <!-- Display the author's name and avatar -->
                                    </li>
                                    <li class="relative m-1 ps-2.5 text-light dark:text-subtitle-dark text-15 before:absolute before:h-1 before:w-1 before:start-0 before:top-1/2 before:-translate-y-1/2 before:bg-light before:rounded-full">{{$gallery->created_at->format('d M Y')}}</li>
                                    {{--<li class="relative m-1 ps-2.5 text-light dark:text-subtitle-dark text-15 before:absolute before:h-1 before:w-1 before:start-0 before:end-0 before:top-1/2 before:-translate-y-1/2 before:bg-light before:rounded-full">
                                        <a href="#" class="text-light dark:text-subtitle-dark hover:text-primary">Development</a>
                                        <!-- Display the publication date and category with links -->
                                    </li>--}}
                                    {{--<li class="relative m-1 ps-2.5 text-light dark:text-subtitle-dark text-15 before:absolute before:h-1 before:w-1 before:start-0 before:top-1/2 before:-translate-y-1/2 before:bg-light before:rounded-full">6 mins read</li>--}}
                                    <!-- Display the reading time -->
                                </ul>
                                <p class="text-lg text-body dark:text-subtitle-dark mb-[20px]">
                                    {{$gallery->description}}
                                </p>
                            </ul>

                            {{--<ul class="flex flex-wrap items-center mt-12 -mx-1 -mb-1">
                                <li class="m-1 font-medium pe-4 text-dark dark:text-title-dark text-[16px]">Share this article:</li>
                                <li class="m-1">
                                    <a href="#" class="group inline-flex items-center justify-center gap-x-1 bg-white dark:bg-box-dark-down dark:hover:bg-facebook hover:bg-facebook min-h-[34px] px-3.5 text-facebook dark:text-subtitle-dark hover:text-white dark:hover:text-title-dark text-15 border border-regular dark:border-box-dark-up rounded-md transition duration-0 hover:duration-150">
                                        <i class="uil uil-facebook"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="m-1">
                                    <a href="#" class="group inline-flex items-center justify-center gap-x-1 bg-white dark:bg-box-dark-down dark:hover:bg-twitter hover:bg-twitter min-h-[34px] px-3.5 text-twitter dark:text-subtitle-dark hover:text-white dark:hover:text-title-dark text-15 border border-regular dark:border-box-dark-up rounded-md transition duration-0 hover:duration-150">
                                        <img class="svg" src="{{ asset('vendor/hexadash/assets/images/svg/x-twitter.svg') }}" alt="twitter">
                                        <span>Tweet</span>
                                    </a>
                                </li>
                                <li class="m-1">
                                    <a href="#" class="group inline-flex items-center justify-center gap-x-1 bg-white dark:bg-box-dark-down dark:hover:bg-linkedin hover:bg-linkedin min-h-[34px] px-3.5 text-linkedin dark:text-subtitle-dark hover:text-white dark:hover:text-title-dark text-15 border border-regular dark:border-box-dark-up rounded-md transition duration-0 hover:duration-150">
                                        <i class="uil uil-linkedin"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="m-1">
                                    <a href="#" class="group inline-flex items-center justify-center gap-x-1 bg-white dark:bg-box-dark-down dark:hover:bg-link hover:bg-link min-h-[34px] px-3.5 text-link dark:text-subtitle-dark hover:text-white dark:hover:text-title-dark text-15 border border-regular dark:border-box-dark-up rounded-md transition duration-0 hover:duration-150">
                                        <i class="uil uil-link"></i>
                                        <span>Copy</span>
                                    </a>
                                </li>
                            </ul>--}}
                            <!-- Display social sharing buttons -->
                            {{--<div class="flex items-start gap-5 mt-12 bg-white rounded-lg max-sm:flex-col dark:bg-box-dark-up p-9 shadow-custom dark:shadow-none">
                                <div><img src="{{ asset('vendor/hexadash/assets/images/avatars/t1.jpg') }}" alt="hexadash Blog" class="max-w-[70px] rounded-full"></div>
                                <div>
                                    <span class="text-body dark:text-subtitle-dark text-15">Written By</span>
                                    <span class="block text-lg font-semibold text-dark dark:text-title-dark">Charli Day</span>
                                    <p class="mt-5 mb-0 text-base text-light dark:text-subtitle-dark">Charli Day is a British writer and social media manager specializing in dynamic branding, campaign strategy, and content engagement.</p>
                                </div>
                            </div>--}}
                            <!-- Display author information -->

                            <div id="sticky-social" class="fixed top-0 ms-[820px] text-center translate-y-40 invisible opacity-0 [&.show]:visible [&.show]:opacity-100 transition-opacity duration-2000 ease-in-out">
                                <span class="text-base font-semibold text-breadcrumbs dark:text-title-dark">Share</span>
                                <ul>
                                    <li class="my-2.5">
                                        <a href="#" class="flex items-center justify-center bg-white rounded-full dark:bg-box-dark-down w-[50px] h-[50px] shadow dark:shadow-[0_5px_20px_rgba(1,4,19,.60)] hover:bg-facebook hover:text-white text-facebook transition duration-300">
                                            <i class="uil uil-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="my-2.5">
                                        <a href="#" class="flex items-center justify-center bg-white rounded-full dark:bg-box-dark-down w-[50px] h-[50px] shadow dark:shadow-[0_5px_20px_rgba(1,4,19,.60)] hover:bg-twitter text-twitter dark:text-title-dark hover:text-white transition duration-300">
                                            <img class="svg" src="{{ asset('vendor/hexadash/assets/images/svg/x-twitter.svg') }}" alt="twitter">
                                        </a>
                                    </li>
                                    <li class="my-2.5">
                                        <a href="#" class="flex items-center justify-center bg-white rounded-full dark:bg-box-dark-down w-[50px] h-[50px] shadow dark:shadow-[0_5px_20px_rgba(1,4,19,.60)] hover:bg-linkedin text-linkedin hover:text-white transition duration-300">
                                            <i class="uil uil-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="my-2.5">
                                        <a href="#" class="flex items-center justify-center bg-white rounded-full dark:bg-box-dark-down w-[50px] h-[50px] shadow dark:shadow-[0_5px_20px_rgba(1,4,19,.60)] hover:bg-info text-info hover:text-white transition duration-300">
                                            <i class="uil uil-link"></i>
                                        </a>
                                    </li>
                                </ul>
                              </div>
                        </div>
                        @endif
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
    <script>
        document.getElementById('editBtn').addEventListener('click', function() {
            // Simple JavaScript logic to toggle view/edit mode
            window.location.href = "{{ route(Auth::user()->role. '.gallery.edit', $gallery->id) }}";
        });
    </script>
    <script>
    function previewImage(event) {
        const reader = new FileReader();
        const file = event.target.files[0];

        reader.onload = function() {
            const preview = document.getElementById('preview');
            const fileName = document.getElementById('file-name');
            const fileSize = document.getElementById('file-size');

            preview.src = reader.result;
            fileName.textContent = file.name;
            fileSize.textContent = `${(file.size / 1024).toFixed(2)} KB`;

            document.getElementById('image-preview').classList.remove('hidden');
        }

        reader.readAsDataURL(file);
    }

    function removePreview() {
        const input = document.getElementById('dropzone-file');
        input.value = '';
        document.getElementById('image-preview').classList.add('hidden');
    }
</script>
    <!-- End: Customizing option -->


@endsection
