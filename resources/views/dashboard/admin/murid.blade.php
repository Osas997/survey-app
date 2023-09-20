@extends('dashboard.layouts.main')
@section('content')
    <div class="flex justify-start items-center gap-5">
        <div class="w-10 h-10">
            <a href="">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z" fill="#0F0F0F"></path> </g></svg>
            </a>
        </div>
        <p class="font-bold text-lg my-0">
            <span class=" md:text-xl">SDN 2 Banyuwangi</span>
        </p>
    </div>
    <div class="flex justify-start items-center gap-4 mt-10  ">
        <form action="" method="get">   
            <div class="relative ">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="search" class="block w-[360px] md:w-[458px] p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Survey" required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
            
        </form>
        <div class="w-14 h-12 flex justify-center items-center border-2 rounded-lg border-black cursor-pointer md:w-12">
            {{-- <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>plus-square</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-100.000000, -1035.000000)" fill="#000000"> <path d="M130,1063 C130,1064.1 129.104,1065 128,1065 L104,1065 C102.896,1065 102,1064.1 102,1063 L102,1039 C102,1037.9 102.896,1037 104,1037 L128,1037 C129.104,1037 130,1037.9 130,1039 L130,1063 L130,1063 Z M128,1035 L104,1035 C101.791,1035 100,1036.79 100,1039 L100,1063 C100,1065.21 101.791,1067 104,1067 L128,1067 C130.209,1067 132,1065.21 132,1063 L132,1039 C132,1036.79 130.209,1035 128,1035 L128,1035 Z M122,1050 L117,1050 L117,1045 C117,1044.45 116.552,1044 116,1044 C115.448,1044 115,1044.45 115,1045 L115,1050 L110,1050 C109.448,1050 109,1050.45 109,1051 C109,1051.55 109.448,1052 110,1052 L115,1052 L115,1057 C115,1057.55 115.448,1058 116,1058 C116.552,1058 117,1057.55 117,1057 L117,1052 L122,1052 C122.552,1052 123,1051.55 123,1051 C123,1050.45 122.552,1050 122,1050 L122,1050 Z" id="plus-square" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg> --}}
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M12 6V18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </div>
    </div>
    <div class="mt-8 w-full  overflow-x-auto overflow-y-auto">
        <table class="border-collapse border-none w-max table-fixed text-left sm:w-full">
            <!-- head -->
            <thead>
                <tr class="bg-[#0090D4] text-white w-full">
                    <th class="w-[2%]"></th>
                    <th class="mx-2 font-medium w-20 sm:w-[18%] py-4  text-sm">
                        <span class="sm:text-base md:text-lg ">Nama</span>
                    </th>
                    <th class="font-medium w-24 sm:w-[22%] py-4 text-sm  ">
                        <span class="sm:text-base md:text-lg ">NISN</span>
                    </th>
                    <th class="font-medium w-24 sm:w-[22%] py-4 text-sm  sm:text-base md:text-lg lg:text-xl">
                        <span class="sm:text-base md:text-lg ">Alamat</span>
                    </th>
                    <th class="font-medium w-40 sm:w-[20%] py-4 text-sm  sm:text-base md:text-lg lg:text-xl">
                        <span class="sm:text-base md:text-lg ">Jenis Kelamin</span>
                    </th>
                    <th class="font-medium w-40 sm:w-[20%] py-4 text-sm sm:text-base md:text-lg lg:text-xl">
                        <span class="sm:text-base md:text-lg ">Status</span>
                    </th>
             
                </tr>
            </thead>
            <tbody>
                <tr class="border-b-2">
                    <th></th>
                    <th class="font-bold text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Jhon Doe</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">12315123</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Jl Banyuwangi No 2</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Laki Laki</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">diPerundung</span>
                    </th>
            
                </tr>
                <tr class="border-b-2">
                    <th></th>
                    <th class="font-bold text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Jhon Doe</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">12315123</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Jl Banyuwangi No 2</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Laki Laki</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">diPerundung</span>
                    </th>
                
                </tr>
                <tr class="border-b-2">
                    <th></th>
                    <th class="font-bold text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Jhon Doe</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">12315123</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Jl Banyuwangi No 2</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Laki Laki</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">diPerundung</span>
                    </th>
                  
                </tr>
                <tr class="border-b-2">
                    <th></th>
                    <th class="font-bold text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Jhon Doe</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">12315123</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Jl Banyuwangi No 2</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Laki Laki</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">diPerundung</span>
                    </th>
                  
                </tr>
               
            </tbody>
        </table>
    </div>
    
@endsection