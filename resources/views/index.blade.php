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
                                    {{$content->jumbotron_subtitle}}
                                </p>
                                {{--<a href="about-us.html" class="btn mx-auto mt-2 block w-fit bg-white lg:mx-0 lg:rtl:ml-auto">read more</a>--}}
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
                        <h4>{{$content->profile_title}}</h4>
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
                                        class="text-primary">/</span> Sahabat Tabanan </h6>
                                <h2 class="text-3xl font-black leading-normal text-black dark:text-white md:text-[40px]">
                                    {{ $nama_calon }}
                                </h2>
                            </div>
                            <p class="text-lg font-medium">
                                {!! $profile->profile !!}
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
                            <p class="text-lg font-extrabold text-white">Mimpi Kami</p>
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
                        {{$profile->visi}}
                    </h3>
                    <p class="mt-2.5 text-center text-lg font-medium ltr:md:text-left rtl:md:text-right">
                        {{$profile->more_visi}}
                    </p>
                    <div
                        class="mt-12 grid gap-[30px] text-center sm:grid-cols-2 ltr:sm:text-left rtl:sm:text-right md:grid-cols-3"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        @foreach($misis as $misi)
                        <div>
                            <span>
                                {!! $misi->icon !!}
                                <!-- <svg class="mx-auto h-[42px] w-[42px] sm:mx-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M21 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V3M6 15L10 11L14 15L20 9M20 9V13M20 9H16" stroke="#d32f2f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg> -->
                            </span>
                            <h5 class="mt-5 text-lg font-extrabold text-black dark:text-white">{{$misi->head_misi}}</h5>
                            <p class="mt-2.5 text-[15px] font-semibold">{{$misi->body_misi}}</p>
                        </div>
                        @endforeach
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
                        <h2 class="text-3xl font-black leading-normal text-white md:text-[40px]">{{$content->program_title}}</h2>
                    </div>
                    <div class="swiper portfolio-slider xl:w-[1680px]">
                        <div class="swiper-wrapper">
                            @foreach($blogs as $blog)
                            <div class="swiper-slide">
                                <div class="bg-white dark:bg-gray-dark">
                                    <div class="h-72 md:h-96">
                                        <img src="{{ asset($blog->thumbnail) }}" alt=""
                                            class="h-full w-full object-cover" />
                                    </div>
                                    <div class="flex items-center justify-between gap-2 p-4 md:p-7">
                                        <div class="font-extrabold">
                                            <h6
                                                class="tex-md bg-gradient-to-r from-secondary to-primary bg-clip-text uppercase tracking-[10px] text-transparent">
                                                {{$blog->title}}
                                            </h6>
                                            <h4 class="py-4 text-sm text-black dark:text-white line-clamp-2 overflow-hidden">
                                                {{--{!!$blog->content!!}--}}
                                            </h4>
                                            <!-- <a href="/program/{{$blog->id}}"
                                                class="group flex items-center gap-4 font-semibold transition hover:text-secondary">
                                                <span>Baca Selengkapnya</span>
                                                 <span class="transition-all group-hover:pl-2">
                                                    <svg width="18" height="12" viewBox="0 0 18 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 6.75H0V5.25H12V0L18 6L12 12V6.75Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </a> -->
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

            <!-- blog & arikel soon -->
            {{--<section class="bg-gradient-to-t from-white/60 to-transparent py-12 dark:bg-none lg:py-24">
                <div class="container">
                    <div class="flex flex-col items-center gap-5 lg:flex-row" data-aos="fade-up" data-aos-duration="1000">
                        <!-- blog -->
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
                                                <!-- <img src="assets/images/blog/shaun.png" class="w-9" alt="" />
                                                <p class="text-[13px] font-semibold">Shaun Park</p> -->
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
                                                <!-- <p class="text-[13px] font-semibold">20 May 2022</p> -->
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
                        <!-- article -->
                        <div>
                            <div class="flex gap-4">
                                <div class="h-[30px] w-[5px] bg-primary"></div>
                                <h5 class="text-2xl font-extrabold text-black dark:text-white">Artikel Terbaru</h5>
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

            <section class="bg-gradient-to-b from-white/60 to-transparent py-12 dark:bg-gradient-to-b dark:from-white/10 dark:to-transparent lg:py-24">
                    <div class="container">
                        <div class="mb-5 flex justify-between">
                            <div class="flex items-center gap-3">
                                <div class="h-[30px] w-[5px] bg-primary"></div>
                                <h5 class="text-2xl font-extrabold text-black dark:text-white">Artikel terbaru</h5>
                            </div>
                            <div class="flex gap-[14px]">
                                <span
                                    class="Stories-slider-button-prev flex h-[30px] w-[30px] items-center justify-center rounded-full bg-black/[0.04] text-[#08111F] duration-200 hover:bg-black hover:text-white rtl:rotate-y-180 dark:bg-white/[0.04] dark:text-white dark:hover:bg-secondary dark:hover:text-white"
                                >
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.95007 1.20007L1.48924 5.34228C1.06317 5.73791 1.06317 6.41223 1.48924 6.80787L5.95007 10.9501"
                                            stroke="currentcolor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                </span>
                                <span
                                    class="Stories-slider-button-next flex h-[30px] w-[30px] items-center justify-center rounded-full bg-black/[0.04] text-[#08111F] duration-200 hover:bg-black hover:text-white rtl:rotate-y-180 dark:bg-white/[0.04] dark:text-white dark:hover:bg-secondary dark:hover:text-white"
                                >
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.05011 10.7999L5.51095 6.65772C5.93701 6.26209 5.93701 5.58777 5.51095 5.19213L1.05011 1.04993"
                                            stroke="currentcolor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="rounded-[10px] border border-[#BBBBBB]/50 p-3 dark:border-[#7780A1]/20 sm:p-5">
                            <div class="swiper Stories-slider">
                                <div class="swiper-wrapper">
                                    <!-- content -->
                                     @foreach($news as $news)
                                    <div class="swiper-slide">
                                        <div class="relative h-[346px] overflow-hidden rounded-[10px]">
                                            <div class="absolute inset-0 bg-black/30"></div>
                                            <img src="{{$news->thumbnail}}" class="h-full w-full object-cover" alt="" /></a>
                                            <div class="absolute bottom-5 ltr:left-5 rtl:right-5">
                                                <!-- <p class="inline-block rounded bg-primary py-1 px-2.5 text-[12px] font-extrabold text-white">FASHION</p> -->
                                                <h5 class="mt-3 text-xl font-extrabold text-white"><a href="{{$news->url}}" target="_blank">{{$news->title}}</a></h5>
                                                <div class="mt-[14px] flex gap-4">
                                                    <div class="flex items-center gap-3">
                                                        <!-- <img src="assets/images/blog/shaun.png" class="w-9" alt="" />
                                                        <p class="text-[13px] font-semibold text-white">Shaun Park</p> -->
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <span class="text-white">
                                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8 5.83337V8.50004L9.66667 10.1667"
                                                                    stroke="white"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                />
                                                                <path
                                                                    d="M4.66668 2.72526C5.64725 2.15802 6.78572 1.83337 8.00001 1.83337C11.6819 1.83337 14.6667 4.81814 14.6667 8.50004C14.6667 12.1819 11.6819 15.1667 8.00001 15.1667C4.31811 15.1667 1.33334 12.1819 1.33334 8.50004C1.33334 7.28575 1.65799 6.14728 2.22522 5.16671"
                                                                    stroke="white"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <p class="text-[13px] font-semibold text-white">{{$news->created_at}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            
                <section class="bg-black py-10 md:py-0">
                <div class="container">
                    <div class="grid items-center md:grid-cols-2">
                        <div class="py-5">
                            <div class="text-center md:ltr:text-left md:rtl:text-right lg:w-3/4">
                                <div class="mb-10">
                                    <!-- <h6 class="mb-4 text-lg font-extrabold uppercase text-secondary"><span class="text-primary">/</span> get started</h6> -->
                                    <h2 class="text-3xl font-black leading-tight text-white md:text-[40px]">{{$content->support_text}}</h2>
                                </div>
                                <div class="mt-8">
                                    <a href="#contact-us" class="bg-secondary py-3 px-5 font-bold text-white transition hover:bg-primary">Hubungi Kami</a>
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
                            <h4 class="sm:!leading-[50px]">{{$content->email_title}}</h4>
                            <img src="{{ asset('vendor/plurk/images/form-img.png') }}" alt="form-img" class="mx-auto"
                                data-aos="fade-right" data-aos-duration="1000" />
                        </div>
                        <form action="/questions" method="POST"
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
                @if (session('success'))
                <div>
                    {{ session('success') }}
                </div>
                @endif
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

                // Stories Slider
                var storySwiper = new Swiper('.Stories-slider', {
                loop: false,
                slidesPerView: 3,
                spaceBetween: 30,
                speed: 1000,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    prevEl: '.Stories-slider-button-prev',
                    nextEl: '.Stories-slider-button-next',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    600: {
                        slidesPerView: 2,
                    },
                    1000: {
                        slidesPerView: 3,
                    },
                },
            });
        </script>
@endsection
