<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahabat Tabanan</title>
    <!-- Favicon -->
    <link rel="icon" type="icon" href="{{asset('img/logo-sahabat.png')}}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;800;900&display=swap" rel="stylesheet" />
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="{{ asset('vendor/plurk/css/swiper-bundle.min.css') }}" />
    <!-- AOS Animation CSS -->
    <link href="{{ asset('vendor/plurk/css/aos.css') }}" rel="stylesheet" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/plurk/css/style.css') }}" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


</head>
<body>

    <!-- screen loader
    <div class="screen_loader fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="200px"
                height="200px"
                viewBox="0 0 100 100"
                preserveAspectRatio="xMidYMid"
            >
                <circle cx="50" cy="50" r="0" fill="none" stroke="#47bdff" stroke-width="4">
                    <animate
                        attributeName="r"
                        repeatCount="indefinite"
                        dur="1s"
                        values="0;16"
                        keyTimes="0;1"
                        keySplines="0 0.2 0.8 1"
                        calcMode="spline"
                        begin="0s"
                    ></animate>
                    <animate
                        attributeName="opacity"
                        repeatCount="indefinite"
                        dur="1s"
                        values="1;0"
                        keyTimes="0;1"
                        keySplines="0.2 0 0.8 1"
                        calcMode="spline"
                        begin="0s"
                    ></animate>
                </circle>
                <circle cx="50" cy="50" r="0" fill="none" stroke="#b476e5" stroke-width="4">
                    <animate
                        attributeName="r"
                        repeatCount="indefinite"
                        dur="1s"
                        values="0;16"
                        keyTimes="0;1"
                        keySplines="0 0.2 0.8 1"
                        calcMode="spline"
                        begin="-0.5s"
                    ></animate>
                    <animate
                        attributeName="opacity"
                        repeatCount="indefinite"
                        dur="1s"
                        values="1;0"
                        keyTimes="0;1"
                        keySplines="0.2 0 0.8 1"
                        calcMode="spline"
                        begin="-0.5s"
                    ></animate>
                </circle>
            </svg>
    </div> -->

    @yield('content')

    <!-- Return to Top -->
    <button type="button" id="scrollToTopBtn" class="fixed bottom-5 z-10 hidden animate-bounce ltr:right-5 rtl:left-5" onclick="scrollToTop()">
        <div
            class="group flex h-14 w-14 items-center justify-center rounded-full border border-black/20 bg-black text-white transition duration-500 hover:bg-secondary dark:bg-primary dark:hover:bg-secondary"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6 transition group-hover:text-black"
            >
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
</body>

</html>
