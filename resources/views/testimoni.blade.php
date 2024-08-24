@extends('layouts.app-2')

@section('content')
    <!-- screen loader -->
    <div class="screen_loader fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <!-- loader content -->
    </div>

    <div class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased dark:bg-[#101926] dark:from-transparent dark:to-transparent">
        @include('layouts.navbar-2')

        <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
            <div class="bg-[url(../images/inner-page-hero-bg.png)] bg-cover bg-bottom bg-no-repeat pt-[82px] lg:pt-[106px]">
                <div class="relative">
                    <div class="container">
                        <div class="items-center justify-between py-10 md:flex md:h-[400px] md:py-0">
                            <div class="heading relative mb-0 text-center ltr:md:text-left rtl:md:text-right">
                                <h6>Testimoni</h6>
                                <h4 class="!text-white">Testimoni Pendukung Sahabat Tabanan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="bg-[url(../images/service-bg.png)] bg-cover bg-center bg-no-repeat py-14 dark:bg-none lg:py-[100px]">
                <div class="container">
                    <div class="heading text-center">
                        <h6>Dari hasil kerja Sahabat Tabanan</h6>
                        <h4>Pendapat Para Sahabat Tabanan</h4>
                    </div>
                    <div class="grid gap-6 sm:grid-cols-1 lg:grid-cols-2">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="group rounded-3xl border-2 border-white bg-white p-6 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.04] dark:to-transparent dark:!shadow-none dark:hover:bg-secondary"
                            >
                            <div class="flex flex-wrap gap-5 items-center">
                                <div
                                    class="flex h-14 w-14 items-center justify-center rounded-full bg-secondary transition group-hover:bg-black"
                                >
                                    <img width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <img src="img/logo-sahabat.png" alt="">
                                </div>
                                <h3
                                    class="my-8 inline-block text-[26px] font-extrabold text-black dark:text-white dark:group-hover:text-black"
                                    >Nama pemberi testimoni</h3
                                >
                            </div>
                                <p class="mb-10 text-lg font-semibold transition line-clamp-3 dark:group-hover:text-black">
                                    Isi testimoni
                                </p>

                            </div>
                        </div>

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
