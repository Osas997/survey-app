@extends('layout.pages')
@section('title','Safe Schools')
@section('content')
<div class="w-screen h-screen overflow-x-hidden scroll-smooth bg-white ">
    @include('dashboard.murid.navbar')
    @if (session('success'))
    <div id="toast-success"
        class="flex absolute top-20 right-10 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow "
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg ">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">{{ session('success') }}</div>
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
    <div class="max-w-screen-xl mx-auto px-10 mt-10">
        <div class="flex justify-center items-center">
            <div class="w-full flex justify-center items-center flex-col bg-gray-50 shadow-lg max-w-sm rounded-md py-8">
                <div class="flex justify-between  flex-col">
                    <div class="title mb-16">
                        <h1 class="text-xl text-center font-semibold">Survey Perundungan</h1>
                    </div>
                    <div class="deskirbsi px-12">
                        <h1 class="text-center text-base text-green-400 mb-16">Survey Yang Menilai Seberapa Besar Siswa Menjadi Korban dan Pelaku Perundungan </h1>
                    </div>
                    <div class="flex justify-start items-start flex-col border-t-2 border-gray-200 px-4 py-4 gap-2">
                        <div class="flex justify-start items-start gap-2">
                            <div class="w-8 h-8">
                                <svg viewBox="0 0 1024 1024" class="icon" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M768 85.333333H554.666667c0 23.466667-19.2 42.666667-42.666667 42.666667s-42.666667-19.2-42.666667-42.666667H256C209.066667 85.333333 170.666667 123.733333 170.666667 170.666667v682.666666c0 46.933333 38.4 85.333333 85.333333 85.333334h512c46.933333 0 85.333333-38.4 85.333333-85.333334V170.666667c0-46.933333-38.4-85.333333-85.333333-85.333334z"
                                            fill="#455A64"></path>
                                        <path
                                            d="M768 874.666667H256c-12.8 0-21.333333-8.533333-21.333333-21.333334V170.666667c0-12.8 8.533333-21.333333 21.333333-21.333334h512c12.8 0 21.333333 8.533333 21.333333 21.333334v682.666666c0 12.8-8.533333 21.333333-21.333333 21.333334z"
                                            fill="#FFFFFF"></path>
                                        <path
                                            d="M554.666667 85.333333c0 23.466667-19.2 42.666667-42.666667 42.666667s-42.666667-19.2-42.666667-42.666667h-149.333333v85.333334c0 23.466667 19.2 42.666667 42.666667 42.666666h298.666666c23.466667 0 42.666667-19.2 42.666667-42.666666V85.333333h-149.333333z"
                                            fill="#90A4AE"></path>
                                        <path
                                            d="M512 0c-46.933333 0-85.333333 38.4-85.333333 85.333333s38.4 85.333333 85.333333 85.333334 85.333333-38.4 85.333333-85.333334-38.4-85.333333-85.333333-85.333333z m0 128c-23.466667 0-42.666667-19.2-42.666667-42.666667s19.2-42.666667 42.666667-42.666666 42.666667 19.2 42.666667 42.666666-19.2 42.666667-42.666667 42.666667z"
                                            fill="#90A4AE"></path>
                                        <path
                                            d="M448 426.666667h256v42.666666H448zM320 405.333333h85.333333v85.333334h-85.333333z"
                                            fill="#CFD8DC"></path>
                                        <path
                                            d="M448 618.666667h256v42.666666H448zM320 597.333333h85.333333v85.333334h-85.333333z"
                                            fill="#03A9F4"></path>
                                    </g>
                                </svg>
                            </div>
                            <p class="text-base">{{ $responden }} Respon</p>
                        </div>
                        <div class="flex justify-start items-start gap-2">
                            <div class="w-7 h-7 ml-1">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13"
                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                        <circle cx="12" cy="16" r="1" fill="#1C274C"></circle>
                                        <path
                                            d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8"
                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                    </g>
                                </svg>
                            </div>
                            <p class="">{{ $totalPertanyaan }} Pertanyaan</p>
                        </div>
                        <a href="{{ route('murid.viewSurvey') }}"
                            class="w-full py-4 bg-green-400 flex justify-center items-center rounded-xl mt-4 hover:bg-green-500 duration-300 ease-in-out">
                            <h1 class="text-white">Join Now</h1>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection