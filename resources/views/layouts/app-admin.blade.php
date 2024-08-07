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
   <!-- endinject -->

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
   <!-- Icons -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body class=" bg-white [&.dark]:bg-main-dark font-jost relative text-[15px] font-normal leading-[1.5] m-0 p-0">

    @yield('content')

    <!-- Swiper Slider JS -->
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <!-- Counter Js -->
    <script src="{{asset('js/vanilla-counter.js')}}"></script>
    <!-- AOS Animation JS -->
    <script src="{{asset('js/aos.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('js/custom.js')}}"></script>

</body>
</html>