@extends('layouts.app-2')


@section('description', $program->meta_desc)

@section('content')
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
                        <div class="items-center py-10 md:flex md:h-[400px] md:py-0">
                            <div class="heading relative mb-0 md:w-[725px]">
                                <h4 class="!text-white">Program - {{ $program->title }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="py-14 md:py-[100px] ">
                <div class="container">
                    <div class="pb-14 md:pb-20">
                        <h3 class="mb-7 text-xl font-extrabold text-black dark:text-white sm:text-2xl">{{ $program->title }}
                        </h3>
                        {{-- <p class="relative mt-5 font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded before:bg-primary ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg"> --}}
                        {!! $program->content !!}
                        {{-- </p> --}}
                    </div>
                    <div class="grid gap-[30px] sm:grid-cols-2">
                        <img src="{{ asset($program->thumbnail) }}" alt="{{ $program->title }}"
                            class="rounded-[32px]" data-aos="fade-up" data-aos-duration="1000" />
                    </div>





            <div class="mt-10 pb-5 md:pb-11">
                <h3 class="text-xl font-extrabold text-black dark:text-white sm:text-2xl">Komentar</h3>

                @foreach ($program->comments as $comment)
                @if(!is_null($comment->comment))
                <div class="mt-6 bg-white p-4 shadow rounded-lg dark:bg-gray-800">

                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-base font-medium text-black dark:text-white">{{ $comment->user->name }}</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                {{ $comment->created_at->diffForHumans() }}
                                @if ($comment->created_at != $comment->updated_at)
                                    <span class="text-xs text-gray-400">(Diedit)</span>
                                @endif
                            </div>
                        </div>
                        @if (auth()->check() && auth()->user()->id === $comment->user_id)
                        <div class="flex items-center">
                            <!-- Edit Button -->
                            <button type="button" class="text-blue-500 mr-3" onclick="document.getElementById('edit-comment-{{ $comment->id }}').style.display='block'">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13h2.293l7.293-7.293a1 1 0 000-1.414l-2.586-2.586a1 1 0 00-1.414 0L9 9.293V13z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h2.5l3-3H3v3zM16.5 5.5l2 2m0 0L10.5 15.5H8.5v-2L18.5 5.5z"/>
                                </svg>
                            </button>

                            <!-- Delete Form -->
                            <form action="{{ route(Auth::user()->role . '.comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus komentar ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </form>
                        </div>

                        @endif
                    </div>

                    <div class="mt-4">
                        <p class="text-gray-700 dark:text-gray-200">{{ $comment->comment }}</p>
                    </div>


                    <!-- Edit Comment Form -->
                    <div id="edit-comment-{{ $comment->id }}" class="mt-4 bg-gray-100 p-4 rounded-lg dark:bg-gray-900" style="display:none;">
                        <form action="{{ route(Auth::user()->role . '.comments.update', $comment->id) }}" method="POST">
                            @csrf
                            <textarea name="comment" rows="4" class="w-full p-4 border rounded-lg dark:bg-gray-800 dark:text-gray-200">{{ $comment->comment }}</textarea>
                            <div class="flex justify-end mt-2 gap-2">
                                <button type="submit" class="btn bg-blue-500 px-4 py-2 text-white rounded-lg">Kirim</button>
                                <button type="button" class="ml-2 btn bg-gray-500 px-4 py-2 text-white rounded-lg" onclick="document.getElementById('edit-comment-{{ $comment->id }}').style.display='none'">Batal</button>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>

            @endforeach





                @auth
                    <form action="{{ route('comments.store') }}" method="POST" class="">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ $program->id }}">
                        <div class="mb-4 mt-4">
                            <textarea name="comment" rows="4" class="w-full p-4 border rounded-lg dark:bg-gray-800 dark:text-gray-200"
                                placeholder="Tambahkan Komentar Anda..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="btn bg-gray px-12 capitalize text-white dark:bg-white dark:text-black dark:hover:bg-secondary">Kirim</button>
                        </div>
                    </form>
                @else
                    <p class="mt-6 text-gray-700 dark:text-gray-200">Silakan<a href="{{ route('login') }}"
                            class="text-blue-500">Masuk</a> terlebih dahulu untuk menambahkan komentar</p>
                @endauth

                <div class="pb-10 md:pb-16">
                    <h3 class="mb-7 text-xl font-extrabold text-black dark:text-white sm:text-2xl">Berikan Dukungan</h3>
                    <p
                        class="relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded before:bg-primary ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg"
                    >
                        Beri dukungan terhadap program Sahabat Tabanan yaitu Program {{ $program->title }}, dengan klik tombol vote di bawah ini. </p>

                </div>
                @auth
                @php
                    $hasVoted = $program->comments()->where('user_id', auth()->user()->id)->where('is_voted', true)->exists();
                @endphp

                @if($hasVoted)
                    <p class="mt-4 text-green-500">Anda sudah vote program ini</p>
                @else
                    <form action="{{ route(Auth::user()->role . '.comments.vote') }}" method="POST" class="mt-4">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="blog_id" value="{{ $program->id }}">
                        <button type="submit" class="btn bg-blue-500 px-4 py-2 text-white rounded-lg">Berikan Vote</button>
                    </form>
                @endif
            @endauth



            </div>
        </div>
    </section>


            <section class="py-14 md:py-[100px] lg:py-[100px]">
                <div class="container">
                    <div
                        class="mb-10 flex flex-col items-center justify-center gap-5 lg:mb-14 lg:flex-row lg:justify-between">
                        <div class="heading mb-0 text-center ltr:lg:text-left rtl:lg:text-right">
                            <h4>Program Lainnya</h4>
                        </div>
                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('program.index') }}"
                                class="text-sm font-extrabold text-black transition hover:text-secondary dark:text-white dark:hover:text-secondary">Semua
                                Program</a>
                            <button type="button"
                                class="project-slider-button-prev flex h-10 w-10 items-center justify-center rounded-full bg-black/5 transition hover:bg-secondary dark:bg-white/5 dark:hover:bg-secondary">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="text-black rtl:rotate-180 dark:text-white">
                                    <path
                                        d="M5.95007 1.2002L1.48924 5.3424C1.06317 5.73803 1.06317 6.41236 1.48924 6.80799L5.95007 10.9502"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </button>
                            <button type="button"
                                class="project-slider-button-next text-p flex h-10 w-10 items-center justify-center rounded-full bg-black/5 transition hover:bg-secondary dark:bg-white/5 dark:hover:bg-secondary">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="text-black rtl:rotate-180 dark:text-white">
                                    <path
                                        d="M1.05005 10.7998L5.51089 6.6576C5.93695 6.26197 5.93695 5.58764 5.51089 5.19201L1.05005 1.0498"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper project-slider px-6">
                    <div class="swiper-wrapper">
                        @foreach ($relatedPrograms as $relatedPrograms)
                            <div class="swiper-slide">
                                <div
                                    class="relative rounded-3xl border border-transparent bg-white transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark">
                                    <a href="{{ route('program.show', $relatedPrograms->id) }}"
                                        class="absolute top-0 h-full w-full ltr:left-0 rtl:right-0"></a>
                                    <img src="{{ asset($relatedPrograms->thumbnail) }}"
                                        alt="{{ $relatedPrograms->title }}" class="h-52 w-full rounded-t-3xl object-cover" />
                                    <div class="p-5 text-sm font-bold">
                                        <h6 class="mb-1 text-black line-clamp-1 dark:text-white">{{ $relatedPrograms->title }}
                                        </h6>
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
