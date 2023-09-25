@extends('layout.pages')
@section('title','Survey App')
@section('content')
<div class="w-screen h-screen overflow-x-hidden scroll-smooth">
    <div class=" ">
        {{-- nav --}}
        <nav class="bg-[#0090D4] w-full z-20 top-0 left-0  ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

                <a href="" class="flex items-center gap-2 justify-center">
                    <img src="{{asset('assets/img/white-logo.png')}}" alt="" srcset="" class="w-8 h-auto">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Survey App</span>
                </a>
                <div class="flex md:order-2">

                    <a href="{{ route('login') }}"
                        class="text-white hidden md:inline-flex duration-300 ease-in-out bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0">Login</a>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-sky-700 duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-200  "
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0  ">
                        <li>
                            <a href="#home"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:font-semibold md:p-0 "
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#survey"
                                class="block py-2 pl-3 pr-4 text-white rounded md:font-normal hover:bg-sky-600 md:hover:bg-transparent md:hover:text-blue-800 duration-300 ease-in-out md:p-0">Survey</a>
                        </li>
                        <li>
                            <a href="#about"
                                class="block py-2 pl-3 pr-4 text-white rounded md:font-normal hover:bg-sky-600 md:hover:bg-transparent md:hover:text-blue-800 duration-300 ease-in-out md:p-0">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- Hero --}}
        <section class=" px-4 py-10 bg-[#0090D4]  w-full " id="home">
            <div class="max-w-screen-xl  mx-auto p-4">
                <div class="flex justify-center items-start ">
                    <div class="flex-1">
                        <h1 class="text-3xl text-white font-semibold 
                        md:text-xl
                        lg:text-3xl
                        xl:text-[2.75rem] xl:leading-[3rem]">Tingkatkan Lingkungan Aman dan Bebas Perundungan Bersama
                            Kami!</h1>
                        <div class="w-3/4">
                            <p class="text-base text-white font-normal mt-4 
                            md:text-sm
                            lg:text-base
                            xl:text-lg">"Mari bersama-sama menciptakan lingkungan yang aman dan bebas dari
                                perundungan."</p>
                        </div>
                        <a href="">
                            <div class=" w-1/2 flex justify-center items-center gap-2 text-white cursor-pointer duration-300 ease-in-out bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2 text-center sm:text-lg sm:px-4 sm:py-1 mt-4
                            sm:w-4/12 
                            md:w-5/12
                            lg:w-4/12
                            xl:w-4/12">
                                <span class="whitespace-nowrap
                                md:text-sm">Ayo Survey</span>
                                <div class="w-8 h-8">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        stroke="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#ffffff" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <div class="flex justify-start items-baseline gap-8 mt-5 ">
                            <div class="flex justify-start items-start flex-col">
                                <span class="text-white text-base 
                                md:text-sm
                                lg:text-base
                                xl:text-lg">Responded</span>
                                <h2 class="text-white font-semibold text-5xl
                                md:text-3xl
                                lg:text-5xl
                                xl:text-6xl">3,541</h2>
                            </div>
                            <div class="flex justify-start items-start flex-col">
                                <span class="text-white text-base
                                md:text-sm
                                lg:text-base
                                xl:text-lg">Survey</span>
                                <h2 class="text-white font-semibold text-5xl
                                md:text-3xl
                                lg:text-5xl
                                xl:text-6xl">20+</h2>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:flex justify-center items-center flex-1 ">
                        <img src="{{asset('assets/img/hero_image.png')}}" alt="" srcset=""
                            class="lg:w-[400px] xl:w-[500px]">
                    </div>
                </div>
            </div>
        </section>
        {{-- Card --}}
        <section class="mt-10 px-4 pb-10 bg-white" id="survey">
            <div class="max-w-screen-xl  mx-auto p-4">
                <h1 class="text-center font-semibold text-3xl mb-6">Survey</h1>
                <div class="grid grid:grid-col-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div
                        class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-lg shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
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
                        class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-lg shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
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
                        class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-lg shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
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
                        class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-lg shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
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
                        class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-lg shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
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
                        class="max-w-sm p-6 bg-[#C7FFDE] w-full h-52 rounded-lg shadow flex justify-center items-center flex-col hover:bg-[#0090D4] duration-300 ease-in-out relative group">
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
        </section>
        {{-- card join --}}
        <section class="px-4" id="about">
            <div class="max-w-screen-xl  mx-auto p-4 flex justify-center items-center">
                <div class="w-full p-4 text-center bg-[#0062CE] rounded-[32px] border border-gray-200 shadow sm:p-10
                lg:w-5/6
                lg:py-16">
                    <h5 class="mb-4 text-3xl font-bold text-white 
                    md:text-xl">Join Our Survey</h5>
                    <p class="mb-6 text-base text-gray-100 sm:text-lg
                    md:text-base ">"Tolak Perundungan: Bersama-sama Kita Hentikan Tindakan Merugikan Ini!"</p>
                    <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                        <a href="#" class="w-1/2  bg-white hover:bg-slate-100  focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 
                        md:w-5/12">
                            <p class="text-base text-[#0062CE] font-semibold">Login Now</p>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        {{-- Footer --}}
        <footer class="bg-slate-900 px-4 py-6 mt-10">
            <div class="max-w-screen-xl  mx-auto p-4">
                <h1 class="text-white text-2xl mb-8 
                md:text-xl
                lg:text-2xl">Survey App</h1>
                <h1 class="text-white text-xl text-center mb-3 
                md:text-lg
                lg:text-xl">Bebaskan Perundungan Bersama Kami</h1>
                <p class="text-slate-100 text-base text-center mb-10
                lg:text-lg">"Mari bersama-sama menciptakan lingkungan yang aman dan bebas dari perundungan."</p>
                <p class=" text-slate-300 text-xs text-center
                lg:text-sm">© 2023 SurveyApp. All Rights Reserved. </p>
            </div>
        </footer>
    </div>

    @endsection




    {{-- <input type="hidden" value="1" name="survey[0][pertanyaan]">
    <input type="text" name="survey[0][jawaban]">

    <input type="hidden" value="1" name="survey[1][pertanyaan]"> --}}
    {{-- <input type="text" name="survey[1][jawaban]"> --}}
    {{-- <input type="file" name="exel">

    <button type="submit">kirim</button>
    </form> --}}