@extends('dashboard.layouts.main')
@section('content')
<h1 class="text-2xl sm:text-3xl  ">Sekolah</h1>
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
            <input type="search" id="search" name="search"
                @if (request('search')) value="{{ request('search') }}" @endif
                class="block w-[240px] md:w-[360px] lg:w-[400px] p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                placeholder="Cari Sekolah">
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
        </div>

    </form>

</div>
<div class="mt-8 w-full overflow-x-auto overflow-y-auto">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        {{-- @if ($dataSekolah->isNotEmpty()) --}}
            <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-white uppercase bg-blue-500 ">
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
                    {{-- @foreach ($dataSekolah as $sekolah) --}}
                        <tr class="bg-white border-b  hover:bg-gray-50 ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                <span class="sm:text-sm md:text-md uppercase">Nama Sekolah</span>
                            </th>
                            <td class="px-6 py-4">
                                <span class="sm:text-sm md:text-md">NPSN</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="sm:text-sm md:text-md">Alamat Sekolah</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="sm:text-sm md:text-md">Negeri</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-center items-center gap-1">
                                    <a href="{{route('admin.hasilsurvey')}}"
                                        class="text-blue-500 duration-300 ease-in-out underline text-sm text-center mr-3
                            md:mr-0">Murid</a>
                                </div>
                            </td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        {{-- @else
            <h1 class="text-center text-2xl font-bold text-red-600 mt-20">Sekolah Tidak ditemukan</h1>
        @endif --}}

    </div>

</div>


</div>
@endsection