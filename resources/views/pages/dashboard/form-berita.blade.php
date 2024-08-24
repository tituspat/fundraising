@extends('layouts.dashboard.app')

@section('content')
<main class="bg-normalBG dark:bg-main-dark">
    <div class="mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12">
                <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Tambahkan Berita</h4>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-[25px] items-center">
            <div class="col-span-12 xl:col-start-4 xl:col-span-6">
                <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                    <div class="p-[25px]">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <p>{{ $errors->first('url') }}</p>
                            </div>
                        @endif

                        <form action="{{ route(Auth::user()->role . '.berita.preview') }}" method="POST">
                            @csrf
                            <div class="pb-4">
                                <label for="nameVertical" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">URL Berita</label>
                                <div class="flex flex-col flex-1 md:flex-row">
                                    <input type="text" id="nameVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="url" placeholder="https://example.com/news-page" required>
                                </div>
                            </div>
                            <div class="flex items-center gap-[15px] mt-[14px]">
                                <button type="submit" class="px-[30px] h-[44px] text-white bg-primary border-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear">Tinjau Berita</button>
                            </div>
                        </form>

                        @if(isset($title) && isset($description) && isset($thumbnail))
                        <!-- Preview Section -->
                        <div class="col-span-12 xl:col-span-4 md:col-span-6 mt-5">
                            <figure class="p-6 mb-0 bg-white group dark:bg-box-dark rounded-10 shadow-regular dark:shadow-none">
                                <div class="relative after:absolute after:h-0 after:w-full ltr:after:left-0 rtl:after:right-0 after:top-0 after:bg-[#0a0a0a15] after:rounded-10 after:transition-all after:duration-300 group-hover:after:h-full rounded-10 overflow-hidden">
                                    <img alt="hexadash Blog" class="w-full rounded-10" src="{{ $thumbnail }}">
                                </div>
                                <figcaption>
                                    <div class="flex justify-between items-center flex-wrap mt-2.5 gap-x-[10px] gap-y-[6px] text-14">
                                        <span class="inline-block text-light dark:text-subtitle-dark text-15">{{ now() }}</span>
                                    </div>
                                    <h2 class="mt-4 mb-3 text-xl font-semibold capitalize">
                                        <a class="text-dark hover:text-primary dark:text-title-dark dark:hover:text-primary" target="_blank" href="{{ $url }}">{{ $title }}</a>
                                    </h2>
                                    <p class="mb-4 text-base text-dark dark:text-title-dark">{{ $description }}</p>
                                    <form action="{{ route(Auth::user()->role . '.berita.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="title" value="{{ $title }}">
                                        <input type="hidden" name="description" value="{{ $description }}">
                                        <input type="hidden" name="thumbnail" value="{{ $thumbnail }}">
                                        <input type="hidden" name="url" value="{{ $url }}">
                                        <button type="submit" class="px-[30px] h-[44px] text-white bg-primary border-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear mt-4">Save</button>
                                    </form>
                                </figcaption>
                            </figure>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
