<!doctype html>
<html lang="en" dir="ltr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Meta Tags -->
   <meta name="description" content="This is a page about log-in.">
   <meta name="keywords" content="buttons, web development, UI components">
   <meta name="author" content="dashboardmarket.com">

   <!-- Title -->
   <title>Log-in</title>
   <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vendor/hexa/images/favicon.ico')}} ">


   <!-- inject:css-->
   <link rel="stylesheet" href="{{ asset('vendor/hexa/assets/vendor_assets/css/apexcharts.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexa/assets/vendor_assets/css/datepicker.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexa/assets/vendor_assets/css/line-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexa/assets/vendor_assets/css/nouislider.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexa/assets/vendor_assets/css/quill.snow.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexa/assets/vendor_assets/css/svgMap.min.css') }}">
   
   <link rel="stylesheet" href="{{ asset('vendor/hexa/tailwind.css')}}">
   <!-- endinject -->

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
   <!-- Icons -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

</head>

<body class="scrollbar">
   <!-- Main Content -->
   <main class="relative bg-top bg-no-repeat bg-[url('images/admin/admin-bg-light.png')] dark:bg-[url('images/admin/admin-bg-dark.png')] dark:bg-[#1e2836] bg-contain bg-normalBG">


      <!-- Main content container with responsive design -->
      <div class="h-[calc(var(--vh,1vh)_*_100)] w-full overflow-y-auto scrollbar">

         <!-- Login form container -->
         <div class="flex flex-col justify-center w-full max-w-[516px] px-[30px] mx-auto my-[150px]">
            {{--<a href="index.html" class="text-center">
               <!-- Logo for the light theme -->
               <!-- <img src="{{ asset('vendor/hexa/images/logos/logo-dark.png') }}" alt="image" class="inline dark:hidden"> -->
               <!-- Logo for the dark theme -->
               <!-- <img src="{{ asset('vendor/hexa/images/logos/logo-white.png') }}" alt="image" class="hidden dark:inline"> -->
            </a>--}}

            <!-- Login form background -->
            <div class="rounded-6 mt-[25px] shadow-regular dark:shadow-xl bg-white dark:bg-[#111726]">
               <div class="p-[25px] text-center border-b border-regular dark:border-white/[.05] top">
                  <!-- Heading for the login form -->
                  <h2 class="text-18 font-semibold leading-[1] mb-0 text-dark dark:text-title-dark">Login</h2>
               </div>

               <!-- Login form inputs and elements -->
               <div class="py-[30px] px-[40px]">
                  @if($status==="public")
                  <form id="admin-form" method="POST" action="login">
                  @elseif($status==="timses")
                  <form id="admin-form" method="POST" action="t1msuks3s">
                  @endif
                  @csrf

                     <!-- Email Address input -->
                     <div class="mb-6">
                        <label for="email-username" class="text-[14px] w-full leading-[1.4285714286] font-medium text-dark dark:text-gray-300 mb-[8px] capitalize inline-block">Email
                           Address</label>
                        <input type="email" name="email" id="email-username" class="flex items-center shadow-none py-[10px] px-[20px] h-[48px] border-1 border-regular rounded-4 w-full text-[14px] font-normal leading-[1.5] placeholder:text-[#A0A0A0] focus:ring-primary focus:border-primary" placeholder="name@example.com" autocomplete="off" required>
                     </div>

                     <!-- Password input -->
                     <div class="mb-6">
                        <label for="password" class="text-[14px] w-full leading-[1.4285714286] font-medium text-dark dark:text-gray-300 mb-[8px] capitalize inline-block">
                           Password</label>
                        <div class="relative w-full">
                           <div class="absolute inset-y-0 end-0 flex items-center px-[15px]">
                              <input class="hidden js-password-toggle" id="toggle" type="checkbox">
                              <label class=" rounded cursor-pointer text-light text-[15px] js-password-label dark:text-subtitle-dark" for="toggle"><i class="uil uil-eye-slash"></i></label>
                           </div>
                           <input class="flex items-center shadow-none py-[10px] px-[20px] h-[48px] border-1 border-regular rounded-4 w-full text-[14px] font-normal leading-[1.5] placeholder:text-[#A0A0A0] focus:ring-primary focus:border-primary js-password" id="password" type="password" name="password" autocomplete="off" placeholder="Password">
                        </div>
                     </div>

                     <!-- Remember me and forgot password options -->
                     <div class="flex items-center sm:justify-between justify-center max-sm:flex-wrap capitalize mb-[19px] mt-[23px] gap-[15px]">
                        <div class="flex">
                           {{--<div class="flex items-center h-5">
                              <input id="remember" type="checkbox" value="" class="relative ltr:float-left rtl:float-right me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-1 border-solid border-normal outline-none before:pointer-events-none before:absolute before:h-[10px] before:w-[0.5px] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:mt-0 checked:after:ms-[5px] checked:after:block checked:after:h-[10px] checked:after:w-[5px] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] dark:border-box-dark-up dark:checked:border-primary dark:checked:bg-primary after:top-[2px]" required>
                           </div>--}}
                           {{--<label for="remember" class="text-sm text-gray-500 ms-1 dark:text-gray-400">Keep me logged in</label>--}}
                        </div>
                        <!-- <a class="text-13 text-primary hover:text-dark dark:hover:text-title-dark" href="reset.html">Forgot
                           password?</a> -->
                     </div>

                     <!-- Submit button for the login form -->
                     <button type="submit" class="inline-flex items-center justify-center w-full h-[48px] text-14 rounded-6 font-medium bg-primary text-white cursor-pointer hover:bg-primary-hbr border-primary transition duration-300">Masuk</button>
                  </form>

                  <!-- Separator line -->
                  <div class="relative mt-[25px] text-center text-13 text-regular dark:text-white/[87] before:content-[''] before:absolute before:w-full ltr:before:left-0 rtl:before:right-0 before:top-[50%] before:translate-y-[-50%] before:z-[1] before:h-[1px] before:bg-normal before:dark:bg-box-dark-up">
                     <!-- <span class="font-medium px-[15px] inline-block relative z-[2] bg-white dark:bg-[#111625] text-body dark:text-subtitle-dark capitalize">or</span> -->
                  </div>

                  <!-- Social media login buttons -->
                  {{--<div class="mt-[30px] d-flex align-items-center justify-content-center">
                     <ul class="flex flex-wrap justify-center gap-x-[20px] gap-y-[10px]">
                        <li>
                           <button class="bg-google/10 cursor-pointer dark:bg-google duration-300 flex h-[48px] hover:bg-google/20 items-center justify-center rounded-6 text-google dark:text-title-dark transition w-[48px]">
                              <i class="text-current uil uil-google text-22"></i>
                           </button>
                        </li>
                        <li>
                           <button class="bg-facebook/10 cursor-pointer dark:bg-facebook duration-300 flex h-[48px] hover:bg-facebook/20 items-center justify-center rounded-6 text-facebook dark:text-title-dark transition w-[48px]">
                              <i class="text-current uil uil-facebook text-22"></i>
                           </button>
                        </li>
                        <li>
                           <button class="bg-twitter/10 dark:border-box-dark-up dark:border-1 cursor-pointer dark:bg-twitter duration-300 flex h-[48px] hover:bg-twitter/20 items-center justify-center rounded-6 text-twitter dark:text-title-dark transition w-[48px]">
                              <img class="svg" src="{{ asset('vendor/hexa/images/svg/x-twitter.svg') }}" alt="twitter">
                           </button>
                        </li>
                        <li>
                           <button class="bg-github/10 dark:border-box-dark-up dark:border-1 cursor-pointer dark:bg-github duration-300 flex h-[48px] hover:bg-github/20 items-center justify-center rounded-6 text-github dark:text-title-dark transition w-[48px]">
                              <i class="text-current uil uil-github text-22"></i>
                           </button>
                        </li>
                     </ul>
                  </div>--}}
               </div>

               <!-- Footer with signup link -->
               <div class="text-center p-[25px] rounded-b-6 bg-deepBG dark:bg-gray-600">
                  @if($status==="public")
                  <p class="text-[14px] font-medium text-body dark:text-title-dark inline-flex items-center gap-[6px] mb-0">
                     Belum punya akun? <a class="transition duration-300 text-primary hover:text-dark dark:text-dark dark:hover:text-subtitle-dark" href="/register">Daftar</a>
                  </p>
                  @endif
                  
               </div>
            </div>
         </div>
      </div>

      <!-- End of the content block -->

   </main>

   <!-- Dark Mode Button -->

   <div class="dark-single-switch fixed -translate-y-2/4 z-[999] text-white transition-[var(--transition)] m-0 right-[30px] top-[30px]">
      <ul>
         <li>
            <a href="#" class="relative flex items-center justify-center w-10 h-10 leading-[63px] text-3xl text-white bg-dark transition-[0.5s] rounded-[50%] before:content-[''] before:absolute before:w-full before:h-full before:transition-[0.5s] before:z-[-1] before:rounded-[50%] before:scale-90 before:left-0 before:top-0 dark:bg-white dark:before:bg-white active:before:scale-110 dark:text-dark text-[22px] shadow-md dark:shadow-lg">
               <i class="uil uil-moon dark:hidden"></i>
               <i class="hidden uil uil-sun dark:flex dark:text-warning"></i>
            </a>
         </li>
      </ul>
   </div>


   <!-- inject:js-->
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/apexcharts.min.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/datepicker-full.min.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/fslightbox.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/index.global.min.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/mixitup.min.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/moment.min.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/nouislider.min.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/quill.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/svg-pan-zoom.min.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/svgMap.min.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/tw-elements.umd.min.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/vendor_assets/js/yscountdown.min.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/theme_assets/js/apex-custom.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/theme_assets/js/full-calendar.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/theme_assets/js/googlemap-init.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/theme_assets/js/main.js') }}"></script>
   <script src="{{ asset('vendor/hexa/assets/theme_assets/js/svgMapData.js') }}"></script>
   <!-- endinject-->
</body>

</html>