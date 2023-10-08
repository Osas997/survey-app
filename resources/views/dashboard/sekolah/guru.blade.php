@extends('dashboard.layouts.main')
@section('content')

{{-- toast --}}
<div class="flex justify-start items-center gap-5">
    <p class="font-bold text-lg my-0">
        <span class=" md:text-xl uppercase">Guru {{ auth('sekolah')->user()->nama_sekolah }}</span>
    </p>
</div>
@if (session('successAddGuru'))
<div id="toast-success"
    class="flex absolute top-20 right-10 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow "
    role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg ">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
        </svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Guru berhasil dibuat.</div>
    <button type="button"
        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 "
        data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
@endif

{{-- toast --}}
@if (session('successDeleteGuru'))
<div id="toast-warning"
    class="flex absolute items-center top-20 right-10 w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
    role="alert">
    <div
        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
        </svg>
        <span class="sr-only">Warning icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">{{ session('successDeleteGuru') }}</div>
    <button type="button"
        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
        data-dismiss-target="#toast-warning" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
@endif

{{-- toast --}}
@if (session('successExel'))
<div id="toast-success"
    class="flex absolute top-20 right-10 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow "
    role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg ">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
        </svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">{{ session('successExel') }}.</div>
    <button type="button"
        class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 "
        data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
@endif

{{-- search --}}
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

{{-- upload exel --}}
<div class="mt-4">
    <form action="{{ route('sekolah.guruExel') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file
            Exel</label>
        <div class="flex flex-wrap items-center justify-start gap-4">
            <input
                class="block w-full md:w-2/4 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input" name="guru_exel" type="file" />
            <button type="submit"
                class="text-white w-full md:w-auto bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2">Import</button>
            <button type="button" data-modal-target="crypto-modal" data-modal-toggle="crypto-modal"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
                Contoh
            </button>
        </div>

        <!-- Main modal -->
        <div id="crypto-modal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                tes
            </div>
        </div>

    </form>
</div>

{{-- error --}}
@error('guru_exel')
<div>
    <h1 class="text-red-600 text-lg my-3">{{ $message }}</h1>
</div>
@enderror

@if (session()->has('failures'))
<div class="alert alert-danger my-2 flex flex-col">
    <p class="font-bold text-gray-700">Terjadi kesalahan saat mengimpor data:</p>
    <div>
        <ul>
            @foreach (session()->get('failures') as $failure)
            <ul>
                @foreach ($failure->errors() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endforeach
        </ul>
    </div>
</div>
@endif


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
                <th scope="col" class="px-6 py-3 text-center">
                    Aksi
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
                <td class="px-6 py-4 text-center">
                    <a href="" class="font-medium text-blue-600 mx-2 hover:underline">Edit</a>
                    <form action="{{ route('sekolah.hapusGuru', $guru->id) }}" method="POST" class="inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit"
                            onclick="return confirm('Apakah Anda Ingin Menghapus Guru Ini ? \nAnda Juga Akan Menghapus Semua Data Terkait Guru Ini')"
                            class="font-medium text-red-600 mx-2 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1 class="text-center text-2xl font-bold text-red-600 mt-20">Daftar Guru Tidak ditemukan</h1>
    @endif
    <div class="flex justify-center items-center mt-6 paginate">
        {{ $daftarGuru->links() }}
    </div>
</div>

@endsection