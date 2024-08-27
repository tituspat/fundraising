@extends('layouts.dashboard.app')


@section('content')

	<link rel="stylesheet" href="{{asset('assets/vendor/ckeditor5.css')}}">
	<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
    <!-- Main Content -->
	<main class="bg-normalBG dark:bg-main-dark">
        <div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">

            <div class="grid grid-cols-12 gap-5">
               	<div class="col-span-12">

                  	<!-- Breadcrumb Section -->
                  	<div class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                     	<!-- Title -->
                     	<h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Blog</h4>
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
                              	   		<span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">editors</span>
                              		</li>
                           		</ol>
                        	</nav>
                     	</div>
                  	</div>

               	</div>
            </div>
			<!-- Left side: Image and upload button -->
			<!-- form start -->
			<form action="{{ route(Auth::user()->role . '.blog.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="col-span-12 md:col-span-4">
                <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                    <div class="p-[25px]">
                        

						<div class="my-4">
							<label for="titleVertical" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Judul Blog</label>
							<input type="text" id="nameVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="title" placeholder="Judul Blog" required>
                        </div>

						<div class="col-span-12 mb-[30px] my-4">
							<div class="editor-container editor-container_classic-editor" id="editor-container">
								<div class="editor-container__editor"><textarea name="content" id="editor">...</textarea></div>
							</div>
						</div>

						<div class="flex items-center gap-[15px] mt-[14px]">
                              <button type="button" class="px-[30px] h-[44px] text-body dark:text-subtitle-dark bg-regular dark:bg-box-dark-up border-regular dark:border-box-dark-up font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear hover:opacity-60" data-te-ripple-init="" data-te-ripple-color="dark" onclick="window.location='{{ URL::to(Auth::user()->role . '/program') }}'">Cancel</button>
                              <button type="submit" class="px-[30px] h-[44px] text-white bg-primary border-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear" data-te-ripple-init="" data-te-ripple-color="light">save</button>
                        </div>
            		
                    </div>
                </div>
				
            </div>
			</form>
            
         
		<!-- form end -->
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

		<script type="importmap">
		{
			"imports": {
				"ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
				"ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
			}
		}
		</script>
		<script type="module" src="{{asset('assets/vendor/ckeditor5.js')}}"></script>
    <!-- End: Customizing option -->


@endsection