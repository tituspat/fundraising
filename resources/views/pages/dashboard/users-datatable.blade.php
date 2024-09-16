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
                        <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Manajemen Pengguna
                        </h4>
                        <!-- Breadcrumb Navigation -->
                        <div class="flex flex-wrap justify-center">
                            <nav>
                                <ol class="flex flex-wrap p-0 mb-0 list-none gap-[8px] max-sm:justify-center">
                                    <!-- Parent Link -->
                                    <li class="inline-flex items-center">
                                        <a class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 hover:text-primary group" href="">
                                            <i
                                                class="uil uil-estate text-light dark:text-white/50 me-[8px] text-[16px] group-hover:text-current"></i>Dashboard</a>
                                    </li>
                                    <!-- Middle (Conditional) -->

                                    {{-- <li
                                        class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]">
                                        <span
                                            class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">Pages</span>
                                    </li> --}}

                                    <!-- Child (Current Page) -->
                                    <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]"
                                        aria-current="page">
                                        <span
                                            class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">Manajemen Pengguna</span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <div class="grid grid-cols-12 gap-[25px]">
                <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                    <div bordered="false"
                        class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                        <div class="flex justify-between">
                            <div
                                class="bg-primary/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-primary w-[58px]">
                                <i class="uil uil-user"></i>
                            </div>
                            <div>
                                <h4
                                    class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                                    <span>
                                        {{ $admincount }}
                                    </span>
                                </h4>
                                <span class="font-normal text-body dark:text-white/60 text-15">Admin</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                    <div bordered="false"
                        class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                        <div class="flex justify-between">
                            <div
                                class="bg-secondary/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-secondary w-[58px]">
                                <i class="uil uil-user"></i>
                            </div>
                            <div>
                                <h4
                                    class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                                    <span>
                                        {{ $modcount }}
                                    </span>
                                </h4>
                                <span class="font-normal text-body dark:text-white/60 text-15">Moderator</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                    <div bordered="false"
                        class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                        <div class="flex justify-between">
                            <div
                                class="bg-warning/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-warning w-[58px]">
                                <i class="uil uil-user"></i>
                            </div>
                            <div>
                                <h4
                                    class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                                    <span>
                                        {{ $mediacount }}
                                    </span>
                                </h4>
                                <span class="font-normal text-body dark:text-white/60 text-15">Media</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-12 2xl:col-span-3 md:col-span-6">

                    <div bordered="false"
                        class="px-[25px] py-[39.50px] bg-white dark:bg-white/10 rounded-10 relative text-[15px] text-theme-gray dark:text-white/60 leading-6">
                        <div class="flex justify-between">
                            <div
                                class="bg-success/10 flex h-[58px] text-[30px] items-center justify-center order-2 rounded-2xl text-success w-[58px]">
                                <i class="uil uil-user"></i>
                            </div>
                            <div>
                                <h4
                                    class="mb-0 text-3xl max-lg:text-[26px] max-sm:text-2xl font-semibold leading-normal text-dark dark:text-white/[.87]">
                                    <span>
                                        {{ $membercount }}
                                    </span>
                                </h4>
                                <span class="font-normal text-body dark:text-white/60 text-15">Member</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-12">
                    <div
                        class="bg-white dark:bg-box-dark-up m-0 p-10 text-theme-gray dark:text-subtitle-dark text-[15px] rounded-10 relative mb-[25px] w-full py-[30px] px-[25px] flex flex-col gap-x-[15px] lg:gap-y-[25px] gap-y-[15px]">
                        <div
                            class="text-dark dark:text-title-dark font-medium text-[17px] flex items-center justify-between max-sm:flex-col max-sm:gap-[15px]">
                            <h4 class="mb-0 text-[20px] leading-6 font-medium text-dark dark:text-title-dark">Semua Pengguna
                            </h4>
                            <!-- Modal -->
                            <form action="users/add" method="post">
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
                                                    Tambahkan Pengguna
                                                </h5>
                                                <!--Close button-->
                                                <button type="button"
                                                    class="box-content border-none rounded-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                    data-te-modal-dismiss aria-label="Close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5 text-dark dark:text-title-dark">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="relative flex-auto p-4" data-te-modal-body-ref>
                                                <div class="mb-4">
                                                    <label for="user-name"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama
                                                        Pengguna</label>
                                                    <input type="text" id="user-name" name="name"
                                                        class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                        placeholder="Nama" autocomplete="name">
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label for="user-password"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                                                    <input type="password" id="user-password" name="password"
                                                        class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                        placeholder="Password" autocomplete="password">
                                                        @error('password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label for="user-email"
                                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat
                                                        Email</label>
                                                    <input type="email" id="user-email" name="email"
                                                        class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                        placeholder="Alamat email" autocomplete="email">
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label for="user-role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Peran</label>

                                                    <select id="user-role" name="role" data-te-select-init data-te-class-select-input="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] capitalize py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]" data-te-class-notch-leading="!border-0 !shadow-none group-data-[te-input-focused]:shadow-none group-data-[te-input-focused]:border-none" data-te-class-notch-middle="!border-0 !shadow-none !outline-none" data-te-class-notch-trailing="!border-0 !shadow-none !outline-none">
                                                        <option value="mod">Moderator</option>
                                                        <option value="media">Media</option>
                                                        <option value="member">Member</option>
                                                    </select>
                                                </div>
                                            </div>



                                            <!--Modal footer-->
                                            <div
                                                class="flex flex-wrap items-center justify-end flex-shrink-0 gap-2 p-4 border-t-2 border-b border-opacity-100 rounded-b-md border-regular dark:border-box-dark-up">
                                                <button type="submit"
                                                    class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-14 font-medium capitalize leading-normal text-white  transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                    data-te-ripple-init data-te-ripple-color="light">
                                                    Simpan
                                                </button>
                                                <button type="button"
                                                    class="ml-1 inline-block rounded bg-secondary px-6 pb-2 pt-2.5 text-14 font-medium capitalize leading-normal text-white  transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                    data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                                    Batal
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
                                <span class="m-0">Tambahkan Pengguna</span>
                            </button>
                        </div>

                        {{-- <div
                            class="flex items-center flex-wrap justify-between gap-x-[30px] gap-y-[10px] max-lg:flex-col max-lg:justify-center">
                            <div class="flex items-center max-md:flex-wrap max-sm:justify-center gap-[10px]">
                                <div class="inline-flex items-center">
                                    <span class="me-2 dark:text-subtitle-dark">Nama Pengguna:</span>
                                    <input type="search" placeholder="Cari nama"
                                        class="h-10 px-[20px] text-body dark:text-subtitle-dark bg-white dark:bg-box-dark-up border-normal border-1 dark:border-box-dark-up rounded-6 outline-none placeholder:text-gray dark:placeholder:text-subtitle-dark search-close-icon:appearance-none search-close-icon:w-[20px] search-close-icon:h-[23px] search-close-icon:bg-[url(images/svg/x.svg)] search-close-icon:cursor-pointer"
                                        autocomplete="off">
                                </div>
                                <div class="inline-flex items-center">
                                    <span class="me-2 dark:text-subtitle-dark">Peran</span>
                                    <select data-te-select-init
                                        data-te-class-select-input="py-[7px] px-[20px] w-full capitalize [&~span]:top-[14px] [&~span]:w-[15px] [&~span]:h-[15px] [&~span]:text-body dark:[&~span]:text-white text-light dark:text-subtitle-dark border-normal dark:border-box-dark-up border-1 rounded-6 dark:bg-box-dark-up outline-none ltr:[&~span]:right-[0.75rem] rtl:[&~span]:left-[0.75rem] rtl:[&~span]:right-auto"
                                        data-te-class-notch-leading="!border-0 !shadow-none group-data-[te-input-focused]:shadow-none group-data-[te-input-focused]:border-none"
                                        data-te-class-notch-middle="!border-0 !shadow-none !outline-none"
                                        data-te-class-notch-trailing="!border-0 !shadow-none !outline-none">
                                        <option value="member">Member</option>
                                        <option value="media">Media</option>
                                        <option value="mod">Moderator</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}

                        <form
                        class="flex items-center flex-wrap justify-left gap-x-[30px] gap-y-[10px] max-lg:flex-col max-lg:justify-center"
                        action="{{ route(Auth::user()->role . '.users') }}" method="GET">
                        <div
                            class="flex items-center flex-wrap justify-between gap-x-[30px] gap-y-[10px] max-lg:flex-col max-lg:justify-center">
                            <div class="flex items-center max-md:flex-wrap max-sm:justify-center gap-[10px]">
                                <div class="inline-flex items-center">
                                    <span class="me-2 dark:text-subtitle-dark">Nama Pengguna:</span>
                                    <input type="search" name="search" placeholder="Cari nama"
                                        class="h-10 px-[20px] text-body dark:text-subtitle-dark bg-white dark:bg-box-dark-up border-normal border-1 dark:border-box-dark-up rounded-6 outline-none placeholder:text-gray dark:placeholder:text-subtitle-dark search-close-icon:appearance-none search-close-icon:w-[20px] search-close-icon:h-[23px] search-close-icon:bg-[url(images/svg/x.svg)] search-close-icon:cursor-pointer"
                                        autocomplete="on">
                                </div>
                                {{-- <div class="inline-flex items-center">
                                    <span class="me-2 dark:text-subtitle-dark">Peran:</span>
                                    <input type="search" name="roleFilter"  placeholder="Cari peran"
                                        class="h-10 px-[20px] text-body dark:text-subtitle-dark bg-white dark:bg-box-dark-up border-normal border-1 dark:border-box-dark-up rounded-6 outline-none placeholder:text-gray dark:placeholder:text-subtitle-dark search-close-icon:appearance-none search-close-icon:w-[20px] search-close-icon:h-[23px] search-close-icon:bg-[url(images/svg/x.svg)] search-close-icon:cursor-pointer"
                                        autocomplete="off">
                                </div> --}}
                            </div>
                        </div>
                        <button type="submit"
                            style="
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    padding: 10px 20px;
                    border-radius: 4px;
                    font-size: 16px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                    "
                            onmouseover="this.style.backgroundColor='#0056b3'"
                            onmouseout="this.style.backgroundColor='#007bff'">
                            Filter
                        </button>
                    </form>



                        <div class="max-h-[455px] pb-[15px] scrollbar overflow-y-auto">
                            <table class="min-w-full px-10 text-sm font-light text-left whitespace-nowrap">
                                <thead>
                                    <tr class="whitespace-nowrap">
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-[25px] py-[17px] text-start text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden rounded-s-[10px] sticky top-0">
                                            ID</th>
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                            Nama Pengguna</th>
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px]  font-medium border-none before:hidden sticky top-0">
                                            Alamat Email</th>
                                        {{-- <th class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0 max-w-sm overflow-hidden">
                                    Password</th> --}}
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                            Peran</th>
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-4 py-[17px] text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden sticky top-0">
                                            Terakhir Diubah</th>
                                        <th
                                            class="bg-regularBG dark:bg-box-dark-up px-[25px] py-[17px] text-end text-dark dark:text-title-dark text-[16px] font-medium border-none before:hidden rounded-e-[10px] sticky top-0">
                                            Buat Perubahan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $u)
                                        <tr class="group">
                                            <td
                                                class="ps-[25px] pe-4 py-[12px] text-start last:text-end text-dark dark:text-title-dark group-hover:bg-transparent text-15 font-medium border-none before:hidden rounded-s-[4px]">
                                                {{ $u->id }}
                                            </td>
                                            <td
                                                class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                                <div class="flex items-center">
                                                    {{-- <div class="me-2.5 w-[34px] h-[34px]">
                                          <!-- <img class="min-w-[34px] h-[34px] rounded-full" src="{{ asset('vendor/hexa/images/avatars/t1.jpg') }}" alt="John Doe"> -->
                                       </div> --}}
                                                    <span
                                                        class="font-medium capitalize text-dark dark:text-title-dark text-15">
                                                        {{ $u->name }}</span>
                                                </div>
                                            </td>
                                            <td
                                                class="ps-[20px] py-[12px] font-normal last:text-end lowercase text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                                {{ $u->email }}
                                            </td>
                                            {{-- <td class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                    {{$u->password}}</td> --}}
                                            <td
                                                class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                                {{ $u->role }}</td>
                                            <td
                                                class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[14px] text-dark dark:text-title-dark border-none group-hover:bg-transparent">
                                                {{ $u->updated_at }}
                                            </td>
                                            <td
                                                class="ps-[20px] py-[12px] font-normal last:text-end capitalize text-[10px] text-dark dark:text-title-dark border-none group-hover:bg-transparent rounded-e-[4px]">
                                                <div
                                                    class="text-light dark:text-subtitle-dark text-[19px]  flex items-center justify-center p-0 m-0 gap-[5px]">
                                                    <!-- Button trigger modal -->
                                                    <a href="#exampleModal{{ $u->id }}"
                                                        data-te-toggle="modal"
                                                        data-te-ripple-init data-te-ripple-color="light"
                                                        style="background-color: #007bff; color: white; border: none; padding: 0.5rem; border-radius: 0.25rem; font-size: 14px; cursor: pointer; text-decoration: none;">
                                                        <i class="fas fa-edit"></i>
                                                     </a>

                                                    <!-- Modal -->
                                                    <form action="users/update" method="post">
                                                        {{ csrf_field() }}
                                                        <div data-te-modal-init
                                                            class="fixed left-0 top-0 z-[1055] hidden h-auto w-full overflow-y-auto overflow-x-hidden outline-none"
                                                            id="exampleModal{{ $u->id }}" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel{{ $u->id }}"
                                                            aria-hidden="true">
                                                            <div data-te-modal-dialog-ref
                                                                class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                                <div
                                                                    class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                                    <div
                                                                        class="flex items-center justify-between flex-shrink-0 p-4 border-b border-opacity-100 rounded-t-md border-regular dark:border-box-dark-up">
                                                                        <!--Modal title-->
                                                                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                                            id="exampleModalLabel">
                                                                            Edit Data Pengguna
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

                                                                    <!-- Modal body -->
                                                                    <div class="relative flex-auto p-4"
                                                                        data-te-modal-body-ref>
                                                                        <div class="">
                                                                            <input type="hidden" name="id"
                                                                                class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] capitalize py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                                                value="{{ $u->id }}">
                                                                        </div>
                                                                        <div class="mb-4">
                                                                            <label for="user-name"
                                                                                class="block text-sm text-left font-medium text-gray-700 dark:text-gray-300 ">Nama</label>
                                                                            <input type="text" id="user-name"
                                                                                name="name"
                                                                                class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                                                placeholder="Nama" autocomplete="name"
                                                                                value="{{ $u->name }}">
                                                                        </div>
                                                                        <div class="mb-4">
                                                                            <label for="user-password"
                                                                                class="block text-sm text-left font-medium text-gray-700 dark:text-gray-300">Password</label>
                                                                            <input type="password" id="user-password"
                                                                                name="password"
                                                                                class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                                                placeholder="Password"
                                                                                autocomplete="new-password"
                                                                                >
                                                                        </div>
                                                                        <div class="mb-4">
                                                                            <label for="user-email"
                                                                                class="block text-sm text-left font-medium text-gray-700 dark:text-gray-300">Email</label>
                                                                            <input type="email" id="user-email"
                                                                                name="email"
                                                                                class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                                                placeholder="Email" autocomplete="email"
                                                                                value="{{ $u->email }}">
                                                                        </div>
                                                                        <div class="mb-4">
                                                                            <label for="user-role"
                                                                                class="block text-sm text-left font-medium text-gray-700 dark:text-gray-300">Peran</label>
                                                                            <select id="user-role" name="role"
                                                                                data-te-select-init
                                                                                data-te-class-select-input="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[19px] capitalize py-[12px] min-h-[50px] outline-none placeholder:text-[#747474] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary focus:shadow-[0_5px_20px_rgba(130,49,211,0.1)]"
                                                                                data-te-class-notch-leading="!border-0 !shadow-none group-data-[te-input-focused]:shadow-none group-data-[te-input-focused]:border-none"
                                                                                data-te-class-notch-middle="!border-0 !shadow-none !outline-none"
                                                                                data-te-class-notch-trailing="!border-0 !shadow-none !outline-none">
                                                                                <option value="mod"
                                                                                    {{ $u->role == 'mod' ? 'selected' : '' }}>
                                                                                    Moderator</option>
                                                                                <option value="media"
                                                                                    {{ $u->role == 'media' ? 'selected' : '' }}>
                                                                                    Media</option>
                                                                                <option value="member"
                                                                                    {{ $u->role == 'member' ? 'selected' : '' }}>
                                                                                    Member</option>
                                                                                    Media</option>
                                                                                <option value="admin"
                                                                                    {{ $u->role == 'admin' ? 'selected' : '' }}>
                                                                                    Admin</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>



                                                                    <!--Modal footer-->
                                                                    <div
                                                                        class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 border-t-2 border-b border-opacity-100 rounded-b-md border-regular dark:border-box-dark-up">
                                                                        <button type="submit"
                                                                            class="ml-1 inline-block rounded bg-primary px-4 pb-2 pt-2.5 text-14 font-medium capitalize leading-normal text-white  transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                                            data-te-ripple-init
                                                                            data-te-ripple-color="light">
                                                                            Simpan Perubahan
                                                                        </button>
                                                                        <button type="button"
                                                                            class="ml-1 inline-block rounded bg-secondary px-6 pb-2 pt-2.5 text-14 font-medium capitalize leading-normal text-white  transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                                            data-te-modal-dismiss data-te-ripple-init
                                                                            data-te-ripple-color="light">
                                                                            Batal
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <a href="users/delete/{{ $u->id }}"
                                                        onclick="return confirm('Yakin menghapus pengguna ini?');"
                                                        style="background-color: #dc3545; color: white; border: none; padding: 0.5rem 1rem; border-radius: 0.25rem; font-size: 14px; cursor: pointer; text-decoration: none; display: inline-block;">
                                                        Hapus
                                                    </a>
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
