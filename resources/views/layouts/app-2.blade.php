<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <!-- <meta name="description" content="Turut berkontribusi mewujudkan Tabanan yang sejahtera bersama SAHABAT Tabanan.">
    <meta property="og:title" content="I Gede Putu Atma Giri | Sahabat Tabanan">
    <meta property="og:description"
        content="Turut berkontribusi mewujudkan Tabanan yang sejahtera bersama SAHABAT Tabanan."> -->
    <title>Sahabat Tabanan</title>
    <!-- Favicon -->
    <link rel="icon" type="icon" href="{{ asset('img/logo-sahabat-tabanan.png') }}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="{{ asset('vendor/plurk/css/swiper-bundle.min.css') }}" />
    <!-- AOS Animation CSS -->
    <link href="{{ asset('vendor/plurk/css/aos.css') }}" rel="stylesheet" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/plurk/css/style.css') }}" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


</head>

<body class="overflow-x-hidden">

    @yield('content')

    <!-- Return to Top -->
    <button type="button" id="scrollToTopBtn" class="fixed bottom-5 z-10 hidden animate-bounce ltr:right-5 rtl:left-5"
        onclick="scrollToTop()">
        <div
            class="group flex h-14 w-14 items-center justify-center rounded-full border border-black/20 bg-black text-white transition duration-500 hover:bg-secondary dark:bg-primary dark:hover:bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6 transition group-hover:text-black">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            </svg>
        </div>
    </button>

    <!-- Swiper Slider JS -->
    <script src="{{ asset('vendor/plurk/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter Js -->
    <script src="{{ asset('vendor/plurk/js/vanilla-counter.js') }}"></script>
    <!-- AOS Animation JS -->
    <script src="{{ asset('vendor/plurk/js/aos.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('vendor/plurk/js/custom.js') }}"></script>

    <!-- accordion -->
    <script src="{{ asset('vendor/plurk/js/accordion.min.js') }}"></script>
    {{-- <script src="assets/js/accordion.min.js"></script> --}}


    <script>
        // Offices Location Slider
        var swiper = new Swiper('.ofc-slider', {
            slidesPerView: 'auto',
            loop: true,
            spaceBetween: 30,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.ofc-slider-button-next',
                prevEl: '.ofc-slider-button-prev',
            },
        });

        // Project Slider
        var swiper = new Swiper('.project-slider', {
            loop: false,
            slidesPerView: 'auto',
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.project-slider-button-next',
                prevEl: '.project-slider-button-prev',
            },
            breakpoints: {
                600: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1000: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            },
        });
        const acc = new Accordion('.accordion-container');
        acc.open(0);
    </script>
</body>

</html>
