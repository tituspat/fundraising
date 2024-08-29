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

    <div class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent">
        @include('layouts.navbar-2')
        <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
            <div class="overflow-hidden bg-black pt-[82px] sm:-mx-[250px] sm:rounded-b-[50%] lg:-mx-[150px] lg:pt-[106px]">
                <div class="relative">
                    <img src="{{asset('vendor/plurk/images/banner-lefticon.png')}}" alt="banner-lefticon" class="absolute left-0 top-20 sm:left-[250px] lg:left-[150px]" />
                    <img
                        src="{{asset('vendor/plurk/images/banner-rightIcon.png')}}"
                        alt="banner-rightIcon"
                        class="absolute right-0 -top-4 sm:right-[250px] lg:right-[150px]"
                    />
                    <div class="container">
                        <div class="relative bg-[url(../images/world-map.png)] bg-cover bg-top bg-no-repeat pt-14 pb-0 lg:pt-20 lg:pb-60 xl:pt-36">
                            <div class="relative z-[1] text-center text-white lg:w-3/5 ltr:lg:text-left rtl:lg:text-right xl:w-1/2">
                                <h2 class="text-4xl font-extrabold leading-normal sm:text-5xl lg:text-[70px] lg:leading-[90px]">
                                    Halo,<span class="italic text-primary"></span> <span class="italic text-secondary">Sahabat</span> Tabanan
                                </h2>
                                <p class="my-8 text-lg lg:w-[90%]">
                                    Mari majukan Tabanan agar lebih baik dan sejahtera.
                                </p>
                                <a href="about-us.html" class="btn mx-auto mt-2 block w-fit bg-white lg:mx-0 lg:rtl:ml-auto">read more</a>
                            </div>
                            <div
                                class="bottom-0 mx-auto w-auto ltr:right-0 rtl:left-0 md:w-[540px] lg:absolute xl:w-[650px]"
                                data-aos="fade-left"
                                data-aos-duration="1000"
                            >
                                <img src="{{asset('img/pura.png')}}" alt="home-banner-icon" class="rtl:rotate-y-180" style="scale: 110%; transform: translate(0, -5%);" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--<section class="overflow-x-hidden bg-white py-14 dark:bg-gray-dark">
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
            </section>--}}

            <div class="bg-gradient-to-t from-white/50 to-transparent py-14 dark:bg-none md:py-20">
                <div class="container">
                    <div class="heading text-center">
                        <!-- <h6>Company Facts</h6> -->
                        <h4>Kenali Lebih Dekat</h4>
                    </div>
                    <div class="grid items-center gap-y-16 gap-x-8 lg:grid-cols-2">
                        <div class="relative">
                            <img src="{{ asset('vendor/plurk/images/personal-portfolio/about-block.pn') }}" alt=""
                                class="absolute top-8 hidden ltr:-left-16 rtl:-right-16 dark:hidden md:block"
                                data-aos="fade-right" data-aos-duration="1000" />
                                <img src="{{ asset('img/giri.jpg') }}" alt="" class="h-full w-full object-cover" style="background-color: burlywood" />
                        </div>
                        <div>
                            <div class="mb-2">
                                <h6 class="mb-4 text-lg font-extrabold uppercase text-secondary"><span
                                        class="text-primary">/</span> Sahabat Tabanan</h6>
                                <h2 class="text-3xl font-black leading-normal text-black dark:text-white md:text-[40px]">
                                    {{ $nama_calon }}
                                </h2>
                            </div>
                            <p class="text-lg font-medium">
                                {!! $profile !!}
                            </p>
                            {{--<div class="my-6 grid gap-4 text-lg font-bold text-black dark:text-white sm:mt-12 sm:mb-8 sm:grid-cols-2">
                                <div class="flex items-center gap-3">
                                    <h2 class="text-4xl font-black text-primary md:text-7xl">12</h2>
                                    <p>Years of experience</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <h2 class="text-4xl font-black text-secondary md:text-7xl">150</h2>
                                    <p>Successful projects</p>
                                </div>
                            </div>--}}
                            {{-- <p class="text-lg font-medium">
                                Saya percaya bahwa dengan kerja keras, ketulusan hati, dan komitmen yang kuat, saya dapat
                                membawa perubahan yang positif bagi masyarakat di Kabupaten Tabanan. Saya sangat
                                mengharapkan dukungan dan doa dari seluruh masyarakat agar saya dapat terpilih dan
                                mewujudkan visi dan misi yang telah saya tetapkan.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{--<section class="bg-gradient-to-t from-white/50 to-transparent py-5 dark:bg-none md:py-10">
                <div class="absolute top-0 z-[1] h-full w-full bg-white ltr:left-0 rtl:right-0 dark:bg-black xl:w-[85%] xl:rounded-r-[32px]"></div> 
                    <div class="absolute -top-3 hidden h-full w-full rounded-r-[32px] bg-white/50 ltr:left-3 rtl:right-3 dark:bg-gray-dark xl:inline-block xl:w-[85%]"></div>
                        <div class="absolute hidden h-full w-full rounded-r-[32px] rounded-l-[32px] bg-white/50 ltr:left-3 rtl:right-3 dark:bg-gray-dark xl:inline-block xl:w-[100%]"></div>
                        <div class="flex flex-col px-10 pb-10 justify-center items-center">
                            <div>
                                <div class="heading mb-10 text-center">
                                    <h4>Visi & Misi</h4>
                                </div>
                                <div class="heading text-center">
                                    <h6>Visi</h6>
                                    <p class="text-black dark:text-white text-center text-lg font-semibold leading-[30px] ">
                                        {{ $visi }}
                                    </p>
                                    <h6 class="mt-10">Misi</h6>
                                </div>
                            </div>
                            <div class="flex flex-wrap justify-center items-start gap-[30px]">
                                @foreach($misi as $index => $misiItem)
                                <div data-aos="fade-up" data-aos-duration="1000">
                                    <div class="flex flex-col w-[200px] h-[200px] items-center justify-start gap-[10px] rounded-[10px] border border-transparent bg-secondary/10 py-6 px-5 transition hover:border-secondary hover:bg-transparent">
                                        <span class="flex h-[50px] w-[50px] min-w-[50px] items-center justify-center rounded-full bg-secondary text-lg text-white">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                    <div>
                                    <p class="text-sm text-center dark:text-white font-semibold text-black">
                                        {{ trim($misiItem) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>--}}

            <section class="py-12 dark:bg-gray-dark lg:py-20">
                <div class="container">
                    <div class="text-center ltr:md:text-left rtl:md:text-right">
                        <div class="mx-auto inline-flex items-center gap-2.5 bg-black p-2.5">
                            <span>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.09106 0.922891C4.26412 0.0268889 5.36879 -0.310967 6.01328 0.335155L8.72195 3.05047C8.88268 3.21162 9.08805 3.32082 9.31153 3.36366L13.0771 4.09131C13.9731 4.26422 14.3109 5.36877 13.6648 6.01338L10.9497 8.72186C10.7886 8.88263 10.6793 9.08815 10.6362 9.31148L9.9089 13.0771C9.73584 13.9731 8.63117 14.311 7.98668 13.6648L5.27801 10.9499C5.11728 10.7888 4.91191 10.6796 4.68842 10.6363L0.922825 9.90907C0.0268234 9.73578 -0.310912 8.63124 0.335135 7.98663L3.05025 5.27815C3.2114 5.11738 3.32061 4.91186 3.36376 4.68853L4.09106 0.922891Z"
                                        fill="#B476E5"
                                    />
                                </svg>
                            </span>
                            <p class="text-lg font-extrabold text-white">Mimpi Saya</p>
                            <span>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.091 0.922891C4.26406 0.0268889 5.36872 -0.310967 6.01322 0.335155L8.72189 3.05047C8.88262 3.21162 9.08799 3.32082 9.31147 3.36366L13.0771 4.09131C13.9731 4.26422 14.3108 5.36877 13.6648 6.01338L10.9496 8.72186C10.7885 8.88263 10.6793 9.08815 10.6361 9.31148L9.90883 13.0771C9.73578 13.9731 8.63111 14.311 7.98662 13.6648L5.27795 10.9499C5.11721 10.7888 4.91185 10.6796 4.68836 10.6363L0.922764 9.90907C0.0267624 9.73578 -0.310973 8.63124 0.335074 7.98663L3.05019 5.27815C3.21134 5.11738 3.32055 4.91186 3.3637 4.68853L4.091 0.922891Z"
                                        fill="#47BDFF"
                                    />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <h3
                        class="mt-7 text-center text-3xl font-extrabold text-black dark:text-white md:text-[50px] md:leading-[70px] ltr:md:text-left rtl:md:text-right"
                    >
                        Terwujudnya masyarakat Tabanan yang SAHABAT
                    </h3>
                    <p class="mt-2.5 text-center text-lg font-medium ltr:md:text-left rtl:md:text-right">
                        (Sinergi, Andal, Humanis, Antikorupsi, Amanah, dan Terpercaya)
                    </p>
                    <div
                        class="mt-12 grid gap-[30px] text-center sm:grid-cols-2 ltr:sm:text-left rtl:sm:text-right md:grid-cols-3"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        <div>
                            <span>
                                <svg class="mx-auto h-[42px] w-[42px] sm:mx-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M21 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V3M6 15L10 11L14 15L20 9M20 9V13M20 9H16" stroke="#d32f2f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </span>
                            <h5 class="mt-5 text-lg font-extrabold text-black dark:text-white">Ekonomi yang Produktif</h5>
                            <p class="mt-2.5 text-[15px] font-semibold">Memaksimalkan setiap potensi perekonomian masyarakat Tabanan menjadi lebih produktif dan berdaya saing.</p>
                        </div>
                        <div>
                            <span>
                                <svg class="mx-auto h-[42px] w-[42px] sm:mx-0" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.384"></g><g id="SVGRepo_iconCarrier"> <path d="M10.255 4.18806C9.84269 5.17755 8.68655 5.62456 7.71327 5.17535C6.10289 4.4321 4.4321 6.10289 5.17535 7.71327C5.62456 8.68655 5.17755 9.84269 4.18806 10.255C2.63693 10.9013 2.63693 13.0987 4.18806 13.745C5.17755 14.1573 5.62456 15.3135 5.17535 16.2867C4.4321 17.8971 6.10289 19.5679 7.71327 18.8246C8.68655 18.3754 9.84269 18.8224 10.255 19.8119C10.9013 21.3631 13.0987 21.3631 13.745 19.8119C14.1573 18.8224 15.3135 18.3754 16.2867 18.8246C17.8971 19.5679 19.5679 17.8971 18.8246 16.2867C18.3754 15.3135 18.8224 14.1573 19.8119 13.745C21.3631 13.0987 21.3631 10.9013 19.8119 10.255C18.8224 9.84269 18.3754 8.68655 18.8246 7.71327C19.5679 6.10289 17.8971 4.4321 16.2867 5.17535C15.3135 5.62456 14.1573 5.17755 13.745 4.18806C13.0987 2.63693 10.9013 2.63693 10.255 4.18806Z" stroke="#d32f2f" stroke-width="1.32" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="#d32f2f" stroke-width="1.32"></path> </g></svg>
                                
                            </span>
                            <h5 class="mt-5 text-lg font-extrabold text-black dark:text-white">Sarana dan Prasarana Umum</h5>
                            <p class="mt-2.5 text-[15px] font-semibold">
                                Meningkatkan sarana dan prasarana umum untuk kesejahteraan masyarakat.
                            </p>
                        </div>
                        <div>
                            <span>
                                <svg fill="#d32f2f" class="mx-auto h-[42px] w-[42px] sm:mx-0" viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" stroke="#d32f2f" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M22,3H19V2a1,1,0,0,0-1-1H6A1,1,0,0,0,5,2V3H2A1,1,0,0,0,1,4V6a4.994,4.994,0,0,0,4.276,4.927A7.009,7.009,0,0,0,11,15.92V18H7a1,1,0,0,0-.949.684l-1,3A1,1,0,0,0,6,23H18a1,1,0,0,0,.948-1.316l-1-3A1,1,0,0,0,17,18H13V15.92a7.009,7.009,0,0,0,5.724-4.993A4.994,4.994,0,0,0,23,6V4A1,1,0,0,0,22,3ZM5,8.829A3.006,3.006,0,0,1,3,6V5H5ZM16.279,20l.333,1H7.387l.334-1ZM17,9A5,5,0,0,1,7,9V3H17Zm4-3a3.006,3.006,0,0,1-2,2.829V5h2ZM10.667,8.667,9,7.292,11,7l1-2,1,2,2,.292L13.333,8.667,13.854,11,12,9.667,10.146,11Z"></path></g></svg>
                            
                            </span>
                            <h5 class="mt-5 text-lg font-extrabold text-black dark:text-white">Prestasi Masyarakat</h5>
                            <p class="mt-2.5 text-[15px] font-semibold">
                                Mendukung kegiatan prestasi masyarakat Tabanan di berbagai bidang.
                            </p>
                        </div>
                        <div>
                            <span>
                                <svg class="mx-auto h-[42px] w-[42px] sm:mx-0" fill="#d32f2f" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#d32f2f" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="2.112"></g><g id="SVGRepo_iconCarrier"> <title>hands-pray</title> <path d="M25.063 15.214c-0.458-1.030-0.941-1.905-1.49-2.732l0.043 0.068c-0.174-0.282-0.348-0.563-0.518-0.849-0.807-1.36-1.51-2.448-2.215-3.425-0.342-0.479-0.679-0.897-1.037-1.294l0.011 0.013c-0.267-0.326-0.6-0.587-0.981-0.763l-0.017-0.007c-0.081-0.031-0.175-0.050-0.274-0.050-0.055 0-0.108 0.006-0.159 0.016l0.005-0.001c-0.88 0.128-1.615 0.658-2.021 1.395l-0.007 0.014c-0.155 0.365-0.245 0.79-0.245 1.236 0 0.496 0.111 0.967 0.311 1.387l-0.008-0.020 2.077 4.622c-1.166 0.027-2.102 0.979-2.102 2.149 0 0.057 0.002 0.113 0.007 0.169l-0-0.007v3.11l-0.435 1.485-0.435-1.485v-3.11c0.004-0.048 0.006-0.104 0.006-0.16 0-1.171-0.936-2.123-2.1-2.148l-0.002-0 2.072-4.613c0.194-0.404 0.307-0.878 0.307-1.379 0-0.445-0.090-0.87-0.252-1.256l0.008 0.021c-0.413-0.751-1.148-1.282-2.013-1.408l-0.015-0.002c-0.047-0.010-0.1-0.015-0.155-0.015-0.099 0-0.193 0.018-0.28 0.051l0.005-0.002c-0.405 0.189-0.744 0.457-1.010 0.787l-0.004 0.005c-0.342 0.379-0.672 0.79-0.979 1.22l-0.028 0.042c-0.707 0.977-1.411 2.064-2.216 3.424-0.167 0.281-0.34 0.561-0.512 0.84-0.509 0.762-0.994 1.639-1.406 2.557l-0.047 0.116c-0.459 1.106-0.726 2.39-0.726 3.737 0 1.178 0.204 2.309 0.579 3.358l-0.022-0.070c0.452 1.090 0.82 2.367 1.044 3.692l0.015 0.107h-0.69c-0.414 0-0.75 0.336-0.75 0.75v0 3.211c0 0.414 0.336 0.75 0.75 0.75h17.712c0.414-0 0.75-0.336 0.75-0.75v0-3.211c-0-0.414-0.336-0.75-0.75-0.75h-0.691c0.244-1.444 0.616-2.731 1.114-3.951l-0.045 0.123c0.347-0.971 0.548-2.092 0.548-3.259 0-1.347-0.267-2.632-0.752-3.805l0.024 0.066zM8.187 21.715c-0.289-0.823-0.456-1.771-0.456-2.758 0-1.143 0.224-2.234 0.63-3.231l-0.021 0.057c0.424-0.948 0.871-1.753 1.379-2.514l-0.039 0.062c0.178-0.287 0.355-0.575 0.527-0.865 0.78-1.318 1.461-2.369 2.139-3.307 0.305-0.429 0.606-0.804 0.926-1.16l-0.010 0.011c0.083-0.089 0.184-0.199 0.276-0.28 0.31 0.075 0.566 0.267 0.724 0.525l0.003 0.005c0.059 0.168 0.092 0.363 0.092 0.565 0 0.277-0.064 0.539-0.177 0.773l0.005-0.011-2.892 6.436c-0.041 0.090-0.065 0.196-0.065 0.308v0 6.437c0 0.414 0.336 0.75 0.75 0.75s0.75-0.336 0.75-0.75v0-5.632c0-1.271 1.343-1.268 1.345 0v3.218c0 0.001 0 0.002 0 0.003 0 0.074 0.011 0.146 0.032 0.213l-0.001-0.005 1.147 3.918v1.557h-5.902c-0.236-1.618-0.642-3.074-1.207-4.449l0.045 0.124zM24.113 29.25h-16.212v-1.711h16.212zM23.838 21.686c-0.522 1.258-0.931 2.724-1.158 4.25l-0.013 0.104h-5.902v-1.557l1.147-3.918c0.019-0.062 0.030-0.134 0.030-0.208 0-0.001 0-0.002 0-0.003v0-3.218c-0.001-0.969 0.784-1.019 1.118-0.678 0.142 0.163 0.229 0.378 0.229 0.613 0 0.023-0.001 0.045-0.002 0.067l0-0.003v5.632c0 0.414 0.336 0.75 0.75 0.75s0.75-0.336 0.75-0.75v0-6.437c-0-0.111-0.025-0.217-0.068-0.312l0.002 0.005-2.896-6.446c-0.104-0.221-0.165-0.481-0.165-0.754 0-0.199 0.032-0.391 0.092-0.57l-0.004 0.013c0.16-0.266 0.418-0.46 0.721-0.534l0.008-0.002c0.094 0.084 0.201 0.199 0.295 0.303 0.303 0.337 0.597 0.704 0.871 1.087l0.026 0.038c0.676 0.938 1.357 1.988 2.139 3.309 0.174 0.293 0.354 0.582 0.531 0.872 0.467 0.697 0.914 1.5 1.294 2.338l0.044 0.107c0.386 0.939 0.61 2.029 0.61 3.172 0 0.977-0.164 1.916-0.466 2.791l0.018-0.060zM6.671 12.335c0.050-0.098 0.079-0.213 0.079-0.335 0-0.292-0.167-0.545-0.411-0.669l-0.004-0.002-4-2c-0.098-0.050-0.213-0.079-0.335-0.079-0.414 0-0.75 0.336-0.75 0.75 0 0.292 0.167 0.545 0.411 0.669l0.004 0.002 4 2c0.098 0.050 0.213 0.079 0.335 0.079 0.292 0 0.545-0.167 0.669-0.411l0.002-0.004zM7.47 8.53c0.136 0.14 0.327 0.227 0.538 0.227 0.414 0 0.75-0.336 0.75-0.75 0-0.211-0.087-0.401-0.227-0.537l-6-6c-0.135-0.131-0.32-0.212-0.523-0.212-0.414 0-0.75 0.336-0.75 0.75 0 0.203 0.081 0.388 0.213 0.523l-0-0zM29.664 9.329l-4 2c-0.248 0.126-0.414 0.379-0.414 0.671 0 0.414 0.336 0.75 0.75 0.75 0.122 0 0.238-0.029 0.34-0.081l-0.004 0.002 4-2c0.248-0.126 0.414-0.379 0.414-0.671 0-0.414-0.336-0.75-0.75-0.75-0.122 0-0.238 0.029-0.34 0.081l0.004-0.002zM24 8.75c0 0 0 0 0.001 0 0.207 0 0.395-0.084 0.531-0.22l6-6c0.134-0.136 0.218-0.322 0.218-0.528 0-0.415-0.336-0.751-0.751-0.751-0.207 0-0.394 0.083-0.529 0.218l-6 6c-0.136 0.136-0.22 0.323-0.22 0.53 0 0.414 0.336 0.75 0.75 0.75 0 0 0.001 0 0.001 0h-0zM20.621 4.648c0.1 0.054 0.219 0.085 0.345 0.085 0 0 0.001 0 0.001 0h-0c0.288-0 0.538-0.162 0.664-0.399l0.002-0.004 1.033-1.983c0.052-0.1 0.083-0.218 0.083-0.343 0-0.415-0.336-0.751-0.751-0.751-0.287 0-0.536 0.16-0.662 0.396l-0.002 0.004-1.033 1.983c-0.053 0.1-0.084 0.219-0.084 0.346 0 0.288 0.162 0.538 0.4 0.664l0.004 0.002zM10.368 4.33c0.129 0.237 0.376 0.395 0.661 0.395 0.414 0 0.75-0.336 0.75-0.75 0-0.123-0.030-0.24-0.083-0.343l0.002 0.004-1.033-1.983c-0.129-0.237-0.376-0.395-0.661-0.395-0.414 0-0.75 0.336-0.75 0.75 0 0.123 0.030 0.24 0.083 0.343l-0.002-0.004z"></path> </g></svg>
                                {{--<svg class="mx-auto h-[42px] w-[42px] sm:mx-0" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M34.258 14.4234L33.3153 12.7876C32.5178 11.4033 30.7504 10.9259 29.3644 11.72C28.7046 12.1087 27.9173 12.219 27.1761 12.0265C26.435 11.8342 25.8008 11.3547 25.4135 10.6942C25.1643 10.2744 25.0303 9.79614 25.0253 9.30792C25.0477 8.52519 24.7525 7.76669 24.2066 7.2052C23.6608 6.64372 22.911 6.32707 22.1279 6.32739H20.2287C19.4615 6.32738 18.726 6.63308 18.1848 7.17684C17.6437 7.72061 17.3415 8.4576 17.3453 9.22474C17.3225 10.8086 16.0319 12.0807 14.4479 12.0805C13.9596 12.0755 13.4815 11.9416 13.0616 11.6923C11.6755 10.8981 9.90813 11.3756 9.11062 12.7598L8.09863 14.4234C7.30208 15.8058 7.77309 17.572 9.15221 18.3743C10.0487 18.8918 10.6009 19.8484 10.6009 20.8835C10.6009 21.9186 10.0487 22.8751 9.15221 23.3927C7.77484 24.1895 7.30332 25.9515 8.09863 27.3297L9.05517 28.9794C9.42884 29.6537 10.0558 30.1512 10.7972 30.3619C11.5387 30.5727 12.3337 30.4792 13.0061 30.1023C13.6671 29.7166 14.4548 29.611 15.1942 29.8088C15.9335 30.0066 16.5631 30.4916 16.9432 31.1559C17.1924 31.5757 17.3262 32.054 17.3314 32.5422C17.3314 34.1424 18.6286 35.4395 20.2287 35.4395H22.1279C23.7226 35.4395 25.0176 34.1508 25.0253 32.556C25.0216 31.7865 25.3257 31.0474 25.8698 30.5033C26.414 29.959 27.1531 29.655 27.9226 29.6587C28.4096 29.6718 28.8859 29.8051 29.309 30.0468C30.6914 30.8434 32.4576 30.3724 33.2599 28.9933L34.258 27.3297C34.6443 26.6666 34.7504 25.8768 34.5527 25.1352C34.3548 24.3936 33.8696 23.7615 33.2043 23.3788C32.5392 22.9961 32.054 22.364 31.8561 21.6224C31.6584 20.8809 31.7645 20.091 32.1508 19.4279C32.402 18.9892 32.7658 18.6256 33.2043 18.3743C34.5752 17.5725 35.0451 15.8165 34.258 14.4372V14.4234Z"
                                        stroke="#B476E5"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M21.1852 24.876C23.3902 24.876 25.1777 23.0885 25.1777 20.8835C25.1777 18.6784 23.3902 16.8909 21.1852 16.8909C18.9802 16.8909 17.1927 18.6784 17.1927 20.8835C17.1927 23.0885 18.9802 24.876 21.1852 24.876Z"
                                        stroke="#B476E5"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>--}}
                            </span>
                            <h5 class="mt-5 text-lg font-extrabold text-black dark:text-white">Dukungan Keagamaan</h5>
                            <p class="mt-2.5 text-[15px] font-semibold">
                                Meningkatkan dukungan terhadap kegiatan keagamaan.
                            </p>
                        </div>
                        <div>
                            <svg class="mx-auto h-[42px] w-[42px] sm:mx-0" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#d32f2f" stroke="#d32f2f" stroke-width="0.00512"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.024"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#d32f2f;} </style> <g> <path class="st0" d="M386.234,78.954l-49.861,49.861l4.635,4.814c-3.302,2.667-6.644,5.269-9.888,7.579 c-5.236,3.74-10.262,6.74-13.669,8.147c-0.22,0.098-1.146,0.358-2.984,0.35c-2.936,0.032-7.847-0.716-13.864-1.634 c-6.042-0.911-13.27-1.902-21.417-1.911c-7.108-0.024-14.946,0.838-23.199,3.106c-8.236-2.26-16.059-3.106-23.149-3.097 c-8.156,0-15.384,0.992-21.426,1.911c-6.017,0.918-10.92,1.667-13.855,1.634c-1.846,0.016-2.765-0.26-2.952-0.35 c-3.635-1.488-9.116-4.806-14.758-8.912c-2.919-2.122-5.895-4.448-8.847-6.838l4.627-4.798l-49.861-49.861L0,209.216l49.861,49.861 l14.595-15.116l32.216,28.117c0.902,5.391,2.602,10.481,4.562,15.312c1.276,3.074,2.675,6.033,4.107,8.814 c-3.115,5.156-4.814,11.043-4.798,17.011c-0.008,5.92,1.618,11.969,4.96,17.344c5.082,8.172,13.222,13.311,22.011,14.937 c0.05,5.814,1.66,11.742,4.936,17.011c6.221,10.002,16.987,15.547,27.964,15.53c0.423,0,0.854-0.065,1.276-0.081 c0.553,4.651,2.082,9.286,4.7,13.498c6.221,10.001,16.994,15.547,27.955,15.53c1.09,0,2.172-0.114,3.269-0.22 c0.52,4.188,1.911,8.367,4.261,12.14c5.668,9.108,15.474,14.165,25.45,14.141c5.383,0.008,10.896-1.456,15.791-4.497l14.946-9.301 c2.944,1.902,6.033,3.577,9.277,4.943c6.042,2.545,12.571,4.106,19.361,4.114c7.448,0.033,15.311-2.008,22.076-6.765 c4.407-3.073,8.139-7.286,11.196-12.253c0.472,0.016,0.854,0.098,1.342,0.106c3.098,0,6.497-0.464,9.864-1.513 c3.39-1.032,6.757-2.578,10.351-4.634c8.57-4.83,13.709-11.937,16.206-18.027c0.553-1.333,0.951-2.586,1.309-3.797 c2.074-0.658,4.058-1.464,5.854-2.504c6.627-3.814,10.945-9.611,13.604-15.433c2.667-5.88,3.838-11.986,3.854-17.856 c0-0.578-0.073-1.139-0.098-1.708c4.334-1.772,8.228-4.236,11.546-7.139c3.399-2.977,6.253-6.44,8.375-10.392 c2.115-3.935,3.53-8.44,3.538-13.375c0.008-3.212-0.651-6.595-2.09-9.766c-0.464-1.008-1.122-1.935-1.724-2.87 c2.53-4.53,5.106-9.635,7.22-15.148c1.586-4.172,2.92-8.546,3.684-13.141l33.59-29.313l15.742,16.303L512,209.216L386.234,78.954z M138.744,320.428l-0.578,0.366c-1.504,0.928-3.082,1.342-4.708,1.35c-3.017-0.016-5.912-1.488-7.611-4.228 c-0.927-1.504-1.35-3.09-1.35-4.7c0.016-3.033,1.48-5.912,4.212-7.611l19.751-12.27c1.504-0.935,3.082-1.341,4.691-1.358 c3.033,0.032,5.912,1.48,7.62,4.236l10.172-6.318l-10.172,6.326c0.927,1.496,1.341,3.073,1.35,4.684 c-0.017,2.114-0.773,4.131-2.138,5.757L143.02,317.2C141.476,318.159,140.069,319.273,138.744,320.428z M165.113,352.733 c-1.504,0.927-3.082,1.35-4.7,1.35c-3.025-0.016-5.919-1.48-7.619-4.22c-0.928-1.504-1.342-3.098-1.35-4.708 c0.007-2.097,0.764-4.114,2.122-5.724l16.97-10.562c1.537-0.952,2.928-2.057,4.253-3.212l0.618-0.374 c1.504-0.935,3.09-1.35,4.692-1.35c3.041,0.016,5.911,1.48,7.618,4.228c0.927,1.504,1.342,3.073,1.35,4.692 c-0.016,3.016-1.471,5.911-4.236,7.627L165.113,352.733z M218.771,369.419l-19.726,12.262c-1.496,0.928-3.074,1.35-4.7,1.35 c-3.017-0.016-5.912-1.48-7.611-4.22c-0.927-1.512-1.341-3.09-1.35-4.708c0.025-3.033,1.48-5.903,4.212-7.611l19.751-12.27 c1.504-0.935,3.082-1.341,4.691-1.341c3.033,0.007,5.912,1.471,7.62,4.22c0.926,1.505,1.341,3.082,1.35,4.7 C222.991,364.816,221.536,367.694,218.771,369.419z M249.353,389.421c0.625,1,0.894,2.041,0.902,3.13 c-0.016,2.025-0.984,3.952-2.846,5.115l-16.938,10.521c-1.008,0.634-2.049,0.902-3.147,0.902c-2.032-0.008-3.959-0.992-5.106-2.829 c-0.626-1.017-0.895-2.058-0.903-3.146c0.024-2.042,0.992-3.953,2.821-5.091h0.008l16.954-10.538 c1.033-0.642,2.066-0.911,3.147-0.911c2.041,0.016,3.952,0.984,5.098,2.83l10.18-6.31L249.353,389.421z M381.071,315.061 c-0.87,1.683-2.854,3.878-5.366,5.415c-2.513,1.554-5.432,2.464-8.229,2.456c-0.993,0-1.952,0.17-2.887,0.414 c-1.708-0.374-3.416-0.894-5.098-1.561c-5.212-2.033-10.082-5.326-13.522-8.107c-1.724-1.39-3.09-2.642-4.001-3.512l-1.008-1 l-0.22-0.228l-0.033-0.032H340.7c-3.351-3.643-9.026-3.887-12.677-0.537c-3.651,3.351-3.903,9.026-0.544,12.701 c0.3,0.309,4.814,5.236,12.205,10.311c3.708,2.537,8.139,5.123,13.237,7.123c1.179,0.464,2.407,0.894,3.668,1.285 c0.35,0.788,0.797,1.537,1.325,2.244l-0.024,0.017c0.065,0.048,0.553,1.594,0.512,3.578c0.058,3.309-1.146,7.643-2.878,10.033 c-0.845,1.22-1.707,1.992-2.544,2.472c-0.854,0.472-1.716,0.781-3.334,0.805l-0.578-0.008c-0.342-0.016-0.666,0.041-1,0.057 c-0.016,0-0.024,0-0.024,0c-7.79,0.033-15.042-3.309-20.393-6.968c-2.667-1.805-4.806-3.643-6.245-4.992 c-0.708-0.667-1.252-1.22-1.586-1.561l-0.349-0.374l-0.057-0.073h-0.008c-3.244-3.724-8.895-4.131-12.644-0.886 c-3.757,3.252-4.163,8.92-0.911,12.676l-0.008-0.007c0.35,0.39,4.497,5.17,11.71,10.082c4.748,3.211,10.944,6.537,18.303,8.456 c-0.081,0.212-0.13,0.423-0.228,0.635c-0.943,2.13-2.293,4.325-5.968,6.472c-2.481,1.416-4.253,2.155-5.497,2.529 c-1.252,0.374-1.951,0.448-2.846,0.455c-1.162,0.017-2.911-0.244-5.822-0.838c-0.528-0.113-1.056-0.146-1.585-0.178 c-0.196-0.082-0.382-0.155-0.594-0.261c-2.976-1.399-6.603-3.928-9.278-6.082c-1.342-1.065-2.48-2.041-3.261-2.732l-0.878-0.797 l-0.203-0.195l-0.041-0.032c-3.586-3.431-9.278-3.301-12.709,0.284c-3.423,3.586-3.293,9.278,0.293,12.701 c0.187,0.17,3.968,3.798,9.269,7.603c0.943,0.667,1.984,1.342,3.025,2.008c-1.464,2.334-2.992,3.936-4.488,5.001 c-2.391,1.643-4.993,2.423-8.343,2.44c-3,0.008-6.53-0.732-10.058-2.228c-1.171-0.488-2.317-1.179-3.472-1.821 c0.675-2.521,1.049-5.131,1.041-7.75c0.008-5.391-1.472-10.904-4.513-15.791c-5.163-8.302-13.774-13.181-22.792-13.978 c0-0.326,0.056-0.65,0.056-0.984c0.008-5.911-1.618-11.977-4.952-17.344v0.017c-6.228-10.034-17.011-15.58-27.972-15.556 c-0.422,0-0.854,0.073-1.276,0.09c-0.553-4.66-2.082-9.278-4.699-13.49h0.007c-5.082-8.188-13.229-13.326-22.019-14.937 c-0.056-5.814-1.658-11.742-4.936-17.011h0.008c-6.22-10.009-17.011-15.563-27.972-15.547c-5.928,0-11.969,1.627-17.344,4.96 l-11.538,7.172c-0.277-0.634-0.626-1.252-0.878-1.887c-2.008-4.805-3.269-9.546-3.407-12.814l-0.268-5.058l-38.598-33.695 l73.18-75.792c3.741,3.066,7.579,6.107,11.515,8.953c6.521,4.7,12.985,8.847,19.588,11.628c4.237,1.748,8.367,2.179,12.157,2.187 c6.066-0.024,11.627-1.065,17.425-1.911c0.374-0.065,0.764-0.097,1.146-0.155c-7.968,6.838-14.921,14.238-20.8,21.126 c-4.952,5.814-9.131,11.294-12.441,15.766c-3.268,4.448-5.789,8.034-6.895,9.449c-5.448,7.09-7.789,15.571-7.838,24.068 c0.024,7.904,2.122,16.132,7.57,23.085c2.716,3.439,6.326,6.448,10.635,8.497c4.302,2.065,9.229,3.122,14.36,3.122 c6.367-0.017,13.042-1.561,20.109-4.53c22.182-9.383,45.047-15.636,62.252-19.49c8.603-1.919,15.799-3.252,20.816-4.09 c0.944-0.155,1.732-0.285,2.513-0.414l75.271,64.888l0.032,0.016l0.025,0.041C381.73,313.378,381.615,314.053,381.071,315.061z M389.78,260.395l-0.261,5.058c-0.138,2.894-1.122,6.976-2.773,11.205c-0.838,2.211-1.862,4.44-2.935,6.634l-65.92-56.821 c-2.561-2.211-5.976-3.236-9.334-2.813c-0.585,0.114-48.934,6.18-97.047,26.46c-4.789,2.024-8.383,2.65-10.79,2.634 c-1.959,0-3.155-0.35-4.041-0.773c-1.285-0.626-2.204-1.513-3.114-3.212c-0.87-1.674-1.464-4.146-1.455-6.748 c-0.049-3.74,1.285-7.546,2.78-9.35c1.863-2.407,4.139-5.692,7.278-9.937c4.658-6.31,10.985-14.474,18.53-22.418 c7.529-7.944,16.287-15.636,25.467-21.036c12.417-7.293,22.996-9.123,33.022-9.156c6.171-0.008,12.09,0.764,17.864,1.634 c5.789,0.854,11.367,1.878,17.417,1.911c3.781-0.008,7.887-0.439,12.108-2.163l0.056-0.016c6.603-2.781,13.067-6.928,19.588-11.628 c3.912-2.83,7.766-5.887,11.49-8.944l72.035,74.604L389.78,260.395z"></path> </g> </g></svg>
                            <h5 class="mt-5 text-lg font-extrabold text-black dark:text-white">Pelayanan Berkualitas</h5>
                            <p class="mt-2.5 text-[15px] font-semibold">
                                Memberikan pelayanan yang berkualitas dan responsif terhadap kebutuhan masyarakat.
                            </p>
                        </div>
                        {{--<div>
                            <span>
                                <svg class="mx-auto h-[42px] w-[42px] sm:mx-0" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M22.5883 9.04291L26.0436 15.8373C26.2166 16.18 26.5508 16.4192 26.9387 16.4746L34.6742 17.5669C34.9875 17.6078 35.2694 17.7681 35.4619 18.0132C35.823 18.4726 35.7677 19.1229 35.335 19.5182L29.7286 24.8178C29.4436 25.0803 29.3167 25.4653 29.3914 25.8401L30.734 33.3185C30.8281 33.9382 30.3954 34.5187 29.7614 34.6194C29.4988 34.6587 29.2302 34.6179 28.9916 34.5027L22.102 30.972C21.7559 30.7882 21.3412 30.7882 20.9951 30.972L14.0548 34.5216C13.4744 34.8104 12.7642 34.596 12.448 34.0404C12.3271 33.8158 12.2853 33.5605 12.3271 33.3112L13.6698 25.8329C13.7369 25.4595 13.6102 25.0759 13.3327 24.8119L7.69631 19.5139C7.23681 19.0676 7.23383 18.3413 7.69184 17.8921L7.69631 17.8862C7.88579 17.7186 8.11852 17.6063 8.37065 17.5625L16.1076 16.4702C16.494 16.4105 16.8267 16.1742 17.0028 15.8315L20.4549 9.04291C20.5937 8.76728 20.8399 8.55582 21.1383 8.45957C21.4381 8.36186 21.7663 8.3852 22.0483 8.52373C22.2795 8.63603 22.469 8.81832 22.5883 9.04291Z"
                                        stroke="#B476E5"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </span>
                            <h5 class="mt-5 text-lg font-extrabold text-black dark:text-white">Social Media Promotion</h5>
                            <p class="mt-2.5 text-[15px] font-semibold">It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                        </div>--}}
                    </div>
                </div>
            </section>

            {{--<section class="bg-white py-14 dark:bg-gray-dark md:py-20">
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
            </section>--}}

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
                                    class="text-primary">/</span> Program </h6>
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
                        <h2 class="text-3xl font-black leading-normal text-white md:text-[40px]">Rencana Kerja Sahabat Tabanan</h2>
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
                                            <h4 class="py-4 text-sm text-black dark:text-white line-clamp-2 overflow-hidden">
                                                {{--{!!$program->description!!}--}}
                                            </h4>
                                            <a href="/program/{{$program->id}}"
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

            {{--<section class="bg-gradient-to-t from-white/60 to-transparent py-12 dark:bg-none lg:py-24">
                <div class="container">
                    <div class="flex flex-col items-center gap-5 lg:flex-row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="lg:max-w-[790px]">
                            <div class="flex gap-3">
                                <div class="h-[30px] w-[5px] bg-secondary"></div>
                                <h5 class="text-2xl font-extrabold text-black dark:text-white">Latest Blogs</h5>
                            </div>
                            <div class="mt-5 flex flex-col gap-4 rounded-[10px] border border-[#BBBBBB]/50 p-4 dark:border-[#7780A1]/20 md:flex-row">
                                <div class="flex rounded-[10px]">
                                    <div>
                                        <div class="relative overflow-hidden rounded-[10px] md:max-w-[360px]">
                                            <img src="assets/images/blog/blogs1.jpg" alt="" />
                                            <p class="absolute top-5 left-5 rounded bg-primary py-1 px-2.5 text-[12px] font-extrabold leading-4 text-white">
                                                LIFESTYLE
                                            </p>
                                        </div>
                                        <div class="mt-3 mb-4 flex gap-4">
                                            <div class="flex items-center gap-3">
                                                <img src="assets/images/blog/shaun.png" class="w-9" alt="" />
                                                <p class="text-[13px] font-semibold">Shaun Park</p>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <span>
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 5.83325V8.49992L9.66667 10.1666"
                                                            stroke="#969AA9"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        />
                                                        <path
                                                            d="M4.66668 2.72513C5.64725 2.1579 6.78572 1.83325 8.00001 1.83325C11.6819 1.83325 14.6667 4.81802 14.6667 8.49992C14.6667 12.1818 11.6819 15.1666 8.00001 15.1666C4.31811 15.1666 1.33334 12.1818 1.33334 8.49992C1.33334 7.28563 1.65799 6.14716 2.22522 5.16658"
                                                            stroke="#969AA9"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                        />
                                                    </svg>
                                                </span>
                                                <p class="text-[13px] font-semibold">20 May 2022</p>
                                            </div>
                                        </div>
                                        <a
                                            href="javascript:"
                                            class="text-lg font-semibold text-black duration-200 hover:text-secondary dark:text-white dark:hover:text-secondary"
                                            >16 Unheard Ways To Achieve Greater Walker</a
                                        >
                                        <div class="mt-[14px] flex gap-6">
                                            <div class="flex items-center gap-2">
                                                <a href="javascript:">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="9" cy="4.5" r="3" stroke="#7780A1" stroke-width="1.5"></circle>
                                                        <path
                                                            d="M11.25 15.4613C10.5681 15.6464 9.8052 15.75 9 15.75C6.10051 15.75 3.75 14.4069 3.75 12.75C3.75 11.0931 6.10051 9.75 9 9.75C11.8995 9.75 14.25 11.0931 14.25 12.75C14.25 13.009 14.1926 13.2603 14.0846 13.5"
                                                            stroke="#7780A1"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <p class="text-sm font-semibold">Admin</p>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <a href="javascript:">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.7213 14.1831L7.18561 13.5941L6.7213 14.1831ZM9 4.12541L8.45963 4.64551C8.60102 4.79241 8.79612 4.87541 9 4.87541C9.20388 4.87541 9.39898 4.79241 9.54037 4.64551L9 4.12541ZM11.2787 14.1831L11.743 14.7721L11.2787 14.1831ZM5.36961 12.1708C5.04978 11.9076 4.57713 11.9535 4.31391 12.2733C4.05069 12.5932 4.09658 13.0658 4.4164 13.329L5.36961 12.1708ZM1.59199 10.1485C1.79074 10.5119 2.24647 10.6454 2.60988 10.4466C2.9733 10.2479 3.10677 9.79216 2.90801 9.42875L1.59199 10.1485ZM2.25 6.85276C2.25 5.30976 3.12161 4.02553 4.29622 3.48861C5.42355 2.97331 6.96414 3.09175 8.45963 4.64551L9.54037 3.60531C7.66098 1.6527 5.45157 1.31122 3.67262 2.12438C1.94095 2.91593 0.75 4.74856 0.75 6.85276H2.25ZM6.25699 14.7721C6.63944 15.0736 7.06194 15.4049 7.49302 15.6568C7.92386 15.9085 8.4346 16.1249 9 16.1249V14.6249C8.8154 14.6249 8.57614 14.5524 8.24981 14.3617C7.92371 14.1711 7.58186 13.9065 7.18561 13.5941L6.25699 14.7721ZM11.743 14.7721C12.8019 13.9374 14.1903 12.9557 15.2777 11.7313C16.3907 10.478 17.25 8.91043 17.25 6.85276H15.75C15.75 8.4423 15.102 9.67014 14.1561 10.7353C13.1845 11.8293 11.9623 12.6892 10.8144 13.5941L11.743 14.7721ZM17.25 6.85276C17.25 4.74856 16.059 2.91593 14.3274 2.12438C12.5484 1.31122 10.339 1.6527 8.45963 3.60531L9.54037 4.64551C11.0359 3.09175 12.5765 2.97331 13.7038 3.48861C14.8784 4.02553 15.75 5.30976 15.75 6.85276H17.25ZM10.8144 13.5941C10.4181 13.9065 10.0763 14.1711 9.75019 14.3617C9.42386 14.5524 9.1846 14.6249 9 14.6249V16.1249C9.5654 16.1249 10.0761 15.9085 10.507 15.6568C10.9381 15.4049 11.3606 15.0736 11.743 14.7721L10.8144 13.5941ZM7.18561 13.5941C6.58203 13.1183 5.98392 12.6764 5.36961 12.1708L4.4164 13.329C5.04031 13.8425 5.70661 14.3382 6.25699 14.7721L7.18561 13.5941ZM2.90801 9.42875C2.50096 8.68449 2.25 7.84347 2.25 6.85276H0.75C0.75 8.11484 1.0741 9.20162 1.59199 10.1485L2.90801 9.42875Z"
                                                            fill="#7780A1"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <p class="text-sm font-semibold">350</p>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <a href="javascript:">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_1110_13575)">
                                                            <path
                                                                d="M9.81499 16.0408L10.4604 16.4228L10.4604 16.4228L9.81499 16.0408ZM10.2216 15.3539L9.57615 14.9719L10.2216 15.3539ZM7.7784 15.3539L7.13299 15.7359H7.13299L7.7784 15.3539ZM8.18498 16.0408L8.83039 15.6587L8.18498 16.0408ZM0.75 7.875C0.75 8.28921 1.08579 8.625 1.5 8.625C1.91421 8.625 2.25 8.28921 2.25 7.875H0.75ZM2.47836 11.6481C2.31985 11.2654 1.88112 11.0836 1.49844 11.2422C1.11576 11.4007 0.934029 11.8394 1.09254 12.2221L2.47836 11.6481ZM5.84218 14.2436L5.82926 14.9935H5.82926L5.84218 14.2436ZM3.81494 13.9645L3.52792 14.6575H3.52793L3.81494 13.9645ZM16.2145 11.9351L16.9075 12.2221L16.2145 11.9351ZM12.1578 14.2436L12.1449 13.4937L12.1578 14.2436ZM14.1851 13.9645L14.4721 14.6575H14.4721L14.1851 13.9645ZM14.7094 2.0526L14.3175 2.69208L14.7094 2.0526ZM15.9474 3.29063L16.5869 2.89876V2.89876L15.9474 3.29063ZM3.29063 2.0526L2.89876 1.41312V1.41312L3.29063 2.0526ZM2.0526 3.29063L1.41312 2.89876H1.41312L2.0526 3.29063ZM7.05209 14.4074L7.42917 13.7591L7.42916 13.7591L7.05209 14.4074ZM10.4604 16.4228L10.867 15.7359L9.57615 14.9719L9.16958 15.6587L10.4604 16.4228ZM7.13299 15.7359L7.53956 16.4228L8.83039 15.6587L8.42382 14.9719L7.13299 15.7359ZM9.16958 15.6587C9.13625 15.7151 9.0781 15.7499 8.99998 15.7499C8.92187 15.7499 8.86372 15.7151 8.83039 15.6587L7.53956 16.4228C8.19235 17.5257 9.80762 17.5257 10.4604 16.4228L9.16958 15.6587ZM7.875 2.25H10.125V0.75H7.875V2.25ZM15.75 7.875V8.625H17.25V7.875H15.75ZM5.85511 13.4937C4.91351 13.4775 4.45251 13.4168 4.10195 13.2716L3.52793 14.6575C4.16782 14.9225 4.88782 14.9773 5.82926 14.9935L5.85511 13.4937ZM1.09254 12.2221C1.54926 13.3247 2.4253 14.2007 3.52792 14.6575L4.10195 13.2716C3.36687 12.9672 2.78284 12.3831 2.47836 11.6481L1.09254 12.2221ZM15.75 8.625C15.75 9.5089 15.7496 10.1343 15.7161 10.6258C15.683 11.1106 15.6202 11.4101 15.5216 11.6481L16.9075 12.2221C17.0943 11.7709 17.1743 11.289 17.2126 10.7279C17.2504 10.1735 17.25 9.48838 17.25 8.625H15.75ZM12.1707 14.9935C13.1122 14.9773 13.8322 14.9225 14.4721 14.6575L13.8981 13.2716C13.5475 13.4168 13.0865 13.4775 12.1449 13.4937L12.1707 14.9935ZM15.5216 11.648C15.2172 12.3831 14.6331 12.9672 13.8981 13.2716L14.4721 14.6575C15.5747 14.2007 16.4507 13.3247 16.9075 12.2221L15.5216 11.648ZM10.125 2.25C11.3671 2.25 12.2459 2.25079 12.9287 2.31571C13.6003 2.37956 14.0043 2.50013 14.3175 2.69208L15.1012 1.41312C14.5127 1.05247 13.8521 0.896737 13.0707 0.822442C12.3004 0.749209 11.338 0.75 10.125 0.75V2.25ZM17.25 7.875C17.25 6.66199 17.2508 5.69956 17.1776 4.92933C17.1033 4.14795 16.9475 3.48728 16.5869 2.89876L15.3079 3.6825C15.4999 3.99574 15.6204 4.39972 15.6843 5.07131C15.7492 5.75406 15.75 6.63294 15.75 7.875H17.25ZM14.3175 2.69208C14.7212 2.93945 15.0606 3.27884 15.3079 3.6825L16.5869 2.89876C16.2158 2.29326 15.7067 1.78417 15.1012 1.41312L14.3175 2.69208ZM7.875 0.75C6.66199 0.75 5.69956 0.749209 4.92933 0.822442C4.14795 0.896737 3.48728 1.05247 2.89876 1.41312L3.6825 2.69208C3.99574 2.50013 4.39972 2.37956 5.07131 2.31571C5.75406 2.25079 6.63294 2.25 7.875 2.25V0.75ZM2.25 7.875C2.25 6.63294 2.25079 5.75406 2.31571 5.07131C2.37956 4.39972 2.50013 3.99574 2.69208 3.6825L1.41312 2.89876C1.05247 3.48728 0.896737 4.14795 0.822442 4.92933C0.749209 5.69956 0.75 6.66199 0.75 7.875H2.25ZM2.89876 1.41312C2.29326 1.78417 1.78417 2.29326 1.41312 2.89876L2.69208 3.6825C2.93945 3.27884 3.27884 2.93945 3.6825 2.69208L2.89876 1.41312ZM8.42382 14.9719C8.27335 14.7176 8.13454 14.4816 7.99807 14.2943C7.85237 14.0944 7.67724 13.9033 7.42917 13.7591L6.67502 15.0557C6.68022 15.0587 6.71056 15.0745 6.78586 15.1778C6.87039 15.2938 6.9681 15.4573 7.13299 15.7359L8.42382 14.9719ZM5.82926 14.9935C6.16207 14.9992 6.36046 15.0034 6.50878 15.0198C6.64318 15.0347 6.6723 15.0541 6.67502 15.0557L7.42916 13.7591C7.17862 13.6133 6.92166 13.5564 6.67386 13.5289C6.43998 13.503 6.16006 13.499 5.8551 13.4937L5.82926 14.9935ZM10.867 15.7359C11.0319 15.4573 11.1296 15.2938 11.2141 15.1778C11.2894 15.0745 11.3198 15.0587 11.3249 15.0557L10.5708 13.7591C10.3227 13.9033 10.1476 14.0944 10.0019 14.2943C9.86543 14.4816 9.72662 14.7176 9.57615 14.9719L10.867 15.7359ZM12.1449 13.4937C11.8399 13.499 11.56 13.503 11.3261 13.5289C11.0783 13.5564 10.8214 13.6133 10.5708 13.7591L11.3249 15.0557C11.3277 15.0541 11.3568 15.0347 11.4912 15.0198C11.6395 15.0034 11.8379 14.9992 12.1707 14.9935L12.1449 13.4937Z"
                                                                fill="#7780A1"
                                                            ></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1110_13575">
                                                                <rect width="18" height="18" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                                <p class="text-sm font-semibold">30</p>
                                            </div>
                                        </div>
                                        <p class="mt-4 text-sm font-medium">
                                            Lorem ipsum dolor amet consectetur adipisicing elit eiusm tempor incididunt...
                                        </p>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div class="group flex gap-[14px]">
                                        <div class="flex-none">
                                            <div class="relative h-[120px] w-[120px] overflow-hidden rounded-[10px]">
                                                <img src="assets/images/blog/blogs2.jpg" class="h-full w-full object-cover" alt="" />
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <a
                                                href="javascript:"
                                                class="text-lf font-bold text-black duration-200 hover:text-secondary dark:text-white dark:hover:text-secondary"
                                                >5 Easy Ways You Can Turn Future Into Success</a
                                            >
                                            <div class="mt-2.5 flex items-center gap-2">
                                                <span>
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 5.83325V8.49992L9.66667 10.1666"
                                                            stroke="#969AA9"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M4.66668 2.72513C5.64725 2.1579 6.78572 1.83325 8.00001 1.83325C11.6819 1.83325 14.6667 4.81802 14.6667 8.49992C14.6667 12.1818 11.6819 15.1666 8.00001 15.1666C4.31811 15.1666 1.33334 12.1818 1.33334 8.49992C1.33334 7.28563 1.65799 6.14716 2.22522 5.16658"
                                                            stroke="#969AA9"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                <p class="text-[13px] font-semibold">20 May 2022</p>
                                            </div>
                                            <p class="mt-2.5 text-sm font-medium">Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                    </div>
                                    <div class="border-b border-dashed border-gray opacity-50"></div>
                                    <div class="flex gap-[14px]">
                                        <div class="flex-none">
                                            <div class="relative h-[120px] w-[120px] overflow-hidden rounded-[10px]">
                                                <img src="assets/images/blog/blogs3.jpg" class="h-full w-full object-cover" alt="" />
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <a
                                                href="javascript:"
                                                class="text-lf font-bold text-black duration-200 hover:text-secondary dark:text-white dark:hover:text-secondary"
                                                >Etiam Vel Neqe</a
                                            >
                                            <div class="mt-2.5 flex items-center gap-2">
                                                <span>
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 5.83325V8.49992L9.66667 10.1666"
                                                            stroke="#969AA9"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M4.66668 2.72513C5.64725 2.1579 6.78572 1.83325 8.00001 1.83325C11.6819 1.83325 14.6667 4.81802 14.6667 8.49992C14.6667 12.1818 11.6819 15.1666 8.00001 15.1666C4.31811 15.1666 1.33334 12.1818 1.33334 8.49992C1.33334 7.28563 1.65799 6.14716 2.22522 5.16658"
                                                            stroke="#969AA9"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                <p class="text-[13px] font-semibold">20 May 2022</p>
                                            </div>
                                            <p class="mt-2.5 text-sm font-medium">Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                    </div>
                                    <div class="border-b border-dashed border-gray opacity-50"></div>
                                    <div class="flex gap-[14px]">
                                        <div class="flex-none">
                                            <div class="relative h-[120px] w-[120px] overflow-hidden rounded-[10px]">
                                                <img src="assets/images/blog/blogs4.jpg" class="h-full w-full object-cover" alt="" />
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <a
                                                href="javascript:"
                                                class="text-lf font-bold text-black duration-200 hover:text-secondary dark:text-white dark:hover:text-secondary"
                                                >Etiam Vel Neqe</a
                                            >
                                            <div class="mt-2.5 flex items-center gap-2">
                                                <span>
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 5.83325V8.49992L9.66667 10.1666"
                                                            stroke="#969AA9"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M4.66668 2.72513C5.64725 2.1579 6.78572 1.83325 8.00001 1.83325C11.6819 1.83325 14.6667 4.81802 14.6667 8.49992C14.6667 12.1818 11.6819 15.1666 8.00001 15.1666C4.31811 15.1666 1.33334 12.1818 1.33334 8.49992C1.33334 7.28563 1.65799 6.14716 2.22522 5.16658"
                                                            stroke="#969AA9"
                                                            stroke-width="1.5"
                                                            stroke-linecap="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                <p class="text-[13px] font-semibold">20 May 2022</p>
                                            </div>
                                            <p class="mt-2.5 text-sm font-medium">Lorem ipsum dolor sit amet consectetur elit sed do.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex gap-4">
                                <div class="h-[30px] w-[5px] bg-primary"></div>
                                <h5 class="text-2xl font-extrabold text-black dark:text-white">Popular Posts</h5>
                            </div>
                            <div class="mt-5 space-y-5 rounded-[10px] border border-[#BBBBBB]/50 p-4 dark:border-[#7780A1]/20">
                                <div class="flex gap-3">
                                    <div class="flex-none">
                                        <div class="relative h-20 w-20 overflow-hidden rounded-[10px]">
                                            <img src="assets/images/blog/popular1.jpg" class="h-full w-full object-cover" alt="" />
                                        </div>
                                    </div>
                                    <div>
                                        <a
                                            href="javascript:"
                                            class="text-[15px] font-bold leading-5 text-black duration-200 hover:text-secondary dark:text-white dark:hover:text-secondary"
                                            >Your Light Is About To Stop Being Relevant</a
                                        >
                                        <div class="mt-2.5 flex items-center gap-2">
                                            <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 5.83325V8.49992L9.66667 10.1666"
                                                        stroke="#969AA9"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path>
                                                    <path
                                                        d="M4.66668 2.72513C5.64725 2.1579 6.78572 1.83325 8.00001 1.83325C11.6819 1.83325 14.6667 4.81802 14.6667 8.49992C14.6667 12.1818 11.6819 15.1666 8.00001 15.1666C4.31811 15.1666 1.33334 12.1818 1.33334 8.49992C1.33334 7.28563 1.65799 6.14716 2.22522 5.16658"
                                                        stroke="#969AA9"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <p class="text-[13px] font-semibold">20 May 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-dashed border-gray opacity-50"></div>
                                <div class="flex gap-3">
                                    <div class="flex-none">
                                        <div class="relative h-20 w-20 overflow-hidden rounded-[10px]">
                                            <img src="assets/images/blog/popular2.jpg" class="h-full w-full object-cover" alt="" />
                                        </div>
                                    </div>
                                    <div>
                                        <a
                                            href="javascript:"
                                            class="text-[15px] font-bold leading-5 text-black duration-200 hover:text-secondary dark:text-white dark:hover:text-secondary"
                                            >Your Light Is About To Stop Being Relevant</a
                                        >
                                        <div class="mt-2.5 flex items-center gap-2">
                                            <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 5.83325V8.49992L9.66667 10.1666"
                                                        stroke="#969AA9"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path>
                                                    <path
                                                        d="M4.66668 2.72513C5.64725 2.1579 6.78572 1.83325 8.00001 1.83325C11.6819 1.83325 14.6667 4.81802 14.6667 8.49992C14.6667 12.1818 11.6819 15.1666 8.00001 15.1666C4.31811 15.1666 1.33334 12.1818 1.33334 8.49992C1.33334 7.28563 1.65799 6.14716 2.22522 5.16658"
                                                        stroke="#969AA9"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <p class="text-[13px] font-semibold">24 May 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-dashed border-gray opacity-50"></div>
                                <div class="flex gap-3">
                                    <div class="flex-none">
                                        <div class="relative h-20 w-20 overflow-hidden rounded-[10px]">
                                            <img src="assets/images/blog/popular3.jpg" class="h-full w-full object-cover" alt="" />
                                        </div>
                                    </div>
                                    <div>
                                        <a
                                            href="javascript:"
                                            class="text-[15px] font-bold leading-5 text-black duration-200 hover:text-secondary dark:text-white dark:hover:text-secondary"
                                            >3 Easy Ways To Make Your iPhone Faster</a
                                        >
                                        <div class="mt-2.5 flex items-center gap-2">
                                            <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 5.83325V8.49992L9.66667 10.1666"
                                                        stroke="#969AA9"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path>
                                                    <path
                                                        d="M4.66668 2.72513C5.64725 2.1579 6.78572 1.83325 8.00001 1.83325C11.6819 1.83325 14.6667 4.81802 14.6667 8.49992C14.6667 12.1818 11.6819 15.1666 8.00001 15.1666C4.31811 15.1666 1.33334 12.1818 1.33334 8.49992C1.33334 7.28563 1.65799 6.14716 2.22522 5.16658"
                                                        stroke="#969AA9"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <p class="text-[13px] font-semibold">20 May 2022</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-dashed border-gray opacity-50"></div>
                                <div class="flex gap-3">
                                    <div class="flex-none">
                                        <div class="relative h-20 w-20 overflow-hidden rounded-[10px]">
                                            <img src="assets/images/blog/popular4.jpg" class="h-full w-full object-cover" alt="" />
                                        </div>
                                    </div>
                                    <div>
                                        <a
                                            href="javascript:"
                                            class="text-[15px] font-bold leading-5 text-black duration-200 hover:text-secondary dark:text-white dark:hover:text-secondary"
                                            >Secrets Your Parents Never Told You About Bulb</a
                                        >
                                        <div class="mt-2.5 flex items-center gap-2">
                                            <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 5.83325V8.49992L9.66667 10.1666"
                                                        stroke="#969AA9"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path>
                                                    <path
                                                        d="M4.66668 2.72513C5.64725 2.1579 6.78572 1.83325 8.00001 1.83325C11.6819 1.83325 14.6667 4.81802 14.6667 8.49992C14.6667 12.1818 11.6819 15.1666 8.00001 15.1666C4.31811 15.1666 1.33334 12.1818 1.33334 8.49992C1.33334 7.28563 1.65799 6.14716 2.22522 5.16658"
                                                        stroke="#969AA9"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <p class="text-[13px] font-semibold">20 May 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>--}}

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
                                    <h2 class="text-3xl font-black leading-tight text-white md:text-[40px]">Dukung Kami Untuk Wujudkan Mimpi SAHABAT Tabanan</h2>
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

    </div>

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
