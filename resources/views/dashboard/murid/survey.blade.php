@extends('layout.pages')
@section('title','Survey App')
@section('content')
<div class="w-screen h-screen overflow-x-hidden scroll-smooth ">

    <nav class="bg-white border-gray-200 border-b-2  ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Survey App</span>
            </a>
            <div class="flex items-center md:order-2">
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <div class="max-w-screen-2xl mx-auto px-10 mt-10">
        <div class="max-w-xl mx-auto bg-white p-8 rounded shadow-md">
            <div class="flex justify-start items-center gap-4">
                <div class="w-6 h-6 md:w-8 md:h-8">
                    <a href="">
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
                <p class="font-bold text-base my-0">
                    <span class=" md:text-lg">Survey Perundungan</span>
                </p>
            </div>
            {{-- <div id class="w-full bg-gray-200 rounded-full h-2.5 mt-8 mb-4">
                <div id="progress" class="bg-blue-600 h-2.5 duration-700 rounded-full"></div>
            </div> --}}
            <form action="/asumalaka/{{ $idSurvey }}" method="POST">
                @csrf
                @foreach ($dataPertanyaan as $data)
                <span class="text-md font-bold my-4 block">
                    {{ $data->pertanyaan }}
                    <input type="hidden" value="{{ $data->id }}" name="survey[{{ $data->id }}][id_pertanyaan]">
                </span>
                <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">

                    <label class="cursor-pointer">
                        <input type="radio" id="jawaban" value="1" class="peer sr-only" name="survey[{{ $data->id }}][skor]" />
                        <div class="w-full max-w-xl rounded-md bg-gray-50 p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow shadow-md  
                        peer-checked:bg-blue-500 peer-checked:text-gray-50 peer-checked:ring-blue-500 peer-checked:ring-offset-2  peer-checked:shadow-md peer-checked:shadow-blue-700 ">
                          <div class="flex flex-col gap-1">
                            <div class="flex items-center justify-between">
                              <p class="text-sm font-semibold uppercase  peer-checked:text-sky-700">tidak pernah</p>
                            </div>
                          </div>
                        </div>
                    </label>

                    <label class="cursor-pointer">
                        <input type="radio" id="jawaban" value="1" class="peer sr-only" name="survey[{{ $data->id }}][skor]" />
                        <div class="w-full max-w-xl rounded-md bg-gray-50 p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow shadow-md  
                        peer-checked:bg-blue-500 peer-checked:text-gray-50 peer-checked:ring-blue-500 peer-checked:ring-offset-2  peer-checked:shadow-md peer-checked:shadow-blue-700 ">
                          <div class="flex flex-col gap-1">
                            <div class="flex items-center justify-between">
                              <p class="text-sm font-semibold uppercase  peer-checked:text-sky-700">jarang</p>
                            </div>
                          </div>
                        </div>
                    </label>

                    
                    <label class="cursor-pointer">
                        <input type="radio" id="jawaban" value="1" class="peer sr-only" name="survey[{{ $data->id }}][skor]" />
                        <div class="w-full max-w-xl rounded-md bg-gray-50 p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow shadow-md  
                        peer-checked:bg-blue-500 peer-checked:text-gray-50 peer-checked:ring-blue-500 peer-checked:ring-offset-2  peer-checked:shadow-md peer-checked:shadow-blue-700 ">
                          <div class="flex flex-col gap-1">
                            <div class="flex items-center justify-between">
                              <p class="text-sm font-semibold uppercase  peer-checked:text-sky-700">Sering</p>
                            </div>
                          </div>
                        </div>
                    </label>

                    
                    <label class="cursor-pointer">
                        <input type="radio" id="jawaban" value="1" class="peer sr-only" name="survey[{{ $data->id }}][skor]" />
                        <div class="w-full max-w-xl rounded-md bg-gray-50 p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow shadow-md  
                        peer-checked:bg-blue-500 peer-checked:text-gray-50 peer-checked:ring-blue-500 peer-checked:ring-offset-2  peer-checked:shadow-md peer-checked:shadow-blue-700 ">
                          <div class="flex flex-col gap-1">
                            <div class="flex items-center justify-between">
                              <p class="text-sm font-semibold uppercase  peer-checked:text-sky-700">selalu</p>
                            </div>
                          </div>
                        </div>
                    </label>
                </div>
                @endforeach
                <div class="flex justify-center items-center mt-10">
                    <button id="next-btn" type="submit"
                        class="bg-blue-500 w-full  text-white px-10 py-3 rounded-lg disabled:hidden
                        hover:bg-blue-400 duration-300 ease-in-out">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection