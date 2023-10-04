@extends('layout.pages')
@section('title','Survey App')
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
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
            <div
                class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-3xl shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
                <h1 class="mb-3 font-semibold text-md text-black group-hover:text-white duration-300 ease-in-out">
                    Survey Perundungan</h1>
                <p class="mb-2 font-normal text-sm text-gray-500 group-hover:text-gray-100 duration-300 ease-in-out">
                    Survey Feedback</p>
                <p class="mb-2 font-normal text-base text-black group-hover:text-white duration-300 ease-in-out">
                    130 Respon</p>
                <a href="{{ route('murid.viewSurvey') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg opacity-0 group-hover:bg-green-400 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    Gabung Sekarang
                </a>
            </div>
        </div>
    </div>
</div>
@endsection