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
                                <h6>FAQ</h6>
                                <h4 class="!text-white">FAQ Sahabat Tabanan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="py-12 lg:py-24 justify-center">
                <div class="container flex flex-col justify-center items-center">
                    <div class="heading text-center">
                        <h4 class="!font-black uppercase"><span class="text-secondary">Pertanyaan </span>Paling Sering Ditanyakan</h4>
                        <h6 class="mx-auto mt-2 max-w-[520px] !font-medium !text-gray">
                            Daftar Pertanyaan yang Paling Sering Ditanyakan oleh Para Sahabat Tabanan
                        </h6>
                    </div>
                    <div class="flex flex-col items-center justify-center w-full gap-5 sm:gap-10 lg:flex-row">
                        <div class="accordion-container w-3/4 flex-1 translate-x-10">
                            @foreach($faqs as $faq)
                                <div class="ac mt-5 border-none bg-transparent">
                                    <h2 class="ac-header rounded-t-md">
                                        <button type="button" class="ac-trigger relative !flex w-full items-center justify-between gap-2 !bg-gray/30 !px-5 !font-mulish !text-lg !font-bold !text-black after:!hidden ltr:text-left rtl:text-right dark:!text-white sm:!text-xl">
                                            <div>{{ $faq->question }}</div>
                                            <div class="trigger-icon grid h-6 w-6 place-content-center rounded-full border-2 border-gray text-black transition dark:text-white">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.09961 0.500977C6.65189 0.500977 7.09961 0.948692 7.09961 1.50098L7.09961 10.501C7.09961 11.0533 6.65189 11.501 6.09961 11.501H5.89961C5.34732 11.501 4.89961 11.0533 4.89961 10.501L4.89961 1.50098C4.89961 0.948692 5.34732 0.500977 5.89961 0.500977H6.09961Z" fill="currentColor" />
                                                    <path d="M0.5 5.90039C0.5 5.34811 0.947715 4.90039 1.5 4.90039H10.5C11.0523 4.90039 11.5 5.34811 11.5 5.90039V6.10039C11.5 6.65268 11.0523 7.10039 10.5 7.10039H1.5C0.947715 7.10039 0.5 6.65268 0.5 6.10039V5.90039Z" fill="currentColor" />
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div class="ac-panel">
                                        <p class="ac-text bg-white !p-5 !font-mulish !text-base !font-medium !text-gray dark:!bg-white/5">
                                            {{ $faq->answer }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <!-- Additional Sections Here -->

        </div>

        @include('layouts.footer')
    </div>
@endsection
