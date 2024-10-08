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
                <div class="col-span-12">
                    <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10 relative">
                        <div class="p-[25px]">
                            <div class="mb-4">
                                <img id="previewImage1" src="{{ asset($calon->foto_calon) }}" alt="Calon Photo" class="mx-auto rounded-4" style="display: {{ $calon->foto_calon ? 'block' : 'none' }}">
                            </div>

                            <div class="mt-4">
                                <label for="image1" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Upload Foto Calon</label>
                                <input type="file" id="image1" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="foto_calon" onchange="previewFile('image1', 'previewImage1')">
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
                                        @error('nama_calon')
        						            <span class="text-danger">{{ $message }}</span>
    						            @enderror                                        
                                    </div>
                                    <div class="mb-4">
                                        <label for="visiVertical" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Visi</label>
                                        <textarea id="visiVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="visi" required>{{ old('visi', $calon->visi) }}</textarea>
                                        @error('visi')
        						            <span class="text-danger">{{ $message }}</span>
    						            @enderror            
                                    </div>
                                    <div class="mb-4">
                                        <label for="visiVertical" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Teks Deskripsi Visi</label>
                                        <textarea id="visiVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="desc_visi" required>{{ $calon->more_visi }}</textarea>
                                        @error('more_visi')
        						            <span class="text-danger">{{ $message }}</span>
    						            @enderror            
                                    </div>
                                    
                                    
                                    <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark text-[15px] rounded-10">
                                        <div class="py-[16px] px-[25px] text-dark dark:text-title-dark font-medium text-[17px] border-b border-regular dark:border-box-dark-up">
                                            <h4 class="mb-0 text-lg font-medium capitalize text-dark dark:text-title-dark">Misi</h4>
                                        </div>
                                        <div class="p-[25px] flex items-center gap-[15px]">
                                            <div class="grid w-full grid-cols-12 gap-5 bg-regular dark:bg-box-dark-up p-[25px] rounded-md">
                                                @foreach($misis as $misi)
                                                <div class="col-span-12 lg:col-span-4 sm:col-span-6">
                                                    <div class="bg-white dark:bg-box-dark m-0 p-0 text-body dark:text-subtitle-dark border-1 border-regular dark:border-box-dark-up text-[15px] rounded-10">
                                                        
                                                        <div class="py-[10px] px-[20px] text-dark dark:text-title-dark font-medium text-[17px] border-b border-regular dark:border-box-dark-up flex items-center justify-between gap-[15px]">
                                                        <input type="text" id="head_misi_{{$misi->id}}" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="misi[{{$misi->id}}][head_misi]" value="{{ $misi->head_misi }}" required>
                                                        
                                                        @error('head_misi_' . $misi->id)
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <input type="hidden" id="nameVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="misi[{{$misi->id}}][id]" value="{{ $misi->id }}" required>
                                                        <button disabled type="button" style="background-color:#bb2124 " class="delete-misi text-white px-2 py-1 rounded" onclick="if(confirm('Yakin ingin menghapus misi ini?')){window.location='{{ URL::to(Auth::user()->role . '/misi/'.$misi->id.'/delete') }}'}">Hapus</button>
                                                        </div>
                                                        <div class="p-[20px]">
                                                            <p class="text-14 mb-[8px] text-dark dark:text-title-dark font-normal">
                                                                <textarea type="text" id="body_misi_{{$misi->id}}" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="misi[{{$misi->id}}][body_misi]" required>{{ $misi->body_misi }}</textarea>
                                                                @error('body_misi_' . $misi->id)
        						                                    <span class="text-danger">{{ $message }}</span>
    						                                    @enderror            
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="px-[25px] pb-[25px]">
                                            <button disabled type="button" id="addMisi" class="bg-blue-500 text-white px-4 py-2 rounded" onclick="window.location='{{ URL::to(Auth::user()->role . '/misi/add') }}'">Tambah Misi</button>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="profileVertical" class="block text-sm font-medium capitalize text-dark dark:text-title-dark">Profile</label>
                                        <textarea id="profileVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="profile" style="min-height: 250px; height: fit-content;" required>{{ old('profile', $calon->profile) }}</textarea>
                                        @error('profile')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
        function previewFile(inputId, previewId) {
            var file = document.getElementById(inputId).files[0];
            var reader = new FileReader();
            var preview = document.getElementById(previewId);

            reader.onloadend = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
            };
        
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
                preview.style.display = 'none';
            }
        }
    </script>
@endsection
