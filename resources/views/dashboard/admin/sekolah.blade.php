@extends('dashboard.layouts.main')
@section('content')
<h1 class="text-2xl sm:text-3xl">Sekolah</h1>
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
                class="block w-[360px] md:w-[500px] p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Cari Sekolah">
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>

    </form>
    <div class="w-10 h-10 flex justify-center items-center border-2 rounded-lg border-black cursor-pointer md:w-12">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M6 12H18M12 6V18" stroke="#000000" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </g>
        </svg>
    </div>

</div>
<div class="mt-8 w-full  overflow-x-auto overflow-y-auto">
    @if ($dataSekolah->isNotEmpty())
    <table class="border-collapse border-none w-max table-fixed text-left sm:w-full">
        <!-- head -->
        <thead>
            <tr class="bg-[#0090D4] text-white">
                <th class="w-[2%]"></th>
                <th class="mx-2 font-medium w-40 sm:w-1/4 py-4 text-sm">
                    <span class="sm:text-base md:text-lg">Sekolah</span>
                </th>
                <th class="font-medium w-20 sm:w-[20%] py-4 text-sm">
                    <span class="sm:text-base md:text-lg">NPSN</span>
                </th>
                <th class="font-medium w-[50%] sm:w-[30%] py-4 text-sm sm:text-base md:text-lg lg:text-xl">
                    <span class="sm:text-base md:text-lg">Alamat</span>
                </th>
                <th class="font-medium w-22 sm:w-1/8 py-4 text-sm sm:text-base md:text-lg lg:text-xl">
                    <span class="sm:text-base md:text-lg">Status</span>
                </th>
                <th class="hidden lg:block w-[1%]"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($dataSekolah as $sekolah)
            <tr class="border-b-2">
                <th></th>
                <th class="font-bold text-xs py-4">
                    <span class="sm:text-sm md:text-md">{{ $sekolah->nama_sekolah }}</span>
                </th>
                <th class="font-normal text-xs py-4">
                    <span class="sm:text-sm md:text-md">{{ $sekolah->npsn }}</span>
                </th>
                <th class="font-normal text-xs py-4">
                    <span class="sm:text-sm md:text-md">{{ $sekolah->alamat_sekolah }}</span>
                </th>
                <th class="font-normal text-xs py-4">
                    <span class="sm:text-sm md:text-md">{{ $sekolah->status }}</span>
                </th>
                <th class="hidden lg:block py-4">
                    <svg class="cursor-pointer w-8 h-8" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#7a7a7a" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1 class="text-center text-2xl font-bold text-red-600 mt-20">Tidak Ada Sekolah</h1>
    @endif

</div>


</div>
@endsection