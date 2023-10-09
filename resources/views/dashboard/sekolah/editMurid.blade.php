@extends('dashboard.layouts.main')
@section('content')

<div class="flex justify-start items-center gap-5">
   <div class="w-10 h-10">
      <a href="{{ route('sekolah.murid') }}">
         <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
               <path
                  d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z"
                  fill="#0F0F0F"></path>
            </g>
         </svg>
      </a>
   </div>
   <p class="font-bold text-lg my-0">
      <span class=" md:text-xl">Edit Siswa</span>
   </p>
</div>
<form action="{{ route('sekolah.updateMurid', $murid->id) }}" method="post">
   @method('PATCH')
   @csrf
   <div class="lg:grid lg:grid-cols-1 lg:place-items-center mt-10">
      <div class="mb-3 lg:w-5/12">
         <label for="nisn" class="block mb-2 text-sm font-medium text-gray-900">NISN</label>
         <input type="text" id="nisn" value="{{ $murid->nisn }}" name="nisn" placeholder="Nisn Murid" class="bg-slate-50 border-2 border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                @error('nisn')
                    border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                @enderror
                ">
         @error('nisn')
         <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
         @enderror
      </div>

      <div class="mb-3 lg:w-5/12">
         <label for="nama_murid" class="block mb-2 text-sm font-medium text-gray-900">Nama Murid</label>
         <input type="text" id="nama_murid" value="{{ $murid->nama_murid }}" name="nama_murid" placeholder="Nama Murid"
            class="bg-slate-50 border-2 border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                @error('nama_murid')
                    border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                @enderror">
         @error('nama_murid')
         <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
         @enderror
      </div>

      <div class="mb-3 lg:w-5/12">
         <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
            Kelamin</label>
         <select id="gender" name="jenis_kelamin" required
            class="bg-gray-50  border-blue-500 border-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option @if ($murid->jenis_kelamin == 'l' || $murid->jenis_kelamin == 'L') selected @endif value="l">Laki
               Laki</option>
            <option @if ($murid->jenis_kelamin == 'p' || $murid->jenis_kelamin == 'P') selected @endif
               value="p">Perempuan</option>
         </select>
      </div>
      <div class="mb-3 lg:w-5/12">
         <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat </label>
         <input type="text" id="alamat" name="alamat" value="{{ $murid->alamat }}" placeholder="Jl. Raya.. " class="bg-slate-50 border-2 border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                @error('alamat')
                    border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500
                @enderror">
         @error('alamat')
         <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
         @enderror
      </div>
   </div>
   <div class="md:flex md:justify-center md:items-center  md:flex-row md:gap-4 min-w-full md:w-1/2 ">
      <button type="submit"
         class="bg-[#29CE00] rounded-lg flex justify-center items-center gap-3 px-16 h-12 mt-4 hover:bg-green-400 ease-in-out  duration-300 ">
         <span class="text-white whitespace-nowrap  text-md">Submit</span>
      </button>
   </div>
</form>

@endsection