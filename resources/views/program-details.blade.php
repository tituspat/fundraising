@extends('layouts.app-2')


@section('description', '{{$program->meta_desc}}')

@section('content')
    <div class="screen_loader fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <!-- loader content -->
    </div>

    <div class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent">
        @include('layouts.navbar-2')

        <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
            <div class="bg-[url(../images/inner-page-hero-bg.png)] bg-cover bg-bottom bg-no-repeat pt-[82px] lg:pt-[106px]">
                <div class="relative">
                    <div class="container">
                        <div class="items-center py-10 md:flex md:h-[400px] md:py-0">
                            <div class="heading relative mb-0 md:w-[725px]">
                                <h4 class="!text-white">Program - {{ $program->title }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="py-14 md:py-[100px]">
                <div class="container">
                    <div class="pb-14 md:pb-20">
                        <h3 class="mb-7 text-xl font-extrabold text-black dark:text-white sm:text-2xl">{{ $program->title }}</h3>
                        {{-- <p class="relative mt-5 font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded before:bg-primary ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg"> --}}
                            {!! $program->content !!}
                        {{-- </p> --}}
                    </div>
                    <div class="grid gap-[30px] sm:grid-cols-2">
                        <img src="{{ asset('/'.$program->thumbnail) }}" alt="{{ $program->title }}" class="rounded-[32px]" data-aos="fade-up" data-aos-duration="1000" />
                    </div>
                </div>
            </section>

            <section class="py-14 md:py-[100px] lg:py-[100px]">
                <div class="container">
                    <div class="mb-10 flex flex-col items-center justify-center gap-5 lg:mb-14 lg:flex-row lg:justify-between">
                        <div class="heading mb-0 text-center ltr:lg:text-left rtl:lg:text-right">
                            <h4>Program Lainnya</h4>
                        </div>
                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('program.index') }}" class="text-sm font-extrabold text-black transition hover:text-secondary dark:text-white dark:hover:text-secondary">Semua Program</a>
                            <button type="button" class="project-slider-button-prev flex h-10 w-10 items-center justify-center rounded-full bg-black/5 transition hover:bg-secondary dark:bg-white/5 dark:hover:bg-secondary">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-black rtl:rotate-180 dark:text-white">
                                    <path d="M5.95007 1.2002L1.48924 5.3424C1.06317 5.73803 1.06317 6.41236 1.48924 6.80799L5.95007 10.9502" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </button>
                            <button type="button" class="project-slider-button-next text-p flex h-10 w-10 items-center justify-center rounded-full bg-black/5 transition hover:bg-secondary dark:bg-white/5 dark:hover:bg-secondary">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-black rtl:rotate-180 dark:text-white">
                                    <path d="M1.05005 10.7998L5.51089 6.6576C5.93695 6.26197 5.93695 5.58764 5.51089 5.19201L1.05005 1.0498" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper project-slider px-6">
                    <div class="swiper-wrapper">
                        @foreach ($relatedPrograms as $relatedProgram)
                            <div class="swiper-slide">
                                <div class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark">
                                    <a href="{{ route('program.show', $relatedProgram->id) }}" class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></a>
                                    <img src="{{asset('/'.$relatedProgram->thumbnail)}}" alt="{{ $relatedProgram->title }}" class="h-52 w-full rounded-t-3xl object-cover" />
                                    <div class="p-5 text-sm font-bold">
                                        <h6 class="mb-1 text-black line-clamp-1 dark:text-white">{{ $relatedProgram->title }}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
