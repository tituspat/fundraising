<!doctype html>
<html lang="en" dir="ltr" class="scroll-smooth focus:scroll-auto">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Meta Tags -->
   <meta name="description" content="This is a page about demo six.">
   <meta name="keywords" content="hexadash, web development, UI components">
   <meta name="author" content="dashboardmarket.com">
   <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   <!-- Title -->
   <title>Dashboard</title>

   <!-- inject:css-->
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/apexcharts.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/datepicker.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/line-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/nouislider.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/quill.snow.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/svgMap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/hexadash/assets/vendor_assets/css/tailwind.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
        @yield('content')
        <!-- End: Main Content -->
    </div>
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

   <script>
    function showTestimonialModal(testimonial, previewUrl, unpreviewUrl, isPreviewed) {
       document.getElementById('testimonialDetail').innerText = testimonial;

       if (isPreviewed) {
          document.getElementById('previewForm').style.display = 'none';
          document.getElementById('unpreviewForm').style.display = 'block';
          document.getElementById('unpreviewForm').action = unpreviewUrl;
       } else {
          document.getElementById('unpreviewForm').style.display = 'none';
          document.getElementById('previewForm').style.display = 'block';
          document.getElementById('previewForm').action = previewUrl;
       }

       document.getElementById('testimonialModal').classList.remove('hidden');
    }

    document.getElementById('closeModal').addEventListener('click', function() {
       document.getElementById('testimonialModal').classList.add('hidden');
    });
 </script>


</body>

</html>
