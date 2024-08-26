@extends('layouts.dashboard.app')


@section('content')

      <!-- Main Content -->
      <main class="bg-normalBG dark:bg-main-dark">
         <div class="mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">
            <div class="grid grid-cols-12 gap-5">
               <div class="col-span-12">
                  <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">Profile Calon</h4>
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

                     <form action="{{ route(Auth::user()->role . '.calon.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="pb-4">
                           <input name="id" value="{{$calon->id}}" hidden>
                           <div>
                              <label for="nameVertical" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Nama Calon</label>
                              <div class="flex flex-col flex-1 md:flex-row">
                                 <input type="text" id="nameVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="nama_calon" value="{{ old('nama_calon', $calon->nama_calon) }}" required>
                              </div>
                           </div>
                           <div>
                              <label for="nameVertical" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Visi</label>
                              <div class="flex flex-col flex-1 md:flex-row">
                                 <textarea type="text" id="nameVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="visi" required>{{$calon->visi}}</textarea>
                              </div>
                           <div>
                              <label for="nameVertical" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Misi</label>
                              <div class="flex flex-col flex-1 md:flex-row">
                                 <textarea type="text" id="nameVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="misi" required>{{$calon->misi}}</textarea>
                              </div>
                           </div>
                           <div>
                              <label for="nameVertical" class="inline-flex items-center w-[178px] mb-2 text-sm font-medium capitalize text-dark dark:text-title-dark">Profile</label>
                              <div class="flex flex-col flex-1 md:flex-row">
                                 <textarea type="text" id="nameVertical" class="rounded-4 border-normal border-1 text-[15px] dark:bg-box-dark-up dark:border-box-dark-up px-[20px] py-[12px] min-h-[50px] outline-none placeholder:text-[#A0A0A0] text-body dark:text-subtitle-dark w-full focus:ring-primary focus:border-primary" name="profile" required>{{$calon->profile}}</textarea>
                              </div>
                           </div>
                           <div class="flex items-center gap-[15px] mt-[14px]">
                              <button type="submit" class="px-[30px] h-[44px] text-white bg-primary border-primary hover:bg-primary-hbr font-medium rounded-4 text-sm w-full sm:w-auto text-center inline-flex items-center justify-center capitalize transition-all duration-300 ease-linear">Update Profile</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <!-- End: Main Content -->

   <!-- End: Wrapping Content -->

   <!-- Customizing option -->

   <!-- End: Customizing option -->


@endsection
