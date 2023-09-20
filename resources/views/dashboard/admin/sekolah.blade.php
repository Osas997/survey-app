@extends('dashboard.layouts.main')
@section('content')

<div class="h-screen bg-white mx-8 my-8 border border-black rounded-[40px] p-10">


<div class="min-h-screen max-h-full bg-white mx-8 my-8 border border-black rounded-[40px] p-10 ">
    <h1 class="text-2xl sm:text-3xl  ">Sekolah</h1>
    <div class="flex justify-start items-center gap-4 mt-10  ">
        <input type="text" placeholder="Search Sekolah" class="input input-bordered border-black input-md w-full max-w-xs bg-transparent h-12 "  />
        <div class="w-14 h-12 flex justify-center items-center border-2 rounded-lg border-black cursor-pointer md:w-12">
            {{-- <svg viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>plus-square</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-100.000000, -1035.000000)" fill="#000000"> <path d="M130,1063 C130,1064.1 129.104,1065 128,1065 L104,1065 C102.896,1065 102,1064.1 102,1063 L102,1039 C102,1037.9 102.896,1037 104,1037 L128,1037 C129.104,1037 130,1037.9 130,1039 L130,1063 L130,1063 Z M128,1035 L104,1035 C101.791,1035 100,1036.79 100,1039 L100,1063 C100,1065.21 101.791,1067 104,1067 L128,1067 C130.209,1067 132,1065.21 132,1063 L132,1039 C132,1036.79 130.209,1035 128,1035 L128,1035 Z M122,1050 L117,1050 L117,1045 C117,1044.45 116.552,1044 116,1044 C115.448,1044 115,1044.45 115,1045 L115,1050 L110,1050 C109.448,1050 109,1050.45 109,1051 C109,1051.55 109.448,1052 110,1052 L115,1052 L115,1057 C115,1057.55 115.448,1058 116,1058 C116.552,1058 117,1057.55 117,1057 L117,1052 L122,1052 C122.552,1052 123,1051.55 123,1051 C123,1050.45 122.552,1050 122,1050 L122,1050 Z" id="plus-square" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg> --}}
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M12 6V18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </div>
    </div>
    <div class="mt-8 w-full  overflow-x-auto overflow-y-auto">
        <table class="border-collapse border-none w-max table-fixed text-left sm:w-full">
            <!-- head -->
            <thead>
                <tr class="bg-[#0090D4] text-white">
                    <th class="w-[2%]"></th>
                    <th class="mx-2 font-medium w-40 sm:w-1/4 py-4 text-sm">
                        <span class="sm:text-base md:text-lg">Sekolah</span>
                    </th>
                    <th class="font-medium w-20 sm:w-[20%] py-4 text-sm">
                        <span class="sm:text-base md:text-lg">NPSN</span>
                    </th>
                    <th class="font-medium w-[50%] sm:w-[30%] py-4 text-sm sm:text-base md:text-lg lg:text-xl">
                        <span class="sm:text-base md:text-lg">Alamat</span>
                    </th>
                    <th class="font-medium w-22 sm:w-1/8 py-4 text-sm sm:text-base md:text-lg lg:text-xl">
                        <span class="sm:text-base md:text-lg">Status</span>
                    </th>
                    <th class="hidden lg:block w-[1%]"></th>
                </tr>
            </thead>
            
            <tbody>
                <tr class="border-b-2">
                    <th></th>
                    <th class="font-bold text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">SDN 2 Banyuwangi</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">124151323</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">JL Banyuwangi no 2</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Negeri</span>
                    </th>
                    <th class="hidden lg:block  py-6">
                            <svg class="cursor-pointer w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#7a7a7a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </th>
                </tr>
                <tr class="border-b-2">
                    <th></th>
                    <th class="font-bold text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">SDN 2 Banyuwangi</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">124151323</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">JL Banyuwangi no 2</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Negeri</span>
                    </th>
                    <th class="hidden lg:block  py-6">
                            <svg class="cursor-pointer w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#7a7a7a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </th>
                </tr>
                <tr class="border-b-2">
                    <th></th>
                    <th class="font-bold text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">SDN 2 Banyuwangi</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">124151323</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">JL Banyuwangi no 2</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Negeri</span>
                    </th>
                    <th class="hidden lg:block  py-6">
                            <svg class="cursor-pointer w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#7a7a7a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </th>
                </tr>
                <tr class="border-b-2">
                    <th></th>
                    <th class="font-bold text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">SDN 2 Banyuwangi</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">124151323</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">JL Banyuwangi no 2</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Negeri</span>
                    </th>
                    <th class="hidden lg:block  py-6">
                            <svg class="cursor-pointer w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#7a7a7a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </th>
                </tr>
                <tr class="border-b-2">
                    <th></th>
                    <th class="font-bold text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">SDN 2 Banyuwangi</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">124151323</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">JL Banyuwangi no 2</span>
                    </th>
                    <th class="font-normal text-xs py-6 ">
                        <span class="sm:text-sm md:text-md ">Negeri</span>
                    </th>
                    <th class="hidden lg:block  py-6">
                            <svg class="cursor-pointer w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#7a7a7a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </th>
                </tr>
                
            </tbody>
        </table>
    </div>
    

</div>
@endsection