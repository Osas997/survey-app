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
        <div class="flex gap-8 flex-wrap justify-center items-center">
            @foreach ($survey as $survei)
            <div class="w-full flex justify-center items-center flex-col bg-gray-50 shadow-lg max-w-xs rounded-md py-4">
                <div class="flex justify-between flex-col">
                    <div class="title mb-4">
                        <h1 class="text-lg text-center font-semibold">{{ $survei->nama_survey }}</h1>
                    </div>
                    <div class="deskirbsi px-4">
                        <h1 class="text-center text-sm text-green-400 mb-4">{{ $survei->deskripsi }}</h1>
                    </div>
                    <div class="flex justify-start items-start flex-col border-t-2 border-gray-200 px-2 py-2 gap-1">
                        <div class="flex justify-start items-start gap-1">
                            <div class="w-6 h-6">
                                <svg viewBox="0 0 1024 1024" class="icon" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <!-- ...SVG Path... -->
                                </svg>
                            </div>
                            <p class="text-xs">{{ $survei->responded_count }} Respon</p>
                        </div>
                        <div class="flex justify-start items-start gap-1">
                            <div class="w-5 h-5 ml-1">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <!-- ...SVG Path... -->
                                </svg>
                            </div>
                            <p class="text-xs">{{ $survei->pertanyaan_count }} Pertanyaan</p>
                        </div>
                        <a href="{{ route('murid.viewSurvey', $survei->id) }}"
                            class="w-full py-2 bg-green-400 flex justify-center items-center rounded-xl mt-2 hover:bg-green-500 duration-300 ease-in-out">
                            <h1 class="text-white text-sm">Join Now</h1>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
</div>
@endsection