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
                     <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">form layouts</h4>
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
                                 <span class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">Gallery</span>
                              </li>

                              <!-- Child (Current Page) -->
                              <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]" aria-current="page">
                                 <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">form layouts</span>
                              </li>
                           </ol>
                        </nav>
                     </div>
                  </div>

               </div>
            </div>
            <div class="grid grid-cols-12 gap-[25px] items-center">
               <div class="col-span-12 xl:col-span-6">
                  <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                     <div class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                        <h1 class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                           Tambah Foto
                        </h1>
                     </div>
                     <div class="p-[25px]">
                        <form action="{{ route(Auth::user()->role . '.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="media" value="foto">
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
                                        @error('image')
        						            <span class="text-danger">{{ $message }}</span>
    						            @enderror
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
                                 <input type="text" id="nameVertical" class=" rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="title" placeholder="Melakukan Survey" required>
                              </div>
                           </div>
                           <div class="pb-4">
                              <label for="emailVertical" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Deskripsi Singkat</label>
                              <div class="flex flex-col flex-1 md:flex-row">
                                 <input type="text" id="emailVertical" class="w-full rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark  focus:ring-primary focus:border-primary" name="description" placeholder="Survey bersama-sama" required>
                                 @error('description')
        						    <span class="text-danger">{{ $message }}</span>
    						    @enderror
                              </div>
                           </div>


                           <div class="flex items-center gap-[15px] mt-[14px]">
                              <button type="button" class="px-[30px] h-[44px] text-body dark:text-subtitle-dark bg-regular dark:bg-box-dark-up border-regular dark:border-box-dark-up font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear hover:opacity-60" data-te-ripple-init="" data-te-ripple-color="dark" onclick="window.location='{{ URL::to(Auth::user()->role . '/gallery') }}'">Cancel</button>
                              <button type="submit" class="px-[30px] h-[44px] text-white bg-primary border-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear" data-te-ripple-init="" data-te-ripple-color="light">save</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-span-12 xl:col-span-6">
                <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                    <div class="px-[25px] text-dark dark:text-title-dark font-medium text-[17px] flex flex-wrap items-center justify-between max-sm:flex-col max-sm:h-auto border-b border-regular dark:border-box-dark-up">
                        <h1 class="mb-0 inline-flex items-center py-[16px] overflow-hidden whitespace-nowrap text-ellipsis text-[18px] font-semibold text-dark dark:text-title-dark capitalize">
                            Tambah Video
                        </h1>
                    </div>
                    <div class="p-[25px]">
                        <form action="{{ route(Auth::user()->role . '.video.preview') }}" method="POST">
                            @csrf
                            <div class="pb-4">
                                <label for="urlVideo" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">URL Video</label>
                                <div class="flex flex-col flex-1 md:flex-row">
                                    <input type="text" id="urlVideo" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="url" placeholder="https://www.youtube.com" required>
                                    @error('url')
        						        <span class="text-danger">{{ $message }}</span>
    						        @enderror
                                </div>
                            </div>
                            <div class="flex items-center gap-[15px] mt-[14px]">
                                <button type="submit" class="px-[30px] h-[44px] text-white bg-primary border-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear">Periksa Video</button>
                            </div>
                        </form>

                        @if(isset($postVideo, $title, $description, $thumbnail, $siteName))
                            <!-- Preview Section -->
                            <div class="col-span-12 xl:col-span-4 md:col-span-6 mt-5">
                                <figure class="p-6 mb-0 bg-white group dark:bg-box-dark rounded-10 shadow-regular dark:shadow-none">
                                    <div class="relative rounded-10 overflow-hidden">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$postVideo}}" frameborder="0"></iframe>
                                    </div>
                                    <figcaption>
                                        <div class="flex justify-between items-center flex-wrap mt-2.5 gap-x-[10px] gap-y-[6px] text-14">
                                            <span class="inline-block text-light dark:text-subtitle-dark text-15">{{ now() }}</span>
                                        </div>
                                        <form action="{{ route(Auth::user()->role . '.video.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="media" value="video">
                                            <input type="hidden" name="thumbnail" value="{{$thumbnail}}">
                                            <input type="hidden" name="url" value="https://www.youtube.com/embed/{{$postVideo}}">
                                            <div class="pb-4">
                                                <label for="nameVertical" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark" >Judul Video</label>
                                                <div class="flex flex-col flex-1 md:flex-row">
                                                    <input type="text" id="nameVertical" class=" rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="title" value="{{$title}}" required>
                                                    @error('title')
        						                        <span class="text-danger">{{ $message }}</span>
    						                        @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="px-[30px] h-[44px] text-white bg-primary border-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear mt-4">Save</button>
                                        </form>
                                    </figcaption>
                                </figure>
                            </div>
                        @endif

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
