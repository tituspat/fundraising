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
                                <h6>Testimoni</h6>
                                <h4 class="!text-white">Testimoni Pendukung Sahabat Tabanan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section
                class="bg-[url(../images/service-bg.png)] bg-cover bg-center bg-no-repeat py-14 dark:bg-none lg:py-[100px]">
                <div class="container">
                    <div class="heading text-center">
                        <h6>Dari hasil kerja Sahabat Tabanan</h6>
                        <h4>Pendapat Para Sahabat Tabanan</h4>
                    </div>

                    <div class="grid gap-6 sm:grid-cols-1 lg:grid-cols-2">
                        <!-- Display all testimonials -->
                        @foreach ($testimonials as $testimonial)
                            @if ($testimonial)
                                <div data-aos="fade-up" data-aos-duration="1000">
                                    <div
                                        class="group rounded-3xl border-2 border-white bg-white p-6 shadow-[-20px_30px_70px_rgba(219,222,225,0.4)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:border-white/10 dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.04] dark:to-transparent dark:!shadow-none dark:hover:bg-secondary">
                                        <div class="flex flex-wrap gap-5 items-center">
                                            <div
                                                class="flex h-14 w-14 items-center justify-center rounded-full bg-secondary transition group-hover:bg-black">
                                                <img src="img/logo-sahabat.png" alt="">
                                            </div>
                                            <h3
                                                class="my-8 inline-block text-[26px] font-extrabold text-black dark:text-white dark:group-hover:text-black">
                                                {{ $testimonial->user->name }}
                                            </h3>
                                        </div>
                                        <p class="mb-10 text-lg font-semibold transition  dark:group-hover:text-black">
                                            {{ $testimonial->testimonial }}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    @auth
                        <!-- Check if user is editing a testimonial -->
                        @if ($isEditing)
                            <!-- Display form to edit the testimonial -->
                            <div class="relative py-10 text-black">
                                <form action="{{ route(Auth::user()->role . '.testimoni.update', $userTestimonial->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input type="text" name="testimonial" value="{{ $userTestimonial->testimonial }}"
                                            class="w-full bg-secondary/10 py-6 pl-7 pr-32 text-left placeholder:font-bold placeholder:text-black focus-within:outline-none"
                                            required />
                                    </div>
                                    <button type="submit"
                                        class="absolute right-2.5 top-1/2 -translate-y-1/2 bg-secondary py-3 px-5 text-lg font-extrabold transition hover:bg-primary">
                                        Update Testimoni
                                    </button>
                                </form>
                            </div>
                        @else
                            <!-- Check if user has submitted a testimonial -->
                            @if ($userTestimonial)
                                <!-- Display existing testimonial with an edit option -->
                                <div class="relative py-10 text-black w-full">
                                    <div class="p-6 bg-secondary/10 text-left">
                                        <h3 class="text-xl font-bold">Testimoni Anda </h3>
                                        <p class="text-lg">{{ $userTestimonial->testimonial }}</p>
                                        <a href="{{ route(Auth::user()->role . '.testimoni.edit') }}"
                                            class=" mt-4 inline-block bg-secondary py-3 px-5 text-lg font-extrabold transition hover:bg-primary">
                                            Edit Testimoni
                                        </a>
                                    </div>
                                </div>
                            @else
                                <!-- Display form to add a new testimonial -->
                                <div class="relative py-10 text-black">
                                    <form action="{{ route(Auth::user()->role . '.testimoni.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="testimonial" placeholder="Tambahkan Testimoni Anda"
                                                class="w-full bg-secondary/10 py-6 pl-7 pr-32 text-left placeholder:font-bold placeholder:text-black focus-within:outline-none"
                                                required />
                                        </div>
                                        <button type="submit"
                                            class="absolute right-2.5 top-1/2 -translate-y-1/2 bg-secondary py-3 px-5 text-lg font-extrabold transition hover:bg-primary">
                                            Simpan
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endif
                    @else
                        <p class="text-center py-10 text-black">Silakan <a href="{{ route('login') }}"
                                class="text-secondary underline">masuk</a> terlebih dahulu untuk menambahkan testimoni Anda.</p>
                    @endauth
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
