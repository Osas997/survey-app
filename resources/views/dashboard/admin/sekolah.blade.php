@extends('dashboard.layouts.main')
@section('content')
<h1 class="text-2xl sm:text-3xl  ">Sekolah</h1>
<div class="flex justify-start items-center gap-4 mt-10  ">
    <form action="" method="get">
        <div class="relative ">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="search" name="search" @if (request('search')) value="{{ request('search') }}"
                @endif
                class="block w-[240px] md:w-[360px] lg:w-[400px] p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Cari Sekolah">
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>

    </form>
    <a href="{{ route('admin.tambahSekolah') }}">
        <div class="w-12 h-12 flex justify-center items-center  rounded-lg border-black cursor-pointer md:w-14">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13 9C13 8.44772 12.5523 8 12 8C11.4477 8 11 8.44772 11 9V11H9C8.44772 11 8 11.4477 8 12C8 12.5523 8.44772 13 9 13H11V15C11 15.5523 11.4477 16 12 16C12.5523 16 13 15.5523 13 15V13H15C15.5523 13 16 12.5523 16 12C16 11.4477 15.5523 11 15 11H13V9ZM7.25007 2.38782C8.54878 2.0992 10.1243 2 12 2C13.8757 2 15.4512 2.0992 16.7499 2.38782C18.06 2.67897 19.1488 3.176 19.9864 4.01358C20.824 4.85116 21.321 5.94002 21.6122 7.25007C21.9008 8.54878 22 10.1243 22 12C22 13.8757 21.9008 15.4512 21.6122 16.7499C21.321 18.06 20.824 19.1488 19.9864 19.9864C19.1488 20.824 18.06 21.321 16.7499 21.6122C15.4512 21.9008 13.8757 22 12 22C10.1243 22 8.54878 21.9008 7.25007 21.6122C5.94002 21.321 4.85116 20.824 4.01358 19.9864C3.176 19.1488 2.67897 18.06 2.38782 16.7499C2.0992 15.4512 2 13.8757 2 12C2 10.1243 2.0992 8.54878 2.38782 7.25007C2.67897 5.94002 3.176 4.85116 4.01358 4.01358C4.85116 3.176 5.94002 2.67897 7.25007 2.38782Z"
                        fill="#323232">
                    </path>
                </g>
            </svg>
        </div>
    </a>

</div>
<div class="mt-8 w-full overflow-x-auto overflow-y-auto">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @if ($dataSekolah->isNotEmpty())
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-blue-500 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Sekolah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NPSN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataSekolah as $sekolah)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="/admin/siswa/{{ $sekolah->id }}" class="cursor-pointer">
                            <span class="sm:text-sm md:text-md uppercase">{{ $sekolah->nama_sekolah }}</span>
                        </a>
                    </th>
                    <td class="px-6 py-4">
                        <span class="sm:text-sm md:text-md">{{ $sekolah->npsn }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="sm:text-sm md:text-md">{{ $sekolah->alamat_sekolah }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="sm:text-sm md:text-md">{{ $sekolah->status }}</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-center items-center gap-1">
                            <a href=""
                                class="text-blue-500 duration-300 ease-in-out underline text-sm text-center mr-3 md:mr-0">Guru</a>
                            <a href=""
                                class="text-blue-500 duration-300 ease-in-out underline text-sm text-center mr-3 md:mr-0">Murid</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h1 class="text-center text-2xl font-bold text-red-600 mt-20">Sekolah TIdak ditemukan</h1>
        @endif
    </div>
</div>


</div>
@endsection