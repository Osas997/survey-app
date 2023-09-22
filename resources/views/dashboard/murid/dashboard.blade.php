@extends('layout.pages')
@section('title','Survey App')
@section('content')
<div class="w-screen h-screen overflow-x-hidden scroll-smooth ">
    
    <nav class="bg-white border-gray-200 border-b-2 dark:bg-gray-900 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Survey App</span>
        </a>
        <div class="flex items-center md:order-2">
            <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
            <div class="px-4 py-3">
                <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </li>
            </ul>
            </div>
            <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        </div>
        </div>
    </nav>
    <div class="max-w-screen-xl mx-auto px-10 mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
            <div
                class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-3xl shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
                <h1
                    class="mb-3 font-semibold text-md text-black group-hover:text-white duration-300 ease-in-out">
                    Survey Perundungan</h1>
                <p
                    class="mb-2 font-normal text-sm text-gray-500 group-hover:text-gray-100 duration-300 ease-in-out">
                    Survey Feedback</p>
                <p
                    class="mb-2 font-normal text-base text-black group-hover:text-white duration-300 ease-in-out">
                    130 Respon</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg opacity-0 group-hover:bg-green-400 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    Gabung Sekarang
                </a>
            </div>
            <div
                class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-3xl shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
                <h1
                    class="mb-3 font-semibold text-md text-black group-hover:text-white duration-300 ease-in-out">
                    Survey Perundungan</h1>
                <p
                    class="mb-2 font-normal text-sm text-gray-500 group-hover:text-gray-100 duration-300 ease-in-out">
                    Survey Feedback</p>
                <p
                    class="mb-2 font-normal text-base text-black group-hover:text-white duration-300 ease-in-out">
                    130 Respon</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg opacity-0 group-hover:bg-green-400 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    Gabung Sekarang
                </a>
            </div>
            <div
                class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-3xl shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
                <h1
                    class="mb-3 font-semibold text-md text-black group-hover:text-white duration-300 ease-in-out">
                    Survey Perundungan</h1>
                <p
                    class="mb-2 font-normal text-sm text-gray-500 group-hover:text-gray-100 duration-300 ease-in-out">
                    Survey Feedback</p>
                <p
                    class="mb-2 font-normal text-base text-black group-hover:text-white duration-300 ease-in-out">
                    130 Respon</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg opacity-0 group-hover:bg-green-400 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    Gabung Sekarang
                </a>
            </div>
            <div
                class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-3xl shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
                <h1
                    class="mb-3 font-semibold text-md text-black group-hover:text-white duration-300 ease-in-out">
                    Survey Perundungan</h1>
                <p
                    class="mb-2 font-normal text-sm text-gray-500 group-hover:text-gray-100 duration-300 ease-in-out">
                    Survey Feedback</p>
                <p
                    class="mb-2 font-normal text-base text-black group-hover:text-white duration-300 ease-in-out">
                    130 Respon</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg opacity-0 group-hover:bg-green-400 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    Gabung Sekarang
                </a>
            </div>
            <div
                class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-3xl shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
                <h1
                    class="mb-3 font-semibold text-md text-black group-hover:text-white duration-300 ease-in-out">
                    Survey Perundungan</h1>
                <p
                    class="mb-2 font-normal text-sm text-gray-500 group-hover:text-gray-100 duration-300 ease-in-out">
                    Survey Feedback</p>
                <p
                    class="mb-2 font-normal text-base text-black group-hover:text-white duration-300 ease-in-out">
                    130 Respon</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg opacity-0 group-hover:bg-green-400 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    Gabung Sekarang
                </a>
            </div>
            <div
                class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-3xl shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
                <h1
                    class="mb-3 font-semibold text-md text-black group-hover:text-white duration-300 ease-in-out">
                    Survey Perundungan</h1>
                <p
                    class="mb-2 font-normal text-sm text-gray-500 group-hover:text-gray-100 duration-300 ease-in-out">
                    Survey Feedback</p>
                <p
                    class="mb-2 font-normal text-base text-black group-hover:text-white duration-300 ease-in-out">
                    130 Respon</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg opacity-0 group-hover:bg-green-400 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                    Gabung Sekarang
                </a>
            </div>
        </div>
    </div>

</div>
@endsection




{{-- <input type="hidden" value="1" name="survey[0][pertanyaan]">
<input type="text" name="survey[0][jawaban]">

<input type="hidden" value="1" name="survey[1][pertanyaan]"> --}}
{{-- <input type="text" name="survey[1][jawaban]"> --}}
{{-- <input type="file" name="exel">

<button type="submit">kirim</button>
</form> --}}