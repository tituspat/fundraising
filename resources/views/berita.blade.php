@extends('layouts.app-2')

@section('content')
    <!-- screen loader -->
    <div class="screen_loader fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <!-- loader content -->
    </div>

    <div
        class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent">
        @include('layouts.navbar-2')

        <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
            <div class="bg-[url(../images/inner-page-hero-bg.png)] bg-cover bg-bottom bg-no-repeat pt-[82px] lg:pt-[106px]">
                <div class="relative">
                    <div class="container">
                        <div class="items-center justify-between py-10 md:flex md:h-[400px] md:py-0">
                            <div class="heading relative mb-0 text-center ltr:md:text-left rtl:md:text-right">
                                <h6>Berita</h6>
                                <h4 class="!text-white">Berita tentang Sahabat Tabanan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="bg-gradient-to-t from-white/70 to-transparent py-14 dark:bg-none md:py-[100px]">
                <div class="container">
                    <div class="grid gap-x-[30px] gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($berita as $item)
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark">
                                    <a href="{{ $item->url }}"
                                        class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></a>
                                    <img src="{{ $item->thumbnail }}" alt="{{ $item->title }}"
                                        class="h-52 w-full rounded-t-3xl object-cover" />
                                    <div class="p-5 text-sm font-bold">
                                        <h6 class="font-extrabold text-secondary dark:text-secondary">{{ $item->title }}
                                        </h6>
                                        {{-- <p class="line-clamp-4">{{ $item->description }}</p> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

        @include('layouts.footer')
    </div>

    <!-- AOS Animation JS -->
    <script src="assets/js/aos.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom.js"></script>
@endsection
