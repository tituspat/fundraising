@extends('layouts.dashboard.app')


@section('content')
    <!-- Main Content -->
    <main class="bg-normalBG dark:bg-main-dark">
        <div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">

            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12">

                    <!-- Breadcrumb Section -->
                    <div
                        class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                        <!-- Title -->
                        <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Manajemen FAQ</h4>
                        <!-- Breadcrumb Navigation -->
                        <div class="flex flex-wrap justify-center">
                            <nav>
                                <ol class="flex flex-wrap p-0 mb-0 list-none gap-[8px] max-sm:justify-center">
                                    <!-- Parent Link -->
                                    <li class="inline-flex items-center">
                                        <a class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 hover:text-primary group"
                                            href="index.html">
                                            <i
                                                class="uil uil-estate text-light dark:text-white/50 me-[8px] text-[16px] group-hover:text-current"></i>Dashboard</a>
                                    </li>
                                    <!-- Middle (Conditional) -->

                                    {{-- <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]">
                                 <span class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">Pages</span>
                              </li> --}}

                                    <!-- Child (Current Page) -->
                                    <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]"
                                        aria-current="page">
                                        <span
                                            class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">Manajemen
                                            FAQ</span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-span-12">
                <div
                    class="bg-white dark:bg-box-dark-up m-0 p-10 text-theme-gray dark:text-subtitle-dark text-[15px] rounded-10 relative mb-[25px] w-full py-[30px] px-[25px] flex flex-col gap-x-[15px] lg:gap-y-[25px] gap-y-[15px]">
                    <div
                        class="text-dark dark:text-title-dark font-medium text-[17px] flex items-center justify-between max-sm:flex-col max-sm:gap-[15px]">
                        <h4 class="mb-0 text-[20px] leading-6 font-medium text-dark dark:text-title-dark">FAQs
                        </h4>
                        <!-- Modal -->
                        <form action="faqs/add" method="post">
                            {{ csrf_field() }}
                            <div data-te-modal-init
                                class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                                <div data-te-modal-dialog-ref
                                    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                    <div
                                        class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                        <div
                                            class="flex items-center justify-between flex-shrink-0 p-4 border-b border-opacity-100 rounded-t-md border-regular dark:border-box-dark-up">
                                            <!--Modal title-->
                                            <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                id="addModalLabel">
                                                Tambahkan FAQ
                                            </h5>
                                            <!--Close button-->
                                            <button type="button"
                                                class="box-content border-none rounded-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                data-te-modal-dismiss aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5 text-dark dark:text-title-dark">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>

                                        <!--Modal body-->
                                        <div class="relative flex-auto  p-4" data-te-modal-body-ref>
                                            <div class="mb-4"><input type="text" name="question"
                                                    class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                    placeholder="Masukkan Pertanyaan" autocomplete="name"></div>
                                            <div class="mb-4"><input type="text" name="answer"
                                                    class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                    placeholder="Masukkan Jawaban" autocomplete="name"></div>

                                        </div>


                                        <!--Modal footer-->
                                        <div
                                            class="flex flex-wrap items-center justify-end flex-shrink-0 gap-2 p-4 border-t-2 border-b border-opacity-100 rounded-b-md border-regular dark:border-box-dark-up">
                                            <button type="submit"
                                                class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-14 font-medium capitalize leading-normal text-white  transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                data-te-ripple-init data-te-ripple-color="light">
                                                Save changes
                                            </button>
                                            <button type="button"
                                                class="ml-1 inline-block rounded bg-secondary px-6 pb-2 pt-2.5 text-14 font-medium capitalize leading-normal text-white  transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Button trigger modal -->
                        <button type="button"
                            class="flex items-center px-[14px] text-sm text-white rounded-md font-semibold bg-primary border-primary h-10 gap-[6px]"
                            data-te-toggle="modal" data-te-target="#addModal" data-te-ripple-init
                            data-te-ripple-color="light">
                            <i class="uil uil-plus"></i>
                            <span class="m-0">Tambahkan FAQ</span>
                        </button>
                    </div>

                    <div
                        class="flex items-center flex-wrap justify-between gap-x-[30px] gap-y-[10px] max-lg:flex-col max-lg:justify-center">

                        <div
                            class="max-h-[455px] pb-[15px] scrollbar overflow-y-auto justify-center items-center w-full p-[10px]">
                            <table class="min-w-full text-sm font-light text-left whitespace-nowrap justify-between w-full">
                                <thead>
                                    <tr class="whitespace-nowrap">
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-[25px] py-[17px] text-start text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden rounded-s-[10px] sticky top-0">
                                            ID</th>
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                            Pertanyaan</th>
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                            Jawaban</th>
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                            Terakhir Diubah</th>
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-[25px] py-[17px] text-center text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden rounded-e-[10px] sticky top-0">
                                            Buat Perubahan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faqs as $f)
                                        <tr class="group">
                                            <td
                                                class="ps-[25px] pe-4 py-[12px] text-start last:text-end text-dark dark:text-title-dark group-hover:bg-transparent text-15 font-medium border-none before:hidden rounded-s-[4px]">
                                                {{ $f->id }}
                                            </td>
                                            <td
                                                class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                                <div class="flex items-center">
                                                    <span
                                                        class="font-medium capitalize text-dark dark:text-title-dark text-15">
                                                        {{ Str::limit($f->question, 30) }}</span>
                                                </div>
                                            </td>
                                            <td
                                                class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                                {{ Str::limit($f->answer, 30) }}
                                            </td>
                                            <td
                                                class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                                {{ $f->updated_at }}
                                            </td>
                                            <td
                                                class="ps-[20px] pe-[25px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[4px]">
                                                <div
                                                    class="text-light dark:text-subtitle-dark text-[19px] flex items-center justify-center p-0 m-0 ">
                                                    <!-- Button trigger modal -->
                                                    <button type="button"
                                                        class="cursor-pointer text-black edit-task-title uil uil-edit-alt hover:text-info"
                                                        data-te-toggle="modal"
                                                        data-te-target="#exampleModal{{ $f->id }}"
                                                        data-te-ripple-init data-te-ripple-color="light"></button>
                                                    <!-- Modal -->
                                                    <form action="{{ 'faqs/update/' }}" method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        <div data-te-modal-init
                                                            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                                            id="exampleModal{{ $f->id }}" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel{{ $f->id }}"
                                                            aria-hidden="true">
                                                            <div data-te-modal-dialog-ref
                                                                class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                                <div
                                                                    class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                                    <div
                                                                        class="flex items-center justify-between flex-shrink-0 p-4 border-b border-opacity-100 rounded-t-md border-regular dark:border-box-dark-up">
                                                                        <!--Modal title-->
                                                                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                                            id="exampleModalLabel{{ $f->id }}">
                                                                            Edit FAQ
                                                                        </h5>
                                                                        <!--Close button-->
                                                                        <button type="button"
                                                                            class="box-content border-none rounded-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                                            data-te-modal-dismiss aria-label="Close">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke-width="1.5" stroke="currentColor"
                                                                                class="w-5 h-5 text-dark dark:text-title-dark">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    d="M6 18L18 6M6 6l12 12" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>

                                                                    <!--Modal body-->
                                                                    <div class="relative flex-auto p-4"
                                                                        data-te-modal-body-ref>
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $f->id }}">
                                                                        <div class="mb-4">
                                                                            <label for="question" class="block text-left text-sm font-medium text-gray-700 dark:text-neutral-200">Pertanyaan</label>
                                                                            <input type="text" name="question"
                                                                                class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] capitalize py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                                                placeholder="Masukkan Pertanyaan"
                                                                                value="{{ $f->question }}">
                                                                        </div>
                                                                        <div class="mb-4">
                                                                            <label for="question" class="block text-left text-sm font-medium text-gray-700 dark:text-neutral-200">Jawaban</label>
                                                                            <input type="text" name="answer"
                                                                                class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] capitalize py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                                                placeholder="Masukkan Jawaban"
                                                                                value="{{ $f->answer }}">
                                                                        </div>
                                                                    </div>

                                                                    <!--Modal footer-->
                                                                    <div
                                                                        class="flex flex-wrap items-center justify-end flex-shrink-0 gap-2 p-4 border-t-2 border-b border-opacity-100 rounded-b-md border-regular dark:border-box-dark-up">
                                                                        <button type="submit"
                                                                            class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-14 font-medium capitalize leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                                            data-te-ripple-init
                                                                            data-te-ripple-color="light">
                                                                            Simpan Perubahan
                                                                        </button>
                                                                        <button type="button"
                                                                            class="ml-1 inline-block rounded bg-secondary px-6 pb-2 pt-2.5 text-14 font-medium capitalize leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                                            data-te-modal-dismiss data-te-ripple-init
                                                                            data-te-ripple-color="light">
                                                                            Batal
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <a href="faqs/delete/{{ $f->id }}"
                                                        class="cursor-pointer remove-task-wrapper uil uil-times text-danger"></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
        @include('layouts.dashboard.footer')
        <!-- end: Footer -->
    </main>
    <!-- End: Main Content -->
    <!-- End: Wrapping Content -->

    <!-- Customizing option -->

    <!-- End: Customizing option -->
@endsection
