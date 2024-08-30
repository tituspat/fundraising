@include('layouts.app-2')

@section('content')
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
        </div>
        <div
            class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent"
        >
            <header id="top-header" class="sticky top-0 z-50 bg-black/10 transition duration-300">
                <div class="container">
                    <div class="relative flex items-center justify-between py-5 lg:py-0">
                        <a href="index.html"><img src="assets/images/logo.png" alt="logo" class="h-10" /></a>
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
                                        <a href="javascript:;">
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
                                            <a href="personal-portfolio.html">
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
                                        <a href="portfolio.html" class="active">Portfolio</a>
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
            </header>

            <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
                <div class="bg-[url(../images/inner-page-hero-bg.png)] bg-cover bg-bottom bg-no-repeat pt-[82px] lg:pt-[106px]">
                    <div class="relative">
                        <div class="container">
                            <div class="items-center py-10 md:flex md:h-[400px] md:py-0">
                                <div class="heading relative mb-0 md:w-[725px]">
                                    <h4 class="!text-white">Crypto Game - UX Interface</h4>
                                    <p
                                        class="relative mt-7 font-medium text-[#BBC0D0] before:absolute before:top-0 before:h-full before:w-1 before:bg-primary ltr:pl-8 ltr:before:left-0 rtl:pr-8 rtl:before:right-0"
                                    >
                                        Axie Infinity is a non-fungible token-based online video game developed by Vietnamese studio Sky Mavis, known for its
                                        in-game economy which uses Ethereum-based cryptocurrencies. Players of Axie Infinity collect and mint NFTs which
                                        represent axolotl-inspired digital pets known as Axies.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="py-14 md:py-[100px]">
                    <div class="container">
                        <div>
                            <h3 class="mb-7 text-xl font-extrabold text-black dark:text-white sm:text-2xl">Technologies</h3>
                            <div class="overflow-x-auto overflow-y-hidden">
                                <ul
                                    class="flex w-[520px] justify-between gap-4 md:w-auto md:justify-start md:gap-7"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                >
                                    <li
                                        class="flex h-16 w-16 items-center justify-center rounded-2xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark md:h-20 md:w-20 md:rounded-[32px]"
                                    >
                                        <div>
                                            <svg width="25" height="30" viewBox="0 0 25 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M15.1825 29.9999L7.06445 21.9351L11.5511 17.3701L24.206 29.9999H15.1825Z"
                                                    fill="#02539A"
                                                />
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M6.9668 21.9415L15.0127 13.8955H24.0582L11.5412 26.4125L6.9668 21.9415Z"
                                                    fill="#45D1FD"
                                                    fill-opacity="0.85"
                                                />
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M0 14.9232L4.56814 19.4882L24.0564 0H14.964L0 14.9232Z"
                                                    fill="#45D1FD"
                                                />
                                            </svg>
                                        </div>
                                    </li>
                                    <li
                                        class="flex h-16 w-16 items-center justify-center rounded-2xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark md:h-20 md:w-20 md:rounded-[32px]"
                                    >
                                        <div>
                                            <svg width="134" height="130" viewBox="0 0 134 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.3" filter="url(#filter0_f_866_3412)">
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M56.7141 60.6973L66.576 79.9998L50 60.6973H56.7141Z"
                                                        fill="#EA6C00"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M76.4382 60.6973L66.5764 79.9998L83.1523 60.6973H76.4382Z"
                                                        fill="#EA6C00"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M56.7129 60.6973H76.4366L66.5747 79.9998L56.7129 60.6973Z"
                                                        fill="#FDAD00"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M66.5747 50L57.232 50.9876L56.7129 60.6975L66.5747 50Z"
                                                        fill="#FDD231"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M66.5776 50L75.9204 50.9876L76.4395 60.6975L66.5776 50Z"
                                                        fill="#FDD231"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M83.1523 60.6972L75.9192 50.9873L76.4382 60.6972H83.1523Z"
                                                        fill="#FDAD00"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M50 60.6972L57.2332 50.9873L56.7141 60.6972H50Z"
                                                        fill="#FDAD00"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M66.5747 50L56.7129 60.6975H76.4366L66.5747 50Z"
                                                        fill="#EA6C00"
                                                    />
                                                </g>
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M56.7141 60.6973L66.576 79.9998L50 60.6973H56.7141Z"
                                                    fill="#EA6C00"
                                                />
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M76.4382 60.6973L66.5764 79.9998L83.1523 60.6973H76.4382Z"
                                                    fill="#EA6C00"
                                                />
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M56.7129 60.6973H76.4366L66.5747 79.9998L56.7129 60.6973Z"
                                                    fill="#FDAD00"
                                                />
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M66.5747 50L57.232 50.9876L56.7129 60.6975L66.5747 50Z"
                                                    fill="#FDD231"
                                                />
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M66.5776 50L75.9204 50.9876L76.4395 60.6975L66.5776 50Z"
                                                    fill="#FDD231"
                                                />
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M83.1523 60.6972L75.9192 50.9873L76.4382 60.6972H83.1523Z"
                                                    fill="#FDAD00"
                                                />
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M50 60.6972L57.2332 50.9873L56.7141 60.6972H50Z"
                                                    fill="#FDAD00"
                                                />
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M66.5747 50L56.7129 60.6975H76.4366L66.5747 50Z"
                                                    fill="#FEEEB7"
                                                />
                                                <defs>
                                                    <filter
                                                        id="filter0_f_866_3412"
                                                        x="0"
                                                        y="0"
                                                        width="133.152"
                                                        height="130"
                                                        filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB"
                                                    >
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                        <feGaussianBlur stdDeviation="25" result="effect1_foregroundBlur_866_3412" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>
                                    </li>
                                    <li
                                        class="flex h-16 w-16 items-center justify-center rounded-2xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark md:h-20 md:w-20 md:rounded-[32px]"
                                    >
                                        <div>
                                            <svg width="27" height="30" viewBox="0 0 27 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.1054 5.84111C23.0847 5.69033 22.9526 5.60689 22.8434 5.5977C22.7345 5.58861 20.4287 5.4177 20.4287 5.4177C20.4287 5.4177 18.8272 3.82784 18.6515 3.65187C18.4756 3.476 18.1321 3.52949 17.9988 3.56873C17.9792 3.57452 17.6489 3.67645 17.1026 3.8455C16.5677 2.30614 15.6236 0.891538 13.9627 0.891538C13.9168 0.891538 13.8696 0.893397 13.8224 0.896082C13.3501 0.271396 12.7649 0 12.2595 0C8.39046 0 6.54201 4.83669 5.96246 7.29454C4.45904 7.7604 3.39101 8.09159 3.25459 8.13444C2.41541 8.39768 2.38887 8.42412 2.27868 9.21486C2.19575 9.81353 0 26.7943 0 26.7943L17.1097 30L26.3804 27.9945C26.3804 27.9945 23.126 5.99188 23.1056 5.84111H23.1054ZM16.157 4.13796L14.7092 4.58606C14.7097 4.48402 14.7102 4.38364 14.7102 4.27387C14.7102 3.31717 14.5774 2.54687 14.3644 1.93623C15.2202 2.04363 15.7901 3.01737 16.157 4.13796ZM13.3028 2.12594C13.5407 2.72212 13.6954 3.57772 13.6954 4.73229C13.6954 4.79136 13.6949 4.84537 13.6944 4.9C12.7528 5.19164 11.7297 5.50827 10.7044 5.82593C11.2801 3.60395 12.3593 2.53076 13.3028 2.12594ZM12.1532 1.03777C12.3202 1.03777 12.4885 1.09447 12.6495 1.20527C11.4095 1.78876 10.0804 3.2583 9.51911 6.19295L7.15565 6.92494C7.81307 4.68654 9.37412 1.03777 12.1531 1.03777H12.1532Z"
                                                    fill="#95BF46"
                                                />
                                                <path
                                                    d="M22.8481 5.59741C22.7391 5.58832 20.4333 5.41741 20.4333 5.41741C20.4333 5.41741 18.8319 3.82755 18.6561 3.65158C18.5903 3.58611 18.5016 3.55254 18.4089 3.53809L17.1152 29.9995L26.385 27.9942C26.385 27.9942 23.1305 5.99159 23.1101 5.84082C23.0893 5.69004 22.9572 5.6066 22.8481 5.59741Z"
                                                    fill="#5E8E3E"
                                                />
                                                <path
                                                    d="M13.965 10.7204L12.8219 14.1207C12.8219 14.1207 11.8204 13.5862 10.5927 13.5862C8.79289 13.5862 8.70232 14.7157 8.70232 15.0003C8.70232 16.5533 12.7505 17.1483 12.7505 20.7859C12.7505 23.6478 10.9353 25.4907 8.48782 25.4907C5.5508 25.4907 4.04883 23.6628 4.04883 23.6628L4.83524 21.0645C4.83524 21.0645 6.37914 22.39 7.6819 22.39C8.53316 22.39 8.87943 21.7198 8.87943 21.2301C8.87943 19.2043 5.55824 19.114 5.55824 15.7852C5.55824 12.9836 7.56913 10.2725 11.6283 10.2725C13.1923 10.2725 13.965 10.7204 13.965 10.7204Z"
                                                    fill="white"
                                                />
                                            </svg>
                                        </div>
                                    </li>
                                    <li
                                        class="flex h-16 w-16 items-center justify-center rounded-2xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark md:h-20 md:w-20 md:rounded-[32px]"
                                    >
                                        <div>
                                            <svg width="21" height="30" viewBox="0 0 21 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 30C7.75999 30 9.99999 27.76 9.99999 25V20H5C2.24 20 0 22.24 0 25C0 27.76 2.24 30 5 30Z"
                                                    fill="#0ACF83"
                                                />
                                                <path d="M0 15C0 12.24 2.24 10 5 10H9.99999V20H5C2.24 20 0 17.76 0 15Z" fill="#A259FF" />
                                                <path d="M0 5C0 2.24 2.24 0 5 0H9.99999V9.99999H5C2.24 9.99999 0 7.75999 0 5Z" fill="#F24E1E" />
                                                <path
                                                    d="M10.002 0H15.0019C17.7619 0 20.0019 2.24 20.0019 5C20.0019 7.75999 17.7619 9.99999 15.0019 9.99999H10.002V0Z"
                                                    fill="#FF7262"
                                                />
                                                <path
                                                    d="M20.0019 15C20.0019 17.76 17.7619 20 15.0019 20C12.242 20 10.002 17.76 10.002 15C10.002 12.24 12.242 10 15.0019 10C17.7619 10 20.0019 12.24 20.0019 15Z"
                                                    fill="#1ABCFE"
                                                />
                                            </svg>
                                        </div>
                                    </li>
                                    <li
                                        class="flex h-16 w-16 items-center justify-center rounded-2xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark md:h-20 md:w-20 md:rounded-[32px]"
                                    >
                                        <div>
                                            <svg width="27" height="30" viewBox="0 0 27 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.20085 26.8972L0 0L26.2838 0.0540514L23.9567 26.8972L13.2411 30L2.20085 26.8972Z" fill="#E34F26" />
                                                <path d="M13.2388 27.4023V2.56152L24.0626 2.59756L22.1325 24.8225L13.2388 27.4023Z" fill="#EF652A" />
                                                <path
                                                    d="M21.0902 8.76676L21.3967 5.4834H4.74609L5.66603 15.5497H17.1574L16.7067 19.8431L13.0266 20.8351L9.29235 19.7528L9.09395 17.1912H5.79236L6.24343 22.4227L13.0264 24.3169L19.8633 22.4227L20.7833 12.2123H8.71496L8.37221 8.76676H21.0902Z"
                                                    fill="white"
                                                />
                                            </svg>
                                        </div>
                                    </li>
                                    <li
                                        class="flex h-16 w-16 items-center justify-center rounded-2xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark md:h-20 md:w-20 md:rounded-[32px]"
                                    >
                                        <div>
                                            <svg width="35" height="30" viewBox="0 0 35 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M27.8261 0H34.7826L17.3913 30L0 0H13.3043L17.3913 6.95652L21.3913 0H27.8261Z" fill="#41B883" />
                                                <path d="M0 0L17.3913 30L34.7826 0H27.8261L17.3913 18L6.86957 0H0Z" fill="#41B883" />
                                                <path d="M6.86926 0L17.391 18.087L27.8258 0H21.391L17.391 6.95652L13.304 0H6.86926Z" fill="#35495E" />
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="py-14 md:py-20">
                            <h3 class="mb-7 text-xl font-extrabold text-black dark:text-white sm:text-2xl">Features and Functionalities</h3>
                            <ul class="list-disc space-y-4 font-semibold leading-6 ltr:ml-[18px] rtl:mr-[18px] md:text-lg ltr:md:pl-4 rtl:md:pr-4">
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li>Pellentesque sagittis risus sed accumsan efficitur.</li>
                                <li>Curabitur non tortor semper, tincidunt augue at, luctus diam.</li>
                                <li>Phasellus vitae metus nec nulla sagittis lobortis sit amet vitae dolor.</li>
                                <li>Fusce lobortis justo pellentesque quam facilisis scelerisque.</li>
                                <li>Phasellus id arcu dapibus, facilisis ipsum nec, faucibus urna.</li>
                                <li>Nullam fermentum ipsum sit amet justo convallis, quis iaculis massa finibus.</li>
                                <li>Vivamus eget dui pulvinar, aliquet magna eget, dignissim felis.</li>
                            </ul>
                        </div>
                        <div class="pb-14 md:pb-20">
                            <h3 class="mb-7 text-xl font-extrabold text-black dark:text-white sm:text-2xl">Description</h3>
                            <p
                                class="relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded before:bg-primary ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg"
                            >
                                Mosaic is a finance tool for making better business moves — automating data aggregation, analysis, and financial forecasting. In
                                late 2021, we partnered to help them take charge of the Strategic Finance category with a new brand, voice, and web experience.
                                To connect with their audience of finance leaders they needed to look and feel like a polished, confident, no-nonsense brand.
                            </p>
                            <p
                                class="relative mt-5 font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded before:bg-primary ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg"
                            >
                                Easily recognised by its expert tone of voice and chess-styled visuals, Mosaic takes after its ideal user: the less meetings,
                                more doing kinda folk. Tasked with bringing this new brand to life online, we built an experience to catch the eye of startups
                                everywhere.
                            </p>
                        </div>
                        <div class="grid gap-[30px] sm:grid-cols-2">
                            <img src="assets/images/portfolio1.png" alt="portfolio" class="rounded-[32px]" data-aos="fade-up" data-aos-duration="1000" />
                            <img src="assets/images/portfolio2.png" alt="portfolio" class="rounded-[32px]" data-aos="fade-up" data-aos-duration="1000" />
                        </div>
                        <div class="py-[30px] sm:py-[50px]">
                            <img src="assets/images/portfolio3.png" alt="portfolio" class="rounded-[32px]" data-aos="fade-up" data-aos-duration="1000" />
                        </div>
                        <div>
                            <img src="assets/images/portfolio4.png" alt="portfolio" class="rounded-[32px]" data-aos="fade-up" data-aos-duration="1000" />
                        </div>
                    </div>
                </section>

                <section class="py-14 md:py-[100px] lg:py-[100px]">
                    <div class="container">
                        <div class="mb-10 flex flex-col items-center justify-center gap-5 lg:mb-14 lg:flex-row lg:justify-between">
                            <div class="heading mb-0 text-center ltr:lg:text-left rtl:lg:text-right">
                                <h4>Related Projects</h4>
                            </div>
                            <div class="flex items-center justify-end gap-4">
                                <a
                                    href="portfolio.html"
                                    class="text-sm font-extrabold text-black transition hover:text-secondary dark:text-white dark:hover:text-secondary"
                                    >View All</a
                                >
                                <button
                                    type="button"
                                    class="project-slider-button-prev flex h-10 w-10 items-center justify-center rounded-full bg-black/5 transition hover:bg-secondary dark:bg-white/5 dark:hover:bg-secondary"
                                >
                                    <svg
                                        width="7"
                                        height="12"
                                        viewBox="0 0 7 12"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-black rtl:rotate-180 dark:text-white"
                                    >
                                        <path
                                            d="M5.95007 1.2002L1.48924 5.3424C1.06317 5.73803 1.06317 6.41236 1.48924 6.80799L5.95007 10.9502"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                        ></path>
                                    </svg>
                                </button>
                                <button
                                    type="button"
                                    class="project-slider-button-next text-p flex h-10 w-10 items-center justify-center rounded-full bg-black/5 transition hover:bg-secondary dark:bg-white/5 dark:hover:bg-secondary"
                                >
                                    <svg
                                        width="7"
                                        height="12"
                                        viewBox="0 0 7 12"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-black rtl:rotate-180 dark:text-white"
                                    >
                                        <path
                                            d="M1.05005 10.7998L5.51089 6.6576C5.93695 6.26197 5.93695 5.58764 5.51089 5.19201L1.05005 1.0498"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- <div class="overflow-x-auto">
                        <ul class="flex gap-8 lg:gap-10 font-bold mb-10 mt-10 lg:mt-0 w-[700px] md:w-auto">
                            <li class="text-secondary"><button type="button">All Work</button></li>
                            <li><button type="button" class="hover:text-secondary transition">Design</button></li>
                            <li><button type="button" class="hover:text-secondary transition">Website</button></li>
                            <li><button type="button" class="hover:text-secondary transition">Mobile App</button></li>
                            <li><button type="button" class="hover:text-secondary transition">Web Application</button></li>
                            <li><button type="button" class="hover:text-secondary transition">Ecommerce</button></li>
                        </ul>
                    </div> -->
                    </div>
                    <div class="swiper project-slider px-6">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div
                                    class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                                >
                                    <a href="portfolio-detail.html" class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></a>
                                    <img src="assets/images/project-2.png" alt="project-2" class="h-52 w-full rounded-t-3xl object-cover" />
                                    <div class="p-5 text-sm font-bold">
                                        <h6 class="mb-1 text-black line-clamp-1 dark:text-white">Crypto Game - UX Interface</h6>
                                        <p>Website, App</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                                >
                                    <a href="portfolio-detail.html" class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></a>
                                    <img src="assets/images/project-3.png" alt="project-3" class="h-52 w-full rounded-t-3xl object-cover" />
                                    <div class="p-5 text-sm font-bold">
                                        <h6 class="mb-1 text-black line-clamp-1 dark:text-white">Looking for a quiet place</h6>
                                        <p>Website</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                                >
                                    <a href="portfolio-detail.html" class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></a>
                                    <img src="assets/images/project-4.png" alt="project-4" class="h-52 w-full rounded-t-3xl object-cover" />
                                    <div class="p-5 text-sm font-bold">
                                        <h6 class="mb-1 text-black line-clamp-1 dark:text-white">WeTour - Travel Hero Illustration</h6>
                                        <p>Website</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                                >
                                    <a href="portfolio-detail.html" class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></a>
                                    <img src="assets/images/project-5.png" alt="project-5" class="h-52 w-full rounded-t-3xl object-cover" />
                                    <div class="p-5 text-sm font-bold">
                                        <h6 class="mb-1 text-black line-clamp-1 dark:text-white">Digital Art Guide</h6>
                                        <p>Branding</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark"
                                >
                                    <a href="portfolio-detail.html" class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></a>
                                    <img src="assets/images/project-6.png" alt="project-6" class="h-52 w-full rounded-t-3xl object-cover" />
                                    <div class="p-5 text-sm font-bold">
                                        <h6 class="mb-1 text-black line-clamp-1 dark:text-white">Frozeverse - 3D and motion design</h6>
                                        <p>Branding, Website, App</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    class="relative overflow-x-hidden border-t-2 border-transparent bg-gradient-to-b from-white/40 to-transparent px-4 py-12 dark:border-gray/20 dark:bg-none"
                >
                    <div class="items-center justify-center lg:flex">
                        <div class="text-center" data-aos="fade-right" data-aos-duration="1000">
                            <img src="assets/images/contact-text.png" alt="contact-text" class="mx-auto xl:mx-0" />
                        </div>
                        <div data-aos="fade-left" data-aos-duration="1000">
                            <svg
                                width="320"
                                height="282"
                                viewBox="0 0 320 282"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="mx-auto my-8 w-[90%] sm:w-auto"
                            >
                                <path
                                    d="M254.182 123.52L203.127 119.709C198.183 119.334 193.219 120.151 188.656 122.091L175.076 127.872C173.249 131.184 171.005 134.248 168.397 136.989C161.845 143.977 136.719 156.969 123.457 159.701C120.332 160.256 117.111 159.694 114.361 158.113C108.352 162.928 102.056 167.373 95.5072 171.426C95.5072 171.426 107.911 206.717 154.095 186.768L190.829 170.854L182.782 190.136C183.005 201.158 183.069 215.611 182.337 225.245C190.961 227.868 200.16 227.956 208.832 225.497C212.297 201.991 214.937 164.889 205.968 150.88L249.86 150.467C255.391 140.518 254.904 134.861 254.182 123.52Z"
                                    fill="#B476E5"
                                ></path>
                                <path
                                    d="M172.633 109.862L177.977 86.3878C178.096 85.8739 178.003 85.3342 177.724 84.8875C177.443 84.4406 176.996 84.1235 176.482 84.0054C175.968 83.8876 175.427 83.9785 174.98 84.2585C174.532 84.5386 174.215 84.9845 174.097 85.4984L167.799 113.166"
                                    fill="#B476E5"
                                ></path>
                                <path
                                    d="M172.633 109.862L177.977 86.3878C178.096 85.8739 178.003 85.3342 177.724 84.8875C177.443 84.4406 176.996 84.1235 176.482 84.0054C175.968 83.8876 175.427 83.9785 174.98 84.2585C174.532 84.5386 174.215 84.9845 174.097 85.4984L167.799 113.166C168.591 116.084 170.719 119.996 172.633 109.862Z"
                                    fill="#B476E5"
                                ></path>
                                <path
                                    d="M168.499 20.9169C168.499 24.8561 167.329 28.7067 165.138 31.982C162.946 35.2574 159.832 37.8102 156.189 39.3177C152.545 40.8252 148.535 41.2196 144.667 40.451C140.799 39.6826 137.245 37.7857 134.457 35.0003C131.668 32.2148 129.768 28.6659 128.999 24.8024C128.23 20.9389 128.625 16.9343 130.134 13.295C131.643 9.65572 134.199 6.54505 137.478 4.35659C140.758 2.16813 144.613 1 148.557 1C153.845 1.00318 158.916 3.10253 162.655 6.83696C166.393 10.5714 168.495 15.6356 168.499 20.9169Z"
                                    fill="#B476E5"
                                ></path>
                                <path
                                    d="M272.632 126.031C268.973 134.696 263.804 142.644 257.366 149.506C260.896 150.046 264.427 150.843 267.448 151.316C270.595 149.945 273.546 148.163 276.223 146.015C284.593 139.281 301.834 130.926 305.61 126.161C298.772 125.173 282.043 125.84 272.632 126.031Z"
                                    fill="#47BDFF"
                                ></path>
                                <path
                                    d="M207.937 244.834C199.124 241.511 190.97 236.649 183.861 230.475C183.447 234.002 182.811 237.56 182.43 240.609C183.921 243.702 185.814 246.586 188.059 249.186C195.089 257.254 204.09 274.154 208.983 277.775C209.75 270.914 208.479 254.237 207.937 244.834Z"
                                    fill="#47BDFF"
                                ></path>
                                <path
                                    d="M98.7515 144.136C98.1154 144.454 97.4475 144.739 96.7796 145.025C93.6602 141.364 90.7292 137.548 87.9982 133.59C88.2844 134.259 97.0625 153.221 111.629 160.368C112.583 159.606 113.505 158.875 114.364 158.144C108.922 155.19 103.268 149.472 98.7515 144.136Z"
                                    fill="#47BDFF"
                                ></path>
                                <path d="M182.398 174.472C182.398 174.472 182.684 181.174 182.843 190.1L190.826 170.851L182.398 174.472Z" fill="#47BDFF"></path>
                                <path
                                    d="M96.7478 60.7848C96.7478 60.7848 91.1787 50.3641 78.0785 56.7189C64.9784 63.0736 67.5194 88.6112 67.5194 88.6112C67.5194 88.6112 55.8772 94.1702 49.6753 103.541C40.0703 118.058 44.9063 139.976 74.7742 139.976C73.3503 133.718 72.8574 127.286 73.3112 120.885C74.1063 109.608 78.2091 99.2844 81.8348 88.7065C86.4582 75.0324 85.4656 76.1258 87.0826 71.1085C83.2325 67.4555 87.8141 63.0719 89.8814 66.628C90.7569 68.0658 90.9661 68.1226 91.6658 68.3416C95.4556 69.527 102.332 70.8494 106.062 69.6156C106.067 69.5186 106.385 60.7848 96.7478 60.7848Z"
                                    fill="#47BDFF"
                                ></path>
                                <path
                                    d="M89.6872 93.1215L86.2843 84.6084C87.4194 86.1276 88.757 87.4848 90.2599 88.6426C89.9802 90.1228 89.789 91.6185 89.6872 93.1215Z"
                                    fill="#47BDFF"
                                ></path>
                                <path
                                    d="M134.69 237.37C134.911 238.445 134.807 239.56 134.392 240.575C133.978 241.59 133.271 242.459 132.362 243.074C131.452 243.688 130.381 244.019 129.283 244.025C128.185 244.03 127.11 243.711 126.194 243.108C125.278 242.504 124.562 241.641 124.136 240.632C123.71 239.62 123.594 238.507 123.802 237.43C124.01 236.353 124.534 235.362 125.305 234.583C126.077 233.804 127.063 233.27 128.139 233.05C128.853 232.899 129.59 232.893 130.307 233.03C131.025 233.167 131.708 233.443 132.317 233.846C132.926 234.247 133.45 234.765 133.857 235.37C134.264 235.976 134.548 236.654 134.69 237.37Z"
                                    fill="#47BDFF"
                                ></path>
                                <path
                                    d="M168.499 20.9169C168.499 24.8561 167.329 28.7067 165.137 31.9821C162.946 35.2574 159.832 37.8101 156.188 39.3177C152.545 40.8252 148.535 41.2196 144.667 40.451C140.799 39.6826 137.245 37.7857 134.457 35.0003C131.668 32.2148 129.768 28.6659 128.999 24.8024C128.229 20.9389 128.624 16.9343 130.134 13.295C131.643 9.65572 134.199 6.54505 137.478 4.35659C140.758 2.16813 144.613 1 148.557 1C153.845 1.00318 158.915 3.10253 162.655 6.83696C166.393 10.5714 168.495 15.6356 168.499 20.9169Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                ></path>
                                <path
                                    d="M212.103 186.067L228.546 194.357C231.921 196.054 235.833 196.345 239.421 195.167C243.012 193.988 245.987 191.435 247.694 188.068L266.522 150.839"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M278.449 127.269L290.058 104.335C291.757 100.964 292.048 97.0577 290.868 93.4729C289.688 89.8879 287.132 86.917 283.76 85.2119L167.571 26.584M101.709 102.88L135.419 36.1878"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M290.599 92.5821L193.561 108.211L157.692 38.6367"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M140.392 191.371C133.153 199.321 124.384 205.732 114.61 210.223C104.836 214.715 94.2565 217.194 83.5022 217.514C72.7479 217.833 62.0394 215.986 52.0153 212.082C41.9913 208.178 32.8572 202.298 25.1578 194.793C17.4584 187.287 11.3514 178.31 7.20105 168.396C3.05076 158.482 0.942231 147.834 1.0012 137.089C1.06018 126.343 3.28546 115.72 7.54432 105.852C11.8032 95.9836 18.0084 87.0734 25.7897 79.6523"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M89.6867 95.7573C89.5973 93.3497 89.802 90.94 90.296 88.5817C94.1728 91.1714 97.3767 89.5614 99.7286 86.211C102.745 81.3349 104.294 75.6948 104.19 69.9639"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M87.998 133.591C90.728 137.549 93.6577 141.365 96.7761 145.026C101.788 142.928 106.405 139.991 110.429 136.343C113.409 133.64 116.083 130.619 118.403 127.333C112.915 120.166 107.83 112.7 103.17 104.97C100.901 101.2 97.4947 98.2448 93.4399 96.5273C91.7007 95.8524 89.8227 95.6125 87.9695 95.8285C86.5932 96.1891 85.1515 96.221 83.7604 95.9219C82.3696 95.6228 81.0688 95.0009 79.9631 94.1064"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M254.436 125.998C258.762 126.157 267.349 126.125 272.597 126.03C268.948 134.692 263.79 142.64 257.364 149.504C255.742 149.25 252.307 148.901 250.749 148.806"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M305.608 126.157C307.421 126.411 308.586 126.826 308.725 127.396C309.606 131.004 290.701 139.768 282.2 146.614C279.728 148.63 276.963 150.259 273.998 151.442C271.835 151.839 269.616 151.797 267.47 151.315C270.622 149.948 273.576 148.166 276.255 146.014C284.601 139.293 301.825 130.954 305.608 126.157Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M272.632 126.03C282.047 125.839 298.776 125.172 305.609 126.157C301.824 130.922 284.593 139.284 276.221 146.01C273.545 148.162 270.593 149.946 267.443 151.315C264.422 150.839 260.891 150.044 257.361 149.504C263.801 142.643 268.971 134.695 272.632 126.03Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M207.555 225.869C207.269 230.634 207.555 237.654 207.937 244.865C199.135 241.535 190.995 236.673 183.892 230.507C184.083 228.887 184.21 227.267 184.242 225.742"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M208.986 277.775C208.795 279.614 208.449 280.768 207.873 280.952C204.326 282.08 194.828 263.389 187.677 255.158C185.558 252.759 183.82 250.049 182.524 247.122C182.059 244.977 182.026 242.76 182.429 240.602C183.915 243.698 185.809 246.582 188.058 249.178C195.089 257.282 204.088 274.154 208.986 277.775Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M207.936 244.833C208.477 254.236 209.749 270.914 208.986 277.769C204.088 274.148 195.066 257.267 188.062 249.18C185.814 246.582 183.92 243.698 182.432 240.604C182.814 237.554 183.45 233.995 183.864 230.469C190.971 236.645 199.123 241.508 207.936 244.833Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M111.632 160.368C97.0654 153.221 88.2873 134.257 87.9977 133.59"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M98.7515 144.136C103.271 149.472 108.932 155.217 114.368 158.179C117.125 159.741 120.343 160.291 123.464 159.736C136.738 157.061 161.852 144.012 168.403 137.024C180.268 124.368 179.294 114.726 178.263 98.6194C177.844 92.0757 177.021 92.2329 176.037 95.2756C174.572 99.8164 172.724 110.824 171.202 115.161C171.06 115.597 170.767 115.969 170.375 116.209C169.204 116.878 168.465 115.415 167.864 113.35C167.227 111.158 166.771 108.239 166.179 106.495C165.139 103.421 163.018 100.619 162.68 109.64C162.483 114.945 162.469 124.082 156.701 127.429C152.212 129.984 147.533 132.193 142.707 134.036C137.715 135.989 132.485 137.271 127.155 137.848C124.26 138.002 120.38 134.703 116.691 129.589"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M172.633 109.861L177.976 86.3868C178.095 85.8729 178.003 85.3332 177.724 84.8865C177.442 84.4396 176.996 84.1225 176.482 84.0045C175.968 83.8866 175.427 83.9775 174.98 84.2576C174.531 84.5376 174.215 84.9835 174.096 85.4974L167.799 113.165"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M182.407 174.502C187.369 172.374 190.834 170.851 190.834 170.851L182.843 190.1"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M114.367 158.176C108.359 162.976 102.061 167.401 95.5071 171.426C84.8217 163.977 77.4015 152.721 74.7738 139.975"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M175.051 127.872L189.967 121.551C193.661 119.992 197.672 119.328 201.671 119.613L254.182 123.52C255.364 134.496 255.223 140.809 249.857 150.457L206.028 150.87"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M96.7477 60.7838C96.7477 60.7838 91.1786 50.3631 78.0784 56.7179C64.9782 63.0726 67.5193 88.6103 67.5193 88.6103C67.5193 88.6103 55.8771 94.1692 49.6752 103.54C40.0702 118.057 44.9062 139.975 74.7741 139.975C73.3502 133.718 72.8573 127.285 73.3111 120.884C74.1062 109.607 78.209 99.2834 81.8347 88.7056C82.6616 86.2596 84.6335 80.2877 85.3014 77.8084C85.9057 75.4912 86.1919 73.8695 87.0825 71.1076C83.2324 67.4546 87.814 63.0709 89.8813 66.627C90.7936 68.1317 90.971 68.0447 91.9703 68.3741C94.4444 69.1866 101.11 71.0307 106.07 69.5444C106.066 69.5494 106.385 60.7838 96.7477 60.7838Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M33.9636 66.246C22.6885 71.6778 12.08 78.3937 2.34976 86.2598C2.07591 86.43 1.84746 86.6639 1.68402 86.9416C1.52058 87.2193 1.42704 87.5324 1.41141 87.8541C1.39575 88.1757 1.45851 88.4966 1.59425 88.7886C1.72999 89.0809 1.93468 89.3359 2.19074 89.5316L9.44224 95.2811C13.8363 89.5249 19.7938 84.6598 25.7798 79.6342C21.1723 85.5872 17.1371 91.9607 13.7275 98.67L21.5297 104.843C21.7814 105.042 22.0776 105.178 22.3931 105.24C22.7086 105.301 23.0342 105.286 23.3427 105.196C23.6512 105.106 23.9336 104.943 24.1659 104.721C24.3983 104.499 24.5741 104.225 24.6783 103.921L36.9533 68.6066C37.0965 68.2107 37.1116 67.7797 36.9963 67.3748C36.8808 66.9699 36.6407 66.6114 36.3101 66.3505C35.9794 66.0893 35.5748 65.9387 35.1536 65.92C34.7326 65.9012 34.3161 66.0153 33.9636 66.246Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M249.602 5.70256C243.273 2.55613 236.181 7.04005 237.199 13.6439L234.241 16.374L238.312 16.6917C241.906 22.7589 251.034 23.0147 254.023 17.0411C254.937 14.9513 254.984 12.5853 254.156 10.4605C253.327 8.33574 251.69 6.6251 249.602 5.70256Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M287.259 189.242C286.298 188.746 285.248 188.443 284.172 188.351C283.094 188.259 282.008 188.38 280.977 188.707C279.947 189.035 278.99 189.562 278.164 190.259C277.337 190.956 276.656 191.809 276.159 192.768C276.159 192.768 270.784 203.252 266.268 202.933L288.722 214.527C285.828 211.033 290.789 200.33 290.789 200.33C291.286 199.37 291.591 198.322 291.681 197.245C291.773 196.169 291.653 195.085 291.325 194.056C290.997 193.026 290.469 192.071 289.771 191.245C289.073 190.419 288.22 189.739 287.259 189.242Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M281.184 210.653C280.679 211.631 279.803 212.366 278.754 212.701C277.704 213.033 276.566 212.936 275.587 212.432C274.608 211.927 273.871 211.052 273.536 210.004C273.203 208.956 273.3 207.819 273.806 206.841"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M311.749 67.8984L305.801 88.3553"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M319 81.0817L298.518 75.1416"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M182.875 214.75C191.909 216.235 201.112 216.403 210.195 215.252"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M242.033 122.694C243.466 132.224 241.922 141.963 237.612 150.584"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M134.691 237.37C134.911 238.445 134.807 239.56 134.392 240.575C133.978 241.59 133.271 242.459 132.362 243.074C131.452 243.688 130.381 244.019 129.283 244.025C128.185 244.03 127.111 243.711 126.194 243.108C125.278 242.504 124.562 241.641 124.136 240.632C123.71 239.62 123.595 238.507 123.803 237.43C124.011 236.353 124.534 235.362 125.306 234.583C126.078 233.804 127.064 233.27 128.139 233.05C128.853 232.899 129.591 232.893 130.308 233.03C131.025 233.167 131.708 233.443 132.317 233.846C132.926 234.247 133.45 234.765 133.857 235.37C134.265 235.976 134.548 236.654 134.691 237.37Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M132.178 219.993C134.31 218.002 136.986 216.686 139.867 216.215C142.748 215.742 145.704 216.133 148.362 217.338C151.02 218.544 153.261 220.51 154.8 222.988C156.34 225.464 157.11 228.342 157.012 231.257C156.914 234.171 155.953 236.989 154.251 239.358C152.548 241.727 150.181 243.538 147.448 244.563C144.715 245.588 141.739 245.78 138.896 245.116C136.054 244.452 133.472 242.961 131.478 240.831C128.806 237.974 127.378 234.176 127.51 230.267C127.641 226.36 129.32 222.665 132.178 219.993Z"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M95.5071 171.426C95.5071 171.426 107.911 206.717 154.095 186.769L182.407 174.502C182.759 187.847 183.499 210.432 182.374 225.235C190.998 227.858 200.195 227.946 208.867 225.489C212.334 201.981 215.014 164.874 206.037 150.87C194.406 132.726 158.648 144.358 158.648 144.358"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                                <path
                                    d="M90.2964 88.5822C88.7639 87.4911 87.4176 86.1605 86.3091 84.6416L89.6871 93.1213"
                                    stroke="#7780A1"
                                    stroke-width="0.75"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                ></path>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-20 ltr:left-0 rtl:right-0">
                        <svg width="171" height="216" viewBox="0 0 171 216" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                opacity="0.06"
                                d="M160.487 10.9038L47.9038 205.904L-64.6795 10.9038L160.487 10.9038Z"
                                stroke="#7780A1"
                                stroke-width="20"
                            ></path>
                        </svg>
                    </div>
                    <div class="text-center">
                        <a href="contact-us.html" class="btn inline-flex items-center gap-3 bg-secondary text-white sm:text-lg">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_549_4797)">
                                    <path
                                        d="M26.25 20.525V24.945C26.2501 25.2615 26.1302 25.5662 25.9145 25.7977C25.6987 26.0293 25.4032 26.1703 25.0875 26.1925C24.5413 26.23 24.095 26.25 23.75 26.25C12.7038 26.25 3.75 17.2963 3.75 6.25C3.75 5.905 3.76875 5.45875 3.8075 4.9125C3.82965 4.59681 3.97073 4.30126 4.20225 4.08551C4.43378 3.86976 4.73853 3.74986 5.055 3.75H9.475C9.63005 3.74984 9.77962 3.80732 9.89466 3.91128C10.0097 4.01523 10.082 4.15823 10.0975 4.3125C10.1263 4.6 10.1525 4.82875 10.1775 5.0025C10.4259 6.73615 10.935 8.42229 11.6875 10.0038C11.8063 10.2538 11.7288 10.5525 11.5037 10.7125L8.80625 12.64C10.4556 16.4831 13.5182 19.5457 17.3612 21.195L19.2863 18.5025C19.3649 18.3925 19.4797 18.3136 19.6106 18.2796C19.7415 18.2455 19.8802 18.2585 20.0025 18.3162C21.5838 19.0673 23.2695 19.5751 25.0025 19.8225C25.1763 19.8475 25.405 19.875 25.69 19.9025C25.844 19.9183 25.9867 19.9907 26.0904 20.1057C26.1941 20.2207 26.2514 20.3701 26.2512 20.525H26.25Z"
                                        fill="currentColor"
                                    />
                                </g>
                                <defs>
                                    <clipPath id="clip0_549_4797">
                                        <rect width="30" height="30" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="capitalize">Contact us now</span>
                        </a>
                    </div>
                </section>
            </div>

            <footer class="mt-auto bg-white dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.03] dark:to-transparent">
                <div class="container">
                    <div class="grid gap-y-10 gap-x-4 py-14 sm:grid-cols-3 lg:grid-cols-5 lg:py-[100px]">
                        <div class="relative">
                            <img src="assets/images/logo.png" alt="plurk" class="h-7" />
                            <ul class="mt-12 flex items-center gap-8">
                                <li>
                                    <a href="javascript:">
                                        <svg
                                            width="10"
                                            height="20"
                                            viewBox="0 0 10 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="transition hover:scale-110 hover:text-secondary"
                                        >
                                            <path
                                                d="M8.0733 3.29509H9.88498V0.139742C9.57242 0.0967442 8.49748 0 7.2456 0C4.6335 0 2.84415 1.643 2.84415 4.66274V7.44186H-0.0383301V10.9693H2.84415V19.845H6.37821V10.9701H9.1441L9.58317 7.44269H6.37738V5.01251C6.37821 3.99297 6.65273 3.29509 8.0733 3.29509Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:">
                                        <svg
                                            width="23"
                                            height="18"
                                            viewBox="0 0 23 18"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="transition hover:scale-110 hover:text-secondary"
                                        >
                                            <path
                                                d="M22.8849 2.11613C22.0668 2.475 21.1951 2.71288 20.2862 2.82838C21.2212 2.27013 21.9348 1.39287 22.2703 0.3355C21.3986 0.85525 20.4361 1.22238 19.4103 1.42725C18.5826 0.545875 17.4028 0 16.1158 0C13.6188 0 11.6086 2.02675 11.6086 4.51137C11.6086 4.86888 11.6388 5.21263 11.7131 5.53988C7.96345 5.357 4.64557 3.55988 2.4167 0.82225C2.02757 1.49738 1.79932 2.27012 1.79932 3.102C1.79932 4.664 2.6037 6.04862 3.8027 6.85025C3.07807 6.8365 2.3672 6.62613 1.76495 6.29475C1.76495 6.3085 1.76495 6.32638 1.76495 6.34425C1.76495 8.536 3.32832 10.3565 5.37845 10.7759C5.01132 10.8763 4.6112 10.9244 4.19595 10.9244C3.9072 10.9244 3.6157 10.9079 3.34207 10.8474C3.92645 12.6335 5.5847 13.9466 7.55645 13.9893C6.02195 15.1896 4.07357 15.9129 1.96432 15.9129C1.59445 15.9129 1.2397 15.8964 0.884949 15.851C2.88282 17.1394 5.25057 17.875 7.80395 17.875C16.1034 17.875 20.6409 11 20.6409 5.04075C20.6409 4.84137 20.6341 4.64887 20.6244 4.45775C21.5196 3.8225 22.2717 3.02913 22.8849 2.11613Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:">
                                        <svg
                                            width="23"
                                            height="22"
                                            viewBox="0 0 23 22"
                                            fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="transition hover:scale-110 hover:text-secondary"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M7.75995 0H16.0099C19.8063 0 22.8849 3.07862 22.8849 6.875V15.125C22.8849 18.9214 19.8063 22 16.0099 22H7.75995C3.96357 22 0.884949 18.9214 0.884949 15.125V6.875C0.884949 3.07862 3.96357 0 7.75995 0ZM16.0099 19.9375C18.6637 19.9375 20.8224 17.7787 20.8224 15.125V6.875C20.8224 4.22125 18.6637 2.0625 16.0099 2.0625H7.75995C5.1062 2.0625 2.94745 4.22125 2.94745 6.875V15.125C2.94745 17.7787 5.1062 19.9375 7.75995 19.9375H16.0099Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M6.38495 11C6.38495 7.96263 8.84757 5.5 11.8849 5.5C14.9223 5.5 17.3849 7.96263 17.3849 11C17.3849 14.0374 14.9223 16.5 11.8849 16.5C8.84757 16.5 6.38495 14.0374 6.38495 11ZM8.44745 11C8.44745 12.8948 9.9902 14.4375 11.8849 14.4375C13.7797 14.4375 15.3224 12.8948 15.3224 11C15.3224 9.10388 13.7797 7.5625 11.8849 7.5625C9.9902 7.5625 8.44745 9.10388 8.44745 11Z"
                                                fill="currentColor"
                                            />
                                            <circle cx="17.7975" cy="5.08737" r="0.732875" fill="currentColor" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <img src="assets/images/footer-shape.png" alt="footer-shape" class="absolute bottom-0 right-0 sm:left-0" />
                            <img
                                src="assets/images/footer-shape-dark.png"
                                alt="footer-shape-dark"
                                class="absolute bottom-0 right-0 hidden dark:block sm:left-0"
                            />
                        </div>
                        <div>
                            <ul class="flex flex-col gap-3 font-bold">
                                <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Quick Menu</li>
                                <li><a href="index.html" class="inline-block transition hover:scale-110 hover:text-secondary">Home</a></li>
                                <li><a href="portfolio.html" class="inline-block transition hover:scale-110 hover:text-secondary">Portfolio</a></li>
                                <li><a href="services.html" class="inline-block transition hover:scale-110 hover:text-secondary">Service</a></li>
                                <li><a href="team.html" class="inline-block transition hover:scale-110 hover:text-secondary">Team</a></li>
                                <li><a href="about-us.html" class="inline-block transition hover:scale-110 hover:text-secondary">About Us</a></li>
                                <li><a href="career.html" class="inline-block transition hover:scale-110 hover:text-secondary">Career</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="flex flex-col gap-3 font-bold">
                                <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Services</li>
                                <li>
                                    <a href="services-detail.html" class="inline-block transition hover:scale-110 hover:text-secondary">UI/UX Design</a>
                                </li>
                                <li>
                                    <a href="services-detail.html" class="inline-block transition hover:scale-110 hover:text-secondary">Web Development</a>
                                </li>
                                <li>
                                    <a href="services-detail.html" class="inline-block transition hover:scale-110 hover:text-secondary">Digital Marketing</a>
                                </li>
                                <li>
                                    <a href="services-detail.html" class="inline-block transition hover:scale-110 hover:text-secondary">App Development</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="flex flex-col gap-3 font-bold">
                                <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Legal</li>
                                <li>
                                    <a href="terms-conditions.html" class="inline-block transition hover:scale-110 hover:text-secondary">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html" class="inline-block transition hover:scale-110 hover:text-secondary">Privacy Policy</a>
                                </li>
                                <li><a href="faq.html" class="inline-block transition hover:scale-110 hover:text-secondary">FAQs</a></li>
                                <li><a href="blog.html" class="inline-block transition hover:scale-110 hover:text-secondary">Blog</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="flex flex-col gap-3 font-bold">
                                <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Information</li>
                                <li>164 Brighton Ave, Allston, Maine, U.S. - 02134</li>
                                <li>
                                    <a href="tel:+(617) 254-2333" class="inline-block transition hover:scale-110 hover:text-secondary">+(617) 254-2333</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] py-5 dark:border-t-2 dark:border-white/5 dark:bg-none">
                    <div class="container">
                        <div class="flex flex-col items-center justify-between text-center font-bold dark:text-white md:flex-row">
                            <div>
                                Copyright© <span class="curr-year">2022</span>
                                <a href="javascript:" class="text-primary transition hover:text-secondary">Plurk Technologies Pvt. Ltd.</a>
                            </div>
                            <div>Need help? Visit the <a href="contact-us.html" class="text-secondary transition hover:text-primary">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
@endsection