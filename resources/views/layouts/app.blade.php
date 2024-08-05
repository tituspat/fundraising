<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahabat Tabanan</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnH1zN6T/2f+8ZbXfFgFhPzI7/qdoJ8DXz6e8x0rGJPcLlIPKpEPCvRYzS/DX+b5DlVwX+hfA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <!-- CDN Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CDN Swipper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link href="{{ mix('resources/assets/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('resources/assets/js/app.js') }}" defer></script>

    <!-- Favicon -->
    <link rel="icon" type="icon" href="{{mix('resources/assets/images/favicon.png')}}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;800;900&display=swap" rel="stylesheet" />
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="{{mix('resources/assets/css/swiper-bundle.min.css')}}" />
    <!-- AOS Animation CSS -->
    <link href="{{mix('resources/assets/css/aos.css')}}" rel="stylesheet" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{mix('resources/assets/css/style.css')}}" />

   
</head>

<body style="background: white" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div class="font-sans overflow-hidden" id="app">
        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Main content area with padding top -->
        <div class="content">
            @yield('content')
        </div>
    </div>


    
        <!-- Swiper Slider JS -->
        <script src="{{mix('resources/assets/js/swiper-bundle.min.js')}}"></script>
        <!-- Counter Js -->
        <script src="{{mix('resources/assets/js/vanilla-counter.js')}}"></script>
        <!-- AOS Animation JS -->
        <script src="{{mix('resources/assets/js/aos.js')}}"></script>
        <!-- Custom Js -->
        <script src="{{mix('resources/assets/js/custom.js')}}"></script>
</body>

</html>
