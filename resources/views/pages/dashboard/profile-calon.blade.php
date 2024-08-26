@extends('layouts.dashboard.app')

@section('content')
    <main class="bg-normalBG dark:bg-main-dark">
        <div class="mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12">
                    <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Profile Calon</h4>
                </div>
            </div>
            <form action="{{ route(Auth::user()->role . '.calon.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="grid grid-cols-12 gap-[25px] items-start">
                <!-- Left side: Image and upload button -->
                <div class="col-span-12 md:col-span-4">
                    <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                        <div class="p-[25px]">
                            <div class="mb-4">
                                <img id="previewImage" src="{{ Storage::URL('img/' . $calon->foto_calon) }}" alt="Calon Photo" class="w-full rounded-4" style="display: {{ $calon->foto_calon ? 'block' : 'none' }}">
                            </div>

                            <div class="mt-4">
                                <label for="photoVertical" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Upload Photo</label>
                                <input type="file" id="photoVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="foto_calon" onchange="previewFile()">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side: Form fields -->
                <div class="col-span-12 md:col-span-8">
                    <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                        <div class="p-[25px]">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first() }}</p>
                                </div>
                            @endif

                            
                                <div class="pb-4">
                                    <input name="id" value="{{$calon->id}}" hidden>

                                    <div class="mb-4">
                                        <label for="nameVertical" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Nama Calon</label>
                                        <input type="text" id="nameVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="nama_calon" value="{{ old('nama_calon', $calon->nama_calon) }}" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="visiVertical" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Visi</label>
                                        <textarea id="visiVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="visi" required>{{ old('visi', $calon->visi) }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="misiVertical" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Misi</label>
                                        <textarea id="misiVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="misi" required>{{ old('misi', $calon->misi) }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="profileVertical" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Profile</label>
                                        <textarea id="profileVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="profile" required>{{ old('profile', $calon->profile) }}</textarea>
                                    </div>

                                    <div class="flex items-center gap-[15px] mt-[14px]">
                                        <button type="submit" class="px-[30px] h-[44px] text-white bg-primary border-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear">Update Profile</button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </main>

    <script>
        function previewFile() {
            const file = document.querySelector('#photoVertical').files[0];
            const preview = document.querySelector('#previewImage');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    preview.src = event.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }
    </script>
@endsection
