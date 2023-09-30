@extends('dashboard.layouts.main')
@section('content')
    <div class="flex justify-start items-center gap-5">
        <p class="font-bold text-lg my-0">
            {{-- <span class=" md:text-xl uppercase">Murid {{ $namaSekolah }}</span> --}}
            <span class=" md:text-xl uppercase">Murid SDN 2 Banyuwangi</span>
        </p>
    </div>
    <div class="flex justify-start items-center gap-4 mt-10  ">
        <form action="" method="get">
            <div class="relative ">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="search"
                    @if (request('search')) value="{{ request('search') }}" @endif
                    class="block w-[360px] md:w-[458px] p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Cari Murid" name="search">
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2  hover:bg-blue-500 duration-300 ease-in-out">Search</button>
            </div>
        </form>

    </div>
    <div class="mt-8 w-full  overflow-x-auto overflow-y-auto rounded-lg">
        {{-- @if ($daftarMurid->isNotEmpty()) --}}
            <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-white uppercase bg-blue-500 dark:bg-gray-700 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Murid
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Skor Pelaku
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Skor Korban
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Interpretasi
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Klasifikasi
                        </th>
                   
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($daftarMurid as $murid) --}}
                        <tr class="bg-white border-b  hover:bg-gray-50 ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{-- <span class="sm:text-sm md:text-md uppercase">{{ $murid->nama_murid }}</span> --}}
                                <span class="sm:text-sm md:text-md uppercase">DIki Brong</span>
                            </th>
                            <td class="px-6 py-4">
                                {{-- <span class="sm:text-sm md:text-md">{{ $murid->nisn }}</span> --}}
                                <span class="sm:text-sm md:text-md">54</span>
                            </td>
                            <td class="px-6 py-4">
                                {{-- <span class="sm:text-sm md:text-md">{{ $murid->nisn }}</span> --}}
                                <span class="sm:text-sm md:text-md">41</span>
                            </td>
                            <td class="px-6 py-4">
                                {{-- <span class="sm:text-sm md:text-md">{{ $murid->alamat }}</span> --}}
                                <span class="sm:text-sm md:text-md">Memiliki kecenderungan menjadi korban bullying Sangat Tinggi</span>
                            </td>
                            <td class="px-6 py-4">
                                {{-- <span class="sm:text-sm md:text-md">{{ $murid->alamat }}</span> --}}
                                <span class="sm:text-sm md:text-md">Memiliki kecenderungan menjadi pelaku bullying Sangat Tinggi</span>
                            </td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        {{-- @else
            <h1 class="text-center text-2xl font-bold text-red-600 mt-20">Daftar Murid Tidak ditemukan</h1>
        @endif --}}
    </div>

@endsection
