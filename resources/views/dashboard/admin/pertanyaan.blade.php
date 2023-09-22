@extends('dashboard.layouts.main')
@section('content')
<div class="flex justify-start items-center gap-5">
    <div class="w-10 h-10">
        <a href="{{ route('admin.survey') }}">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z"
                        fill="#0F0F0F"></path>
                </g>
            </svg>
        </a>
    </div>
    <p class="font-bold text-lg my-0">
        <span class="md:text-xl uppercase">{{ $survey->nama_survey }}</span>
    </p>
</div>
<div class="flex justify-center items-start gap-2 mt-10 flex-col">


    <div class="md:flex md:justify-center md:items-center  md:flex-row md:gap-4 min-w-full sm:min-w-fit ">
        <a href="{{ route('admin.tambahPertanyaan',['survey'=> $survey->id]) }}">
            <div
                class="bg-lime-500 rounded-lg flex justify-center items-center px-8 w-full h-12 mt-4 hover:bg-lime-600 duration-300 ease-in-out ">
                <span class="text-white whitespace-nowrap  text-md">Tambah Pertanyaan</span>
                <div class="w-8 h-8">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M6 12H18M12 6V18" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </a>
        <a href="{{ route('admin.tambahPertanyaan',['survey'=> $survey->id]) }}">
            <div
                class="bg-[#0062CE] rounded-lg flex justify-center items-center px-8 w-full h-12 mt-4 hover:bg-blue-600 duration-300 ease-in-out ">
                <span class="text-white whitespace-nowrap  text-md">Edit Survey</span>
                <div class="w-8 h-8">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M6 12H18M12 6V18" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </a>
        <form action="/admin/survey/{{ $survey->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('Hapus Survey ??')">
                <div
                    class="bg-red-500 rounded-lg flex justify-center items-center gap-3 w-full px-8 h-12 mt-4 hover:bg-red-600 duration-300 ease-in-out">
                    <span class="text-white whitespace-nowrap  text-md">Delete Survey</span>
                    <div class="w-8 h-8">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M18 6V16.2C18 17.8802 18 18.7202 17.673 19.362C17.3854 19.9265 16.9265 20.3854 16.362 20.673C15.7202 21 14.8802 21 13.2 21H10.8C9.11984 21 8.27976 21 7.63803 20.673C7.07354 20.3854 6.6146 19.9265 6.32698 19.362C6 18.7202 6 17.8802 6 16.2V6M14 10V17M10 10V17"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </div>
                </div>
            </button>
        </form>

    </div>

</div>


<div class="mt-8 w-full  overflow-x-hidden overflow-y-auto">
    @foreach ($survey->pertanyaan as $pertanyaan)
    <div class="">
        <div class="flex justify-between items-start gap-16">
            <div class="flex justify-center items-start gap-4">
                <span class="text-xl">{{ $loop->iteration }}. </span>
                <p class="text-black  text-sm md:text-base lg:text-lg">{{$pertanyaan->pertanyaan}} . <span class="text-slate-400 font-normal text-sm">{{
                    $pertanyaan->created_at->diffForHumans() }}</span></p>
            </div>
            <div class="flex justify-center items-center flex-col gap-2 mt-5 md:mt-0">
                <a href="">
                    <div
                        class="bg-[#0062CE] rounded-lg flex justify-center items-center  w-10 h-10 hover:bg-blue-600 duration-300 ease-in-out ">
                        <span class="text-white whitespace-nowrap sr-only text-xs">Edit Pertanyaan</span>
                        <div class="w-6 h-6">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M11 4H7.2C6.0799 4 5.51984 4 5.09202 4.21799C4.71569 4.40974 4.40973 4.7157 4.21799 5.09202C4 5.51985 4 6.0799 4 7.2V16.8C4 17.9201 4 18.4802 4.21799 18.908C4.40973 19.2843 4.71569 19.5903 5.09202 19.782C5.51984 20 6.0799 20 7.2 20H16.8C17.9201 20 18.4802 20 18.908 19.782C19.2843 19.5903 19.5903 19.2843 19.782 18.908C20 18.4802 20 17.9201 20 16.8V12.5M15.5 5.5L18.3284 8.32843M10.7627 10.2373L17.411 3.58902C18.192 2.80797 19.4584 2.80797 20.2394 3.58902C21.0205 4.37007 21.0205 5.6364 20.2394 6.41745L13.3774 13.2794C12.6158 14.0411 12.235 14.4219 11.8012 14.7247C11.4162 14.9936 11.0009 15.2162 10.564 15.3882C10.0717 15.582 9.54378 15.6885 8.48793 15.9016L8 16L8.04745 15.6678C8.21536 14.4925 8.29932 13.9048 8.49029 13.3561C8.65975 12.8692 8.89125 12.4063 9.17906 11.9786C9.50341 11.4966 9.92319 11.0768 10.7627 10.2373Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </a>
                <form action="{{ route('admin.hapusPertanyaan',['pertanyaan'=> $pertanyaan->id]) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" onclick="return confirm('Hapus Pertanyaan ??')">
                        <div
                            class="bg-red-500 rounded-lg flex justify-center items-center  w-10 h-10 mb-4 hover:bg-red-600 duration-300 ease-in-out">
                            <span class="text-white whitespace-nowrap sr-only text-xs">Delete Pertanyaan</span>
                            <div class="w-6 h-6">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    stroke="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M18 6V16.2C18 17.8802 18 18.7202 17.673 19.362C17.3854 19.9265 16.9265 20.3854 16.362 20.673C15.7202 21 14.8802 21 13.2 21H10.8C9.11984 21 8.27976 21 7.63803 20.673C7.07354 20.3854 6.6146 19.9265 6.32698 19.362C6 18.7202 6 17.8802 6 16.2V6M14 10V17M10 10V17"
                                            stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </button>
                </form>
            </div>
        </div>
        <div class="border-b border-gray-300 mb-4"></div>
    </div>
    @endforeach
</div>


</div>



@endsection