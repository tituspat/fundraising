@extends('layouts.app-2')

@section('content')
    <!-- screen loader -->
    <div class="screen_loader fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px"
            viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <circle cx="50" cy="50" r="0" fill="none" stroke="#47bdff" stroke-width="4">
                <animate attributeName="r" repeatCount="indefinite" dur="1s" values="0;16" keyTimes="0;1"
                    keySplines="0 0.2 0.8 1" calcMode="spline" begin="0s"></animate>
                <animate attributeName="opacity" repeatCount="indefinite" dur="1s" values="1;0" keyTimes="0;1"
                    keySplines="0.2 0 0.8 1" calcMode="spline" begin="0s"></animate>
            </circle>
            <circle cx="50" cy="50" r="0" fill="none" stroke="#b476e5" stroke-width="4">
                <animate attributeName="r" repeatCount="indefinite" dur="1s" values="0;16" keyTimes="0;1"
                    keySplines="0 0.2 0.8 1" calcMode="spline" begin="-0.5s"></animate>
                <animate attributeName="opacity" repeatCount="indefinite" dur="1s" values="1;0" keyTimes="0;1"
                    keySplines="0.2 0 0.8 1" calcMode="spline" begin="-0.5s"></animate>
            </circle>
        </svg>
    </div>

    <div
        class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent">
        @include('layouts.navbar-2')
        {{-- <header id="top-header" class="sticky top-0 z-50 bg-black/10 transition duration-300">
                <div class="container">
                    <div class="relative flex items-center justify-between py-5 lg:py-0">
                        <a href="index.html"><img src="{{ asset('vendor/plurk/images/logo.png')}}" alt="logo" class="h-10" /></a>
                        <div class="flex items-center">
                            <div onclick="toggleMenu()" class="overlay fixed inset-0 z-[51] hidden bg-black/60 lg:hidden"></div>
                            <div class="menus">
                                <div class="border-b border-gray/10 ltr:text-right rtl:text-left lg:hidden">
                                    <button onclick="toggleMenu()" type="button" class="p-4">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6 text-black dark:text-white"
                                        >
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="group relative">
                                        <a href="javascript:;" class="active">
                                            Landing
                                            <div class="group-hover:rotate-180 ltr:ml-2 rtl:mr-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 9L12 15L10.25 13.5M5 9L7.33333 11"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="submenu">
                                            <a href="crypto.html">Crypto Currency</a>
                                            <a href="modern-saas.html">Modern Saas </a>
                                            <a href="real-estate.html">Real Estate </a>
                                            <a href="healthcare.html">Health Care </a>
                                            <a href="marketing.html">Sales Marketing </a>
                                            <a href="application.html">Application </a>
                                            <a href="hotel-resort.html">Hotel & Resort </a>
                                            <a href="nft.html">NFT Marketplace </a>
                                            <a href="online-courses.html"> Online Courses </a>
                                            <a href="restaurant.html"> Restaurant </a>
                                            <a href="consulting.html"> Consulting </a>
                                            <a href="creative-agency.html"> Creative Agency </a>
                                            <a href="insurance.html"> Insurance </a>
                                            <a href="photography.html"> Photography </a>
                                            <a href="construction.html"> Construction </a>
                                            <a href="blog-landing.html"> Blog </a>
                                            <a href="event-concert.html">
                                                Event Concert
                                                <span
                                                    class="ml-1 whitespace-nowrap rounded bg-gradient-to-r from-[#ef4444] to-[#f97316] px-1.5 py-0.5 text-[10px] font-bold uppercase text-white"
                                                >
                                                    New
                                                </span>
                                            </a>
                                            <a href="gym.html">
                                                GYM
                                                <span
                                                    class="ml-1 whitespace-nowrap rounded bg-gradient-to-r from-[#ef4444] to-[#f97316] px-1.5 py-0.5 text-[10px] font-bold uppercase text-white"
                                                >
                                                    New
                                                </span>
                                            </a>
                                            <a href="job-placement.html">
                                                Job Placement
                                                <span
                                                    class="ml-1 whitespace-nowrap rounded bg-gradient-to-r from-[#ef4444] to-[#f97316] px-1.5 py-0.5 text-[10px] font-bold uppercase text-white"
                                                >
                                                    New
                                                </span>
                                            </a>
                                            <a href="online-payments.html">
                                                Online Payments
                                                <span
                                                    class="ml-1 whitespace-nowrap rounded bg-gradient-to-r from-[#ef4444] to-[#f97316] px-1.5 py-0.5 text-[10px] font-bold uppercase text-white"
                                                >
                                                    New
                                                </span>
                                            </a>
                                            <a href="personal-portfolio.html" class="active">
                                                Personal Portfolio
                                                <span
                                                    class="ml-1 whitespace-nowrap rounded bg-gradient-to-r from-[#ef4444] to-[#f97316] px-1.5 py-0.5 text-[10px] font-bold uppercase text-white"
                                                >
                                                    New
                                                </span>
                                            </a>
                                            <a href="portfolio-landing.html">
                                                Portfolio
                                                <span
                                                    class="ml-1 whitespace-nowrap rounded bg-gradient-to-r from-[#ef4444] to-[#f97316] px-1.5 py-0.5 text-[10px] font-bold uppercase text-white"
                                                >
                                                    New
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="portfolio.html">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="services.html">Service</a>
                                    </li>
                                    <li>
                                        <a href="team.html">Team</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="career.html">Career</a>
                                    </li>
                                    <li
                                        class="relative hidden items-center before:absolute before:top-1/2 before:h-[30px] before:w-[2px] before:-translate-y-1/2 before:bg-gray/30 ltr:pl-9 ltr:before:-left-[2px] rtl:pr-9 rtl:before:-right-[2px] lg:inline-flex"
                                    >
                                        <button type="button" onclick="search()" class="text-white hover:text-primary">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.7363 17.4637L14.6512 13.3785C15.6799 12.0753 16.3 10.4347 16.3 8.65C16.3 4.4317 12.8683 1 8.65 1C4.4317 1 1 4.4317 1 8.65C1 12.8683 4.4317 16.3 8.65 16.3C10.4356 16.3 12.0754 15.6808 13.3786 14.6512L17.4637 18.7363C17.6392 18.9118 17.8696 19 18.1 19C18.3304 19 18.5608 18.9118 18.7363 18.7363C19.0882 18.3844 19.0882 17.8156 18.7363 17.4637ZM2.8 8.65C2.8 5.4244 5.4244 2.8 8.65 2.8C11.8756 2.8 14.5 5.4244 14.5 8.65C14.5 11.8756 11.8756 14.5 8.65 14.5C5.4244 14.5 2.8 11.8756 2.8 8.65Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                        </button>
                                    </li>
                                    <li
                                        class="search-bar absolute hidden w-0 overflow-hidden bg-black transition-all duration-500 ltr:right-0 rtl:left-0 lg:block"
                                    >
                                        <form action="" class="relative">
                                            <input
                                                type="text"
                                                placeholder="Search"
                                                class="w-full border-b border-white bg-transparent py-1 outline-none ltr:pl-2 ltr:pr-8 rtl:pr-2 rtl:pl-8"
                                            />
                                            <button
                                                type="button"
                                                class="absolute top-1/2 -translate-y-1/2 hover:text-primary ltr:right-0 rtl:left-0"
                                                onclick="search()"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.5"
                                                    stroke="currentColor"
                                                    class="h-6 w-6"
                                                >
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <ul class="flex items-center gap-5 ltr:pr-5 rtl:pl-5 ltr:lg:pl-5 ltr:lg:pr-0 rtl:lg:pr-5 rtl:lg:pl-0">
                                <li>
                                    <button
                                        type="button"
                                        class="flex h-5 w-5 items-center text-white hover:text-primary rtl:text-primary"
                                        onclick="toggleDirection()"
                                    >
                                        <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 18.9439H7.72074"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M13.8571 21L16 18.9439L13.8571 16.8879"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M1 16.4206H9.27926"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M3.14287 18.4766L1 16.4206L3.14287 14.3645"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M12.7855 1H5.82118C4.82662 1 3.87279 1.37909 3.16952 2.05387C2.46626 2.72865 2.07117 3.64385 2.07117 4.59813C2.07117 5.55242 2.46626 6.46761 3.16952 7.14239C3.87279 7.81717 4.82662 8.19626 5.82118 8.19626H6.3569"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M10.6426 12.3084V1"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M6.3573 12.3084V1"
                                                stroke="currentColor"
                                                stroke-width="1.4"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button
                                        type="button"
                                        class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-dark text-white hover:text-primary"
                                        onclick="toggleTheme()"
                                    >
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="dark-mode-btn">
                                            <path
                                                d="M8 4C8 8.4 11.6 12 16 12C17.4 12 18.8 11.6 20 11C19.5 16.1 15.2 20 10 20C4.5 20 0 15.5 0 10C0 4.8 4 0.5 9 0C8.4 1.2 8 2.6 8 4ZM2 10C2 14.4 5.6 18 10 18C12.9 18 15.5 16.5 17 14C16.7 14 16.4 14 16 14C10.5 14 6 9.5 6 4C6 3.7 6 3.4 6 3C3.6 4.4 2 7.1 2 10Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <svg
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="light-mode-btn hidden"
                                        >
                                            <path
                                                d="M10 15C8.67392 15 7.40215 14.4732 6.46447 13.5355C5.52678 12.5979 5 11.3261 5 10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5C11.3261 5 12.5979 5.52678 13.5355 6.46447C14.4732 7.40215 15 8.67392 15 10C15 11.3261 14.4732 12.5979 13.5355 13.5355C12.5979 14.4732 11.3261 15 10 15ZM10 13.3333C10.8841 13.3333 11.7319 12.9821 12.357 12.357C12.9821 11.7319 13.3333 10.8841 13.3333 10C13.3333 9.11595 12.9821 8.2681 12.357 7.64298C11.7319 7.01786 10.8841 6.66667 10 6.66667C9.11595 6.66667 8.2681 7.01786 7.64298 7.64298C7.01786 8.2681 6.66667 9.11595 6.66667 10C6.66667 10.8841 7.01786 11.7319 7.64298 12.357C8.2681 12.9821 9.11595 13.3333 10 13.3333Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M9.09091 0.909092C9.09091 0.407014 9.49792 0 10 0C10.5021 0 10.9091 0.407014 10.9091 0.909092V1.81818C10.9091 2.32026 10.5021 2.72727 10 2.72727C9.49792 2.72727 9.09091 2.32026 9.09091 1.81818V0.909092ZM9.09091 18.1818C9.09091 17.6797 9.49792 17.2727 10 17.2727C10.5021 17.2727 10.9091 17.6797 10.9091 18.1818V19.0909C10.9091 19.593 10.5021 20 10 20C9.49792 20 9.09091 19.593 9.09091 19.0909V18.1818ZM2.92909 4.21455C2.57412 3.85958 2.57412 3.28406 2.92909 2.92909C3.28406 2.57412 3.85958 2.57412 4.21455 2.92909L4.85727 3.57182C5.21224 3.92679 5.21224 4.5023 4.85727 4.85727C4.5023 5.21224 3.92679 5.21224 3.57182 4.85727L2.92909 4.21455ZM15.1427 16.4282C14.7878 16.0732 14.7878 15.4977 15.1427 15.1427C15.4977 14.7878 16.0732 14.7878 16.4282 15.1427L17.0709 15.7855C17.4259 16.1404 17.4259 16.7159 17.0709 17.0709C16.7159 17.4259 16.1404 17.4259 15.7855 17.0709L15.1427 16.4282ZM15.7851 2.92886C16.1402 2.57358 16.7161 2.57361 17.0712 2.92894C17.4261 3.28403 17.4259 3.85951 17.071 4.21447L16.4283 4.8572C16.0732 5.21221 15.4977 5.21221 15.1427 4.8572C14.7877 4.50225 14.7876 3.92678 15.1425 3.57174L15.7851 2.92886ZM3.57182 15.1427C3.92679 14.7878 4.5023 14.7878 4.85727 15.1427C5.21224 15.4977 5.21224 16.0732 4.85727 16.4282L4.21455 17.0709C3.85958 17.4259 3.28406 17.4259 2.92909 17.0709C2.57412 16.7159 2.57412 16.1404 2.92909 15.7855L3.57182 15.1427ZM19.0909 9.09091C19.593 9.09091 20 9.49792 20 10C20 10.5021 19.593 10.9091 19.0909 10.9091H18.1818C17.6797 10.9091 17.2727 10.5021 17.2727 10C17.2727 9.49792 17.6797 9.09091 18.1818 9.09091H19.0909ZM1.81818 9.09091C2.32026 9.09091 2.72727 9.49792 2.72727 10C2.72727 10.5021 2.32026 10.9091 1.81818 10.9091H0.909092C0.407014 10.9091 0 10.5021 0 10C0 9.49792 0.407014 9.09091 0.909092 9.09091H1.81818Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                            <button type="button" class="flex h-10 w-10 items-center justify-center rounded-full bg-primary lg:hidden" onclick="toggleMenu()">
                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white">
                                    <path
                                        d="M2 15H11C11.552 15 12 15.447 12 16C12 16.553 11.552 17 11 17H2C1.448 17 1 16.553 1 16C1 15.447 1.448 15 2 15Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M2 8H20C20.552 8 21 8.447 21 9C21 9.553 20.552 10 20 10H2C1.448 10 1 9.553 1 9C1 8.447 1.448 8 2 8Z"
                                        fill="currentColor"
                                    />
                                    <path
                                        d="M21 2C21 1.447 20.552 1 20 1H7C6.448 1 6 1.447 6 2C6 2.553 6.448 3 7 3H20C20.552 3 21 2.553 21 2Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </header> --}}

        <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
            <div class="bg-black pt-[82px] lg:overflow-hidden lg:pt-[106px]">
                <div class="bg-[url(../img/bali-bg.jpg)] bg-cover bg-no-repeat pt-14 lg:pt-20"
                    style="background-image:url(../img/bali-bg-2.jpg) ">
                    {{-- <div class="bg-[url(../images/overlay-noise.png)] bg-cover bg-no-repeat pt-14 lg:pt-20"> --}}
                    <div class="container">
                        <div class="relative">
                            <div class="text-center lg:w-2/3 lg:ltr:text-left lg:rtl:text-right">
                                {{-- <div class="mx-auto mb-5 flex h-[100px] max-w-[255px] items-center lg:float-left lg:mr-7 lg:mb-0">
                                        <img src="{{ asset('vendor/plurk/images/personal-portfolio/website-apps.png')}}" alt="" class="w-full" />
                                    </div> --}}
                                <h2
                                    class="relative text-3xl font-black text-white sm:text-5xl lg:text-[80px] lg:leading-[100px]">
                                    Halo, Sahabat Tabanan!
                                    <svg width="59" height="107" viewBox="0 0 59 107" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="absolute bottom-5 ltr:-left-8 rtl:-right-8 rtl:rotate-y-180">
                                        <path opacity="0.1"
                                            d="M2.99181 104.456C0.123358 63.6362 48.4681 6.12462 55.7077 39.4953C60.866 63.2729 24.484 67.2303 15.4891 1.9999"
                                            stroke="url(#paint0_linear_1479_14247)" stroke-width="4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1479_14247" x1="17" y1="113"
                                                x2="17" y2="2" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="white" stop-opacity="0" />
                                                <stop offset="1" stop-color="white" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </h2>
                            </div>
                            {{-- <div class="relative py-10 text-white md:py-16 lg:max-w-[330px]">
                                    <input
                                        type="text"
                                        placeholder="Enter your email"
                                        class="w-full bg-secondary/10 py-6 pl-7 pr-32 text-left placeholder:font-bold placeholder:text-white focus-within:outline-none"
                                    />
                                    <button
                                        type="button"
                                        class="absolute right-2.5 top-1/2 -translate-y-1/2 bg-secondary py-3 px-5 text-lg font-extrabold transition hover:bg-primary"
                                    >
                                        Join us
                                    </button>
                                </div> --}}
                            <div
                                class="grid gap-y-10 gap-x-6 py-14 text-sm font-extrabold sm:grid-cols-3 lg:max-w-[490px] lg:py-24">
                                {{-- <div class="text-center">
                                        <img src="{{ asset('vendor/plurk/images/personal-portfolio/logo-1.svg')}}" alt="" class="mx-auto mb-4" />
                                        <p>Awarded as Best Design & Creative</p>
                                    </div>
                                    <div class="text-center">
                                        <img src="{{ asset('vendor/plurk/images/personal-portfolio/logo-2.svg')}}" alt="" class="mx-auto mb-4" />
                                        <p>Top-1 Trending Team on Dribbble</p>
                                    </div>
                                    <div class="text-center">
                                        <img src="{{ asset('vendor/plurk/images/personal-portfolio/logo-3.svg')}}" alt="" class="mx-auto mb-4" />
                                        <p>Top User Experience Agency</p>
                                    </div> --}}
                            </div>
                            <div
                                class="absolute bottom-0 hidden w-7/12 ltr:-right-40 rtl:-left-40 rtl:rotate-y-180 lg:block">
                                <img src="{{ asset('vendor/plurk/images/personal-portfolio/women-banner.png') }}"
                                    alt="" class="w-full" data-aos="fade-up" data-aos-duration="1000" />
                                <div class="absolute top-[32%] left-4">
                                    <img src="{{ asset('img/logo-sahabat-tabanan.png') }}" alt=""
                                        class="rounded-full absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" />
                                    <img src="{{ asset('img/sahabat-text-bg.png') }}" alt=""
                                        class="h-[100px] opacity-50 animate-spin-slow" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="overflow-x-hidden bg-white py-14 dark:bg-gray-dark">
                <div class="container">
                    <div class="items-center lg:flex">
                        <h2
                            class="flex-none border-gray/20 text-center text-xl font-black uppercase text-black dark:text-white lg:ltr:mr-12 lg:ltr:border-r-[3px] lg:ltr:pr-12 lg:ltr:text-left lg:rtl:ml-12 lg:rtl:border-l-[3px] lg:rtl:pl-12 lg:rtl:text-right">
                            Kegiatan Terkini
                        </h2>
                        <div class="swiper logo-slider mt-10 flex-1 lg:mt-0 xl:w-[1200px] xl:flex-none overflow-hidden">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-[150px]">
                                    <div>
                                        <img src="{{ asset('img/program/program-1.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide h-[150px]">
                                    <div>
                                        <img src="{{ asset('img/program/program-2.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide h-[150px]">
                                    <div>
                                        <img src="{{ asset('img/program/program-3.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide h-[150px]">
                                    <div>
                                        <img src="{{ asset('img/program/program-beras.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide h-[150px]">
                                    <div>
                                        <img src="{{ asset('img/program/program-beras2.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide h-[150px]">
                                    <div>
                                        <img src="{{ asset('img/program/program-peternakan.jpg') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="bg-gradient-to-t from-white/50 to-transparent py-14 dark:bg-none md:py-20">
                <div class="container">
                    <div class="grid items-center gap-y-16 gap-x-8 lg:grid-cols-2">
                        <div class="relative">
                            <img src="{{ asset('vendor/plurk/images/personal-portfolio/about-block.pn') }}" alt=""
                                class="absolute top-8 hidden ltr:-left-16 rtl:-right-16 dark:hidden md:block"
                                data-aos="fade-right" data-aos-duration="1000" />
                            <img src="{{ asset('img/calon.png') }}" alt="" class="h-full w-full object-cover"
                                style="background-color: burlywood" />
                            {{-- <img
                                    src="{{ asset('img/logo-sahabat-tabanan.png')}}"
                                    alt=""
                                    class="absolute h-[100px] w-[100px] -bottom-10 ltr:-left-10 rtl:-right-10 "
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                /> --}}
                        </div>
                        <div>
                            <div class="mb-2">
                                <h6 class="mb-4 text-lg font-extrabold uppercase text-secondary"><span
                                        class="text-primary">/</span> Salam Sahabat Tabanan</h6>
                                <h2 class="text-3xl font-black leading-normal text-black dark:text-white md:text-[40px]">
                                    I Gede Putu Atma Giri
                                </h2>
                            </div>
                            <p class="text-lg font-medium">
                                Salam sejahtera, Om Swastiastu, Namo Buddhaya, Salam Kebajikan, saya Giri. Berdasarkan
                                pengalaman hidup dan kerja saya, saya ingin berkontribusi lebih dalam memajukan dan
                                meningkatkan kesejahteraan masyarakat di wilayah Kabupaten Tabanan, Bali.
                            </p>
                            {{-- <div class="my-6 grid gap-4 text-lg font-bold text-black dark:text-white sm:mt-12 sm:mb-8 sm:grid-cols-2">
                                    <div class="flex items-center gap-3">
                                        <h2 class="text-4xl font-black text-primary md:text-7xl">12</h2>
                                        <p>Years of experience</p>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <h2 class="text-4xl font-black text-secondary md:text-7xl">150</h2>
                                        <p>Successful projects</p>
                                    </div>
                                </div> --}}
                            <p class="text-lg font-medium">
                                Saya percaya bahwa dengan kerja keras, ketulusan hati, dan komitmen yang kuat, saya dapat
                                membawa perubahan yang positif bagi masyarakat di Kabupaten Tabanan. Saya sangat
                                mengharapkan dukungan dan doa dari seluruh masyarakat agar saya dapat terpilih dan
                                mewujudkan visi dan misi yang telah saya tetapkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="bg-gradient-to-t from-white/50 to-transparent py-5 dark:bg-none md:py-10">
                {{-- <div
                        class="absolute top-0 z-[1] h-full w-full bg-white ltr:left-0 rtl:right-0 dark:bg-black xl:w-[85%] xl:rounded-r-[32px]">
                    </div> --}}
                {{-- <div
                        class="absolute -top-3 hidden h-full w-full rounded-r-[32px] bg-white/50 ltr:left-3 rtl:right-3 dark:bg-gray-dark xl:inline-block xl:w-[85%]">
                    </div> --}

                    {{-- <div
                        class="absolute hidden h-full w-full rounded-r-[32px] rounded-l-[32px] bg-white/50 ltr:left-3 rtl:right-3 dark:bg-gray-dark xl:inline-block xl:w-[100%]">
                    </div> --}}
                <div class="flex flex-col px-10 pb-10 justify-center items-center">
                    <div>
                        <div class="heading mb-10 text-center">
                            <h4>Visi & Misi</h4>

                        </div>
                        <div class="heading text-center">
                            <h6>Visi</h6>
                            <p class="text-black dark:text-white text-center text-lg font-semibold leading-[30px] ">
                                Terwujudnya masyarakat Tabanan yang SAHABAT <br>(Sinergi, Andal, Humanis,
                                Antikorupsi,
                                Amanah, dan Terpercaya)
                            </p>
                            <h6 class="mt-10">Misi</h6>
                        </div>
                    </div>
                    <div class="flex flex-wrap justify-center items-start gap-[30px]">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="flex flex-col w-[200px] h-[200px] items-center justify-start gap-[10px] rounded-[10px] border border-transparent bg-secondary/10 py-6 px-5 transition hover:border-secondary hover:bg-transparent">
                                <span
                                    class="flex h-[50px] w-[50px] min-w-[50px] items-center justify-center rounded-full bg-secondary text-lg text-white">01</span>
                                <div>
                                    {{-- <h6 class="mb-1 font-bold text-secondary">Collect Ideas</h6> --}}
                                    <p class="text-sm text-center dark:text-white font-semibold text-black">
                                        Memaksimalkan setiap potensi perekonomian masyarakat Tabanan menjadi lebih
                                        produktif dan berdaya saing
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="flex flex-col w-[200px] h-[200px] items-center justify-start gap-[10px] rounded-[10px] border border-transparent bg-secondary/10 py-6 px-5 transition hover:border-secondary hover:bg-transparent">
                                <span
                                    class="flex h-[50px] w-[50px] min-w-[50px] items-center justify-center rounded-full bg-secondary text-lg text-white">02</span>
                                <div>
                                    {{-- <h6 class="mb-1 font-bold text-secondary">Collect Ideas</h6> --}}
                                    <p class="text-sm text-center font-semibold text-black dark:text-white">
                                        Meningkatkan sarana dan prasarana umum
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="flex flex-col w-[200px] h-[200px] items-center justify-start gap-[10px] rounded-[10px] border border-transparent bg-secondary/10 py-6 px-5 transition hover:border-secondary hover:bg-transparent">
                                <span
                                    class="flex h-[50px] w-[50px] min-w-[50px] items-center justify-center rounded-full bg-secondary text-lg text-white">03</span>
                                <div>
                                    {{-- <h6 class="mb-1 font-bold text-secondary">Collect Ideas</h6> --}}
                                    <p class="text-sm text-center font-semibold text-black dark:text-white">
                                        Mendukung kegiatan prestasi masyarakat Tabanan
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="flex flex-col w-[200px] h-[200px] items-center justify-start gap-[10px] rounded-[10px] border border-transparent bg-secondary/10 py-6 px-5 transition hover:border-secondary hover:bg-transparent">
                                <span
                                    class="flex h-[50px] w-[50px] min-w-[50px] items-center justify-center rounded-full bg-secondary text-lg text-white">04</span>
                                <div>
                                    {{-- <h6 class="mb-1 font-bold text-secondary">Data Analysis</h6> --}}
                                    <p class="text-sm text-center font-semibold text-black dark:text-white">
                                        Meningkatkan dukungan terhadap kegiatan keagamaan
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="flex flex-col w-[200px] h-[200px] items-center justify-start gap-[10px] rounded-[10px] border border-transparent bg-secondary/10 py-6 px-5 transition hover:border-secondary hover:bg-transparent">
                                <span
                                    class="flex h-[50px] w-[50px] min-w-[50px] items-center justify-center rounded-full bg-secondary text-lg text-white">05</span>
                                <div>
                                    {{-- <h6 class="mb-1 font-bold text-secondary">Finalize Product</h6> --}}
                                    <p class="text-sm text-center font-semibold text-black dark:text-white">
                                        Memberikan pelayanan yang berkualitas
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white py-14 dark:bg-gray-dark md:py-20">
                <div class="container">
                    <div
                        class="grid rounded-[10px] border-[2px] border-secondary/20 text-center font-semibold text-black dark:text-white sm:grid-cols-3 sm:ltr:text-left sm:rtl:text-right lg:text-xl">
                        <div class="px-5 py-8 md:py-10 md:px-12">
                            <h3 class="mb-4 text-[40px] font-extrabold text-primary" data-vanilla-counter
                                data-start-at="0" data-end-at="5" data-time="2000" data-delay="0" data-format="{}+">
                            </h3>
                            <h6>Program Kerja</h6>
                        </div>
                        <div class="bg-secondary/10 px-5 py-8 md:py-10 md:px-12">
                            <h3 class="mb-4 text-[40px] font-extrabold text-secondary" data-vanilla-counter
                                data-start-at="0" data-end-at="255" data-time="3000" data-delay="0" data-format="{}+">
                            </h3>
                            <h6>Vote</h6>
                        </div>
                        <div class="px-5 py-8 md:py-10 md:px-12">
                            <h3 class="mb-4 text-[40px] font-extrabold text-primary" data-vanilla-counter
                                data-start-at="0" data-end-at="255" data-time="4000" data-delay="0" data-format="{}+">
                            </h3>
                            <h6>Pendukung</h6>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="relative overflow-x-hidden bg-gradient-to-t from-white/50 to-transparent py-14 dark:from-white/[0.02] md:py-20">
                <div class="absolute inset-x-0 top-0 h-[580px] bg-black">
                    <img src="{{ asset('vendor/plurk/images/personal-portfolio/star-icon.svg') }}" alt=""
                        class="absolute top-0 ltr:left-0 rtl:right-0 rtl:rotate-y-180" data-aos="fade-down"
                        data-aos-duration="1000" />
                </div>
                <div class="container relative z-[1]">
                    <div class="mb-10 max-w-[410px]">
                        <div class="mb-5 flex items-center gap-10">
                            <h6 class="text-lg font-extrabold uppercase text-secondary"><span
                                    class="text-primary">/</span> Program Kerja</h6>
                            <div class="flex gap-2.5">
                                <button type="button"
                                    class="portfolio-slider-button-prev flex h-8 w-8 items-center justify-center bg-white/10 text-white duration-200 after:hidden hover:bg-white/20 hover:text-black">
                                    <svg width="9" height="18" viewBox="0 0 9 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="rtl:rotate-180">
                                        <path d="M7 16L1 9L2.5 7.25M7 2L5 4.33333" stroke="currentcolor" stroke-width="2"
                                            stroke-linecap="square" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <button type="button"
                                    class="portfolio-slider-button-next flex h-8 w-8 items-center justify-center bg-white/10 text-white duration-200 after:hidden hover:bg-white/20 hover:text-black">
                                    <svg width="9" height="18" viewBox="0 0 9 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="rtl:rotate-180">
                                        <path d="M2 2L4 4.33333M2 16L8 9L6.5 7.25" stroke="currentcolor" stroke-width="2"
                                            stroke-linecap="square" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <h2 class="text-3xl font-black leading-normal text-white md:text-[40px]">Program Kerja Sahabat
                            Tabanan </h2>
                    </div>
                    <div class="swiper portfolio-slider xl:w-[1680px]">
                        <div class="swiper-wrapper">
                            @foreach($programs as $program)
                            <div class="swiper-slide">
                                <div class="bg-white dark:bg-gray-dark">
                                    <div class="h-72 md:h-96">
                                        <img src="{{ asset($program->gambar) }}" alt=""
                                            class="h-full w-full object-cover" />
                                    </div>
                                    <div class="flex items-center justify-between gap-2 p-4 md:p-7">
                                        <div class="font-extrabold">
                                            <h6
                                                class="tex-md bg-gradient-to-r from-secondary to-primary bg-clip-text uppercase tracking-[10px] text-transparent">
                                                {{$program->title}}
                                            </h6>
                                            {{--<h4 class="py-4 text-sm text-black dark:text-white line-clamp-2 overflow-hidden">
                                                {{$program->description}}
                                            </h4>--}}
                                            <a href="javascript:"
                                                class="group flex items-center gap-4 font-semibold transition hover:text-secondary">
                                                <span>Baca Selengkapnya</span>
                                                <span class="transition-all group-hover:pl-2">
                                                    <svg width="18" height="12" viewBox="0 0 18 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 6.75H0V5.25H12V0L18 6L12 12V6.75Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        {{-- <div class="flex items-center gap-3 md:gap-7">
                                                <div class="w-5 md:w-8">
                                                    <img src="{{ asset('vendor/plurk/images/personal-portfolio/sketch-icon.svg')}}" alt="" class="w-full" />
                                                </div>
                                                <div class="w-5 md:w-8">
                                                    <img src="{{ asset('vendor/plurk/images/personal-portfolio/figma-icon.svg')}}" alt="" class="w-full" />
                                                </div>
                                            </div> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            {{--<section class="bg-gradient-to-t from-white/50 to-transparent py-14 dark:from-white/[0.02] md:py-20">
                <div class="container">
                    <div class="relative">
                        <div class="grid-cols-2 items-center justify-between gap-8 lg:grid lg:flex-row">
                            <div class="relative mx-auto w-full bg-white dark:bg-gray-dark">
                                <div class="swiper feedback-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="flex justify-between gap-7 p-4 md:p-7">
                                                <div class="flex items-center gap-2.5">
                                                    <div
                                                        class="flex h-14 w-14 items-end justify-center overflow-hidden rounded-full bg-gradient-to-t from-[rgba(125,132,150,0.1)] to-[125,132,150]"
                                                    >
                                                        <img src="{{ asset('vendor/plurk/images/personal-portfolio/founder-avatar.png')}}" alt="" class="h-full w-full" />
                                                    </div>
                                                    <div>
                                                        <h5 class="text-lg font-bold text-black dark:text-white">amelia smith</h5>
                                                        <p class="text-sm font-bold italic">Founder of Alpha Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border border-gray/10"></div>
                                            <div class="p-4 md:p-7">
                                                <h3 class="text-lg font-bold text-black dark:text-white">new bungalow house</h3>
                                                <p class="mt-4 font-semibold leading-loose">
                                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                                    Latin literature from 45 BC, making it over 2000 years old.
                                                </p>
                                                <div class="text-right">
                                                    <p
                                                        class="mt-7 inline-flex bg-[rgba(8,17,31,0.06)] p-2 text-sm font-semibold text-black dark:text-white"
                                                    >
                                                        San Diego, California
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute top-7 z-10 flex gap-2.5 ltr:right-3 rtl:left-3 md:top-10 md:ltr:right-7 md:rtl:left-7">
                                    <button
                                        type="button"
                                        class="feedback-slider-button-prev flex h-8 w-8 items-center justify-center bg-[rgba(8,17,31,0.08)] text-black duration-200 after:hidden hover:bg-black hover:text-white dark:bg-white/[0.08] dark:text-white dark:hover:bg-secondary"
                                    >
                                        <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="rtl:rotate-180">
                                            <path
                                                d="M7 16L1 9L2.5 7.25M7 2L5 4.33333"
                                                stroke="currentcolor"
                                                stroke-width="2"
                                                stroke-linecap="square"
                                                stroke-linejoin="round"
                                            ></path>
                                        </svg>
                                    </button>
                                    <button
                                        type="button"
                                        class="feedback-slider-button-next flex h-8 w-8 items-center justify-center bg-[rgba(8,17,31,0.08)] text-black duration-200 after:hidden hover:bg-black hover:text-white dark:bg-white/[0.08] dark:text-white dark:hover:bg-secondary"
                                    >
                                        <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="rtl:rotate-180">
                                            <path
                                                d="M2 2L4 4.33333M2 16L8 9L6.5 7.25"
                                                stroke="currentcolor"
                                                stroke-width="2"
                                                stroke-linecap="square"
                                                stroke-linejoin="round"
                                            ></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-8 lg:mt-0 lg:w-3/4">
                                <div class="mb-2">
                                    <h6 class="mb-4 text-lg font-extrabold uppercase text-secondary"><span class="text-primary">/</span> Testimoni</h6>
                                    <h2 class="text-3xl font-black leading-normal text-black dark:text-white md:text-[40px]">
                                        Pendapat Para Pendukung
                                    </h2>
                                </div>
                                <p class="text-lg font-medium">Dapatkan wawasan berharga dari mereka yang telah merasakan langsung dampak dan manfaat dari inisiatif Sahabat Tabanan.
                                <div class="mt-7 flex justify-start gap-16">
                                    <div>
                                        <h2 class="text-3xl font-black text-black dark:text-white">13M <span class="text-primary">+</span></h2>
                                        <p class="mt-1 text-sm font-bold">happy people</p>
                                    </div>
                                    <div>
                                        <h2 class="text-3xl font-black text-black dark:text-white">4.88</h2>
                                        <p class="mt-1 text-sm font-bold">overall rating</p>
                                        <div class="mt-3">
                                            <svg width="85" height="12" viewBox="0 0 85 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.7919 2.04503C5.55189 0.681675 5.93188 0 6.5 0C7.06812 0 7.44811 0.681675 8.2081 2.04502L8.40472 2.39774C8.62069 2.78516 8.72867 2.97887 8.89703 3.10668C9.0654 3.2345 9.27509 3.28194 9.69447 3.37683L10.0763 3.46322C11.5521 3.79713 12.29 3.96409 12.4655 4.52864C12.6411 5.09319 12.1381 5.68144 11.1319 6.85795L10.8716 7.16233C10.5857 7.49666 10.4428 7.66383 10.3785 7.87063C10.3142 8.07743 10.3358 8.30047 10.379 8.74653L10.4184 9.15264C10.5705 10.7224 10.6465 11.5072 10.1869 11.8561C9.72729 12.205 9.0364 11.8869 7.6546 11.2507L7.29711 11.0861C6.90445 10.9053 6.70811 10.8149 6.5 10.8149C6.29189 10.8149 6.09556 10.9053 5.70289 11.0861L5.3454 11.2507C3.96361 11.8869 3.27271 12.205 2.81309 11.8561C2.35347 11.5072 2.42953 10.7224 2.58164 9.15264L2.62099 8.74653C2.66422 8.30047 2.68583 8.07743 2.62152 7.87063C2.55721 7.66383 2.41426 7.49666 2.12835 7.16233L1.86806 6.85796C0.861949 5.68144 0.358895 5.09319 0.534453 4.52864C0.71001 3.96409 1.44791 3.79713 2.92372 3.46322L3.30553 3.37683C3.72491 3.28194 3.9346 3.2345 4.10297 3.10668C4.27133 2.97887 4.37932 2.78516 4.59528 2.39774L4.7919 2.04503Z"
                                                    fill="#F1A501"
                                                />
                                                <path
                                                    d="M22.7919 2.04503C23.5519 0.681675 23.9319 0 24.5 0C25.0681 0 25.4481 0.681675 26.2081 2.04502L26.4047 2.39774C26.6207 2.78516 26.7287 2.97887 26.897 3.10668C27.0654 3.2345 27.2751 3.28194 27.6945 3.37683L28.0763 3.46322C29.5521 3.79713 30.29 3.96409 30.4655 4.52864C30.6411 5.09319 30.1381 5.68144 29.1319 6.85795L28.8716 7.16233C28.5857 7.49666 28.4428 7.66383 28.3785 7.87063C28.3142 8.07743 28.3358 8.30047 28.379 8.74653L28.4184 9.15264C28.5705 10.7224 28.6465 11.5072 28.1869 11.8561C27.7273 12.205 27.0364 11.8869 25.6546 11.2507L25.2971 11.0861C24.9044 10.9053 24.7081 10.8149 24.5 10.8149C24.2919 10.8149 24.0956 10.9053 23.7029 11.0861L23.3454 11.2507C21.9636 11.8869 21.2727 12.205 20.8131 11.8561C20.3535 11.5072 20.4295 10.7224 20.5816 9.15264L20.621 8.74653C20.6642 8.30047 20.6858 8.07743 20.6215 7.87063C20.5572 7.66383 20.4143 7.49666 20.1284 7.16233L19.8681 6.85796C18.8619 5.68144 18.3589 5.09319 18.5345 4.52864C18.71 3.96409 19.4479 3.79713 20.9237 3.46322L21.3055 3.37683C21.7249 3.28194 21.9346 3.2345 22.103 3.10668C22.2713 2.97887 22.3793 2.78516 22.5953 2.39774L22.7919 2.04503Z"
                                                    fill="#F1A501"
                                                />
                                                <path
                                                    d="M40.7919 2.04503C41.5519 0.681675 41.9319 0 42.5 0C43.0681 0 43.4481 0.681675 44.2081 2.04502L44.4047 2.39774C44.6207 2.78516 44.7287 2.97887 44.897 3.10668C45.0654 3.2345 45.2751 3.28194 45.6945 3.37683L46.0763 3.46322C47.5521 3.79713 48.29 3.96409 48.4655 4.52864C48.6411 5.09319 48.1381 5.68144 47.1319 6.85795L46.8716 7.16233C46.5857 7.49666 46.4428 7.66383 46.3785 7.87063C46.3142 8.07743 46.3358 8.30047 46.379 8.74653L46.4184 9.15264C46.5705 10.7224 46.6465 11.5072 46.1869 11.8561C45.7273 12.205 45.0364 11.8869 43.6546 11.2507L43.2971 11.0861C42.9044 10.9053 42.7081 10.8149 42.5 10.8149C42.2919 10.8149 42.0956 10.9053 41.7029 11.0861L41.3454 11.2507C39.9636 11.8869 39.2727 12.205 38.8131 11.8561C38.3535 11.5072 38.4295 10.7224 38.5816 9.15264L38.621 8.74653C38.6642 8.30047 38.6858 8.07743 38.6215 7.87063C38.5572 7.66383 38.4143 7.49666 38.1284 7.16233L37.8681 6.85796C36.8619 5.68144 36.3589 5.09319 36.5345 4.52864C36.71 3.96409 37.4479 3.79713 38.9237 3.46322L39.3055 3.37683C39.7249 3.28194 39.9346 3.2345 40.103 3.10668C40.2713 2.97887 40.3793 2.78516 40.5953 2.39774L40.7919 2.04503Z"
                                                    fill="#F1A501"
                                                />
                                                <path
                                                    d="M58.7919 2.04503C59.5519 0.681675 59.9319 0 60.5 0C61.0681 0 61.4481 0.681675 62.2081 2.04502L62.4047 2.39774C62.6207 2.78516 62.7287 2.97887 62.897 3.10668C63.0654 3.2345 63.2751 3.28194 63.6945 3.37683L64.0763 3.46322C65.5521 3.79713 66.29 3.96409 66.4655 4.52864C66.6411 5.09319 66.1381 5.68144 65.1319 6.85795L64.8716 7.16233C64.5857 7.49666 64.4428 7.66383 64.3785 7.87063C64.3142 8.07743 64.3358 8.30047 64.379 8.74653L64.4184 9.15264C64.5705 10.7224 64.6465 11.5072 64.1869 11.8561C63.7273 12.205 63.0364 11.8869 61.6546 11.2507L61.2971 11.0861C60.9044 10.9053 60.7081 10.8149 60.5 10.8149C60.2919 10.8149 60.0956 10.9053 59.7029 11.0861L59.3454 11.2507C57.9636 11.8869 57.2727 12.205 56.8131 11.8561C56.3535 11.5072 56.4295 10.7224 56.5816 9.15264L56.621 8.74653C56.6642 8.30047 56.6858 8.07743 56.6215 7.87063C56.5572 7.66383 56.4143 7.49666 56.1284 7.16233L55.8681 6.85796C54.8619 5.68144 54.3589 5.09319 54.5345 4.52864C54.71 3.96409 55.4479 3.79713 56.9237 3.46322L57.3055 3.37683C57.7249 3.28194 57.9346 3.2345 58.103 3.10668C58.2713 2.97887 58.3793 2.78516 58.5953 2.39774L58.7919 2.04503Z"
                                                    fill="#F1A501"
                                                />
                                                <path
                                                    opacity="0.3"
                                                    d="M76.7919 2.04503C77.5519 0.681675 77.9319 0 78.5 0C79.0681 0 79.4481 0.681675 80.2081 2.04502L80.4047 2.39774C80.6207 2.78516 80.7287 2.97887 80.897 3.10668C81.0654 3.2345 81.2751 3.28194 81.6945 3.37683L82.0763 3.46322C83.5521 3.79713 84.29 3.96409 84.4655 4.52864C84.6411 5.09319 84.1381 5.68144 83.1319 6.85795L82.8716 7.16233C82.5857 7.49666 82.4428 7.66383 82.3785 7.87063C82.3142 8.07743 82.3358 8.30047 82.379 8.74653L82.4184 9.15264C82.5705 10.7224 82.6465 11.5072 82.1869 11.8561C81.7273 12.205 81.0364 11.8869 79.6546 11.2507L79.2971 11.0861C78.9044 10.9053 78.7081 10.8149 78.5 10.8149C78.2919 10.8149 78.0956 10.9053 77.7029 11.0861L77.3454 11.2507C75.9636 11.8869 75.2727 12.205 74.8131 11.8561C74.3535 11.5072 74.4295 10.7224 74.5816 9.15264L74.621 8.74653C74.6642 8.30047 74.6858 8.07743 74.6215 7.87063C74.5572 7.66383 74.4143 7.49666 74.1284 7.16233L73.8681 6.85796C72.8619 5.68144 72.3589 5.09319 72.5345 4.52864C72.71 3.96409 73.4479 3.79713 74.9237 3.46322L75.3055 3.37683C75.7249 3.28194 75.9346 3.2345 76.103 3.10668C76.2713 2.97887 76.3793 2.78516 76.5953 2.39774L76.7919 2.04503Z"
                                                    fill="#7780A1"
                                                />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>--}}

            <section class="bg-black py-10 md:py-0">
                <div class="container">
                    <div class="grid items-center md:grid-cols-2">
                        <div class="py-5">
                            <div class="text-center md:ltr:text-left md:rtl:text-right lg:w-3/4">
                                <div class="mb-10">
                                    <h6 class="mb-4 text-lg font-extrabold uppercase text-secondary"><span class="text-primary">/</span> get started</h6>
                                    <h2 class="text-3xl font-black leading-tight text-white md:text-[40px]">Bantu Kami Untuk Mewujudkan Mimpi SAHABAT Tabanan</h2>
                                </div>
                                <div class="mt-8">
                                    <a href="#contact-us" class="bg-secondary py-3 px-5 font-bold text-white transition hover:bg-primary">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 pr-4 md:pr-12">
                            <img src="{{ asset('vendor/plurk/images/personal-portfolio/contact-email.png')}}" alt="" data-aos="fade-down" data-aos-duration="1000" />
                        </div>
                    </div>
                </div>
            </section>
             

            <section id="contact-us" class="py-14 dark:bg-gray-dark lg:py-[100px]">
                <div class="container">
                    <div class="relative z-10 lg:flex">
                        <div
                            class="heading text-center lg:mb-0 lg:w-1/3 ltr:lg:pr-10 ltr:lg:text-left rtl:lg:pl-10 rtl:lg:text-right">
                            <h6>Hubungi Kami</h6>
                            <h4 class="sm:!leading-[50px]">Kirimkan pertanyaan Anda di sini.</h4>
                            <img src="{{ asset('vendor/plurk/images/form-img.png') }}" alt="form-img" class="mx-auto"
                                data-aos="fade-right" data-aos-duration="1000" />
                        </div>
                        <form action="{{ route('questions.store') }}" method="POST"
                            class="rounded-3xl bg-white px-4 py-12 dark:bg-[#101626] lg:w-2/3 lg:px-8">
                            @csrf
                            <div class="grid gap-10 sm:grid-cols-2">
                                <div class="relative">
                                    <input type="text" name="name"
                                        class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" />
                                    <label for=""
                                        class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">Nama
                                        Lengkap</label>
                                    <!-- SVG icon omitted for brevity -->
                                </div>
                                <div class="relative">
                                    <input type="email" name="email"
                                        class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" />
                                    <label for=""
                                        class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">Alamat
                                        Email</label>
                                    <!-- SVG icon omitted for brevity -->
                                </div>
                                <div class="relative">
                                    <input type="text" name="phone_number"
                                        class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" />
                                    <label for=""
                                        class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">No
                                        HP</label>
                                    <!-- SVG icon omitted for brevity -->
                                </div>
                                <div class="relative">
                                    <input type="text" name="origin"
                                        class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" />
                                    <label for=""
                                        class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">Asal
                                        Daerah</label>
                                    <!-- SVG icon omitted for brevity -->
                                </div>
                            </div>
                            <div class="relative mt-10">
                                <input type="text" name="question"
                                    class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12" />
                                <label for=""
                                    class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-[#101626] dark:text-white">Pertanyaan</label>
                                <!-- SVG icon omitted for brevity -->
                            </div>
                            <div class="mt-10 text-center ltr:lg:text-right rtl:lg:text-left">
                                <button type="submit"
                                    class="btn bg-gray px-12 capitalize text-white dark:bg-white dark:text-black dark:hover:bg-secondary">
                                    Kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            @include('layouts.footer')
        </div>

        {{-- <!-- Return to Top -->
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
        <script src="assets/js/swiper-bundle.min.js"></script>
        <!-- Counter Js -->
        <script src="assets/js/vanilla-counter.js"></script>
        <!-- AOS Animation JS -->
        <script src="assets/js/aos.js"></script>
        <!-- Custom Js -->
        <script src="assets/js/custom.js"></script> --}}

        <!-- Return to Top -->
        <button type="button" id="scrollToTopBtn"
            class="fixed bottom-5 z-10 hidden animate-bounce ltr:right-5 rtl:left-5" onclick="scrollToTop()">
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

        <script>
            // Counter Js
            VanillaCounter();

            // Feedback Slider
            var feedbackSwiper = new Swiper('.feedback-slider', {
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 30,
                speed: 1000,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    prevEl: '.feedback-slider-button-prev',
                    nextEl: '.feedback-slider-button-next',
                },
            });

            // Portfolio Slider
            var portfolioSwiper = new Swiper('.portfolio-slider', {
                loop: true,
                slidesPerView: 3,
                spaceBetween: 30,
                speed: 1000,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    prevEl: '.portfolio-slider-button-prev',
                    nextEl: '.portfolio-slider-button-next',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    1024: {
                        slidesPerView: 2,
                    },
                    1142: {
                        slidesPerView: 3,
                    },
                },
            });

            // Logo Slider
            var logoSwiper = new Swiper('.logo-slider', {
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 10,
                speed: 4000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.7,
                    },
                    600: {
                        slidesPerView: 2,
                    },
                    1000: {
                        slidesPerView: 3,
                    },
                    1142: {
                        slidesPerView: 5,
                    },
                },
            });
        </script>
    @endsection
