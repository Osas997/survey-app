@extends('dashboard.layouts.main')
@section('content')
   
    <div class="flex justify-start items-center gap-5">
        <div class="w-10 h-10">
            <a href="">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z" fill="#0F0F0F"></path> </g></svg>
            </a>
        </div>
        <p class="font-bold text-lg my-0">
            <span class=" md:text-xl">Tambah Guru</span>
        </p>
    </div>
    <form action="" method="post">
        @csrf
        <div class="lg:grid lg:grid-cols-1 lg:place-items-center mt-10">
            <div class="mb-6 lg:w-5/12">
                <label for="nutpk" class="block mb-2 text-sm font-medium text-gray-900">NUPTK</label>
                <input type="text" id="npsn" name="nuptk" placeholder="nuptk guru" class="bg-slate-50 border-2 border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" >
            </div>
            
            <div class="mb-6 lg:w-5/12">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama </label>
                <input type="text" id="nama" name="namaSekolah" placeholder="Nama Guru " class="bg-slate-50 border-2 border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-6 lg:w-5/12">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" id="password" name="password" placeholder="Strong Password" class="bg-slate-50 border-2 border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-6 lg:w-5/12">
                <label for="jenisKelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                <input type="text" id="jenisKelamin" name="jenisKelamin" placeholder="Jl. Raya.. " class="bg-slate-50 border-2 border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
        </div>
        <div class="md:flex md:justify-center md:items-center  md:flex-row md:gap-4 min-w-full md:w-1/2 ">
            <button type="submit" class="bg-[#29CE00] rounded-lg flex justify-center items-center gap-3 px-16 h-12 mt-4 hover:bg-green-400 ease-in-out  duration-300 ">
                <span class="text-white whitespace-nowrap  text-md">Submit</span>
            </button>     
        </div>
    </form>
    
@endsection