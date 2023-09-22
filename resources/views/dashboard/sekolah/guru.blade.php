@extends('dashboard.layouts.main')
@section('content')
<div class="flex justify-start items-center gap-5">
    <p class="font-bold text-lg my-0">
        <span class=" md:text-xl uppercase">Guru {{ auth('sekolah')->user()->nama_sekolah }}</span>
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
            <input type="search" id="search" name="search" @if (request('search')) value="{{ request('search') }}"
                @endif
                class="block w-[360px] md:w-[458px] p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                placeholder="Cari Guru">
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2  hover:bg-blue-500 duration-300 ease-in-out">Search</button>
        </div>

    </form>
    <a href="{{ route('sekolah.viewTambahGuru') }}">
        <div class="w-12 h-12 flex justify-center items-center  rounded-lg border-black cursor-pointer md:w-14">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13 9C13 8.44772 12.5523 8 12 8C11.4477 8 11 8.44772 11 9V11H9C8.44772 11 8 11.4477 8 12C8 12.5523 8.44772 13 9 13H11V15C11 15.5523 11.4477 16 12 16C12.5523 16 13 15.5523 13 15V13H15C15.5523 13 16 12.5523 16 12C16 11.4477 15.5523 11 15 11H13V9ZM7.25007 2.38782C8.54878 2.0992 10.1243 2 12 2C13.8757 2 15.4512 2.0992 16.7499 2.38782C18.06 2.67897 19.1488 3.176 19.9864 4.01358C20.824 4.85116 21.321 5.94002 21.6122 7.25007C21.9008 8.54878 22 10.1243 22 12C22 13.8757 21.9008 15.4512 21.6122 16.7499C21.321 18.06 20.824 19.1488 19.9864 19.9864C19.1488 20.824 18.06 21.321 16.7499 21.6122C15.4512 21.9008 13.8757 22 12 22C10.1243 22 8.54878 21.9008 7.25007 21.6122C5.94002 21.321 4.85116 20.824 4.01358 19.9864C3.176 19.1488 2.67897 18.06 2.38782 16.7499C2.0992 15.4512 2 13.8757 2 12C2 10.1243 2.0992 8.54878 2.38782 7.25007C2.67897 5.94002 3.176 4.85116 4.01358 4.01358C4.85116 3.176 5.94002 2.67897 7.25007 2.38782Z"
                        fill="#323232"></path>
                </g>
            </svg>
        </div>
    </a>
</div>
<div class="mt-8 w-full  overflow-x-auto overflow-y-auto rounded-lg">
    @if ($daftarGuru->isNotEmpty())
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-white uppercase bg-blue-500  dark:bg-gray-700 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    NUPTK
                </th>
                <th scope="col" class="px-6 py-3">
                    Jenis kelamin
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarGuru as $guru)
            <tr class="bg-white border-b  hover:bg-gray-50 ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    <span class="sm:text-sm md:text-md uppercase">{{ $guru->nama }}</span>
                </th>
                <td class="px-6 py-4">
                    <span class="sm:text-sm md:text-md">{{ $guru->nuptk }}</span>
                </td>

                <td class="px-6 py-4">
                    <span class="sm:text-sm md:text-md">
                        @if ($guru->jenis_kelamin === "L")
                        Laki Laki
                        @else
                        Perempuan
                        @endif
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1 class="text-center text-2xl font-bold text-red-600 mt-20">Daftar Guru Tidak ditemukan</h1>
    @endif
</div>

@endsection