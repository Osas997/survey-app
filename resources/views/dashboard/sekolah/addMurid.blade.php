@extends('dashboard.layouts.main')
@section('content')
   
    <div class="flex justify-start items-center gap-5">
        <p class="font-bold text-lg my-0">
            <span class=" md:text-xl">Tambah Siswa</span>
        </p>
    </div>
    <form action="" method="post">
        @csrf
        <div class="lg:grid lg:grid-cols-1 lg:place-items-center mt-10">
            <div class="mb-6 lg:w-5/12">
                <label for="nutpk" class="block mb-2 text-sm font-medium text-gray-900">NISN</label>
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
            <div class="mb-6 lg:w-5/12">
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat </label>
                <input type="text" id="alamat" name="alamat" placeholder="Jl. Raya.. " class="bg-slate-50 border-2 border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
        </div>
        <div class="md:flex md:justify-center md:items-center  md:flex-row md:gap-4 min-w-full md:w-1/2 ">
            <button type="submit" class="bg-[#29CE00] rounded-lg flex justify-center items-center gap-3 px-16 h-12 mt-4 hover:bg-green-400 ease-in-out  duration-300 ">
                <span class="text-white whitespace-nowrap  text-md">Submit</span>
            </button>     
        </div>
    </form>
    
@endsection