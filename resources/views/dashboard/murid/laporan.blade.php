@extends('layout.pages')
@section('title', 'Survey App')
@section('content')
    @include('dashboard.murid.navbar')

    <div class="container mx-auto px-4 py-8">
        <div>
            {{-- nama, Skor, klasifikasi, interpretasi --}}
            @if ($dataLaporan)
                <div class="">
                    <h1 class="text-1xl sm:text-2xl mb-2">Nama : Diki Brong</h1>
                    <h1 class="text-base sm:text-1xl mb-1">Skor Anda Pelaku Bullying
                        <span>{{ $dataLaporan->skor_total_pelaku }}</span>
                    </h1>
                    <h1 class="text-base sm:text-1xl mb-1">Skor Anda Korban Bullying
                        <span>{{ $dataLaporan->skor_total_korban }}</span>
                    </h1>
                    <h1 class="text-base sm:text-1xl mb-1">Klasifikasi Pelaku Bullying : <span
                            class="text-green-400">Rendah</span></h1>
                    {{-- <h1>Klasifikasi Pelaku Bullying : <span class="text-amber-400">Sedang</span></h1>
         <h1>Klasifikasi Pelaku Bullying : <span class="text-orange-400">Tinggi</span></h1>
         <h1>Klasifikasi Pelaku Bullying : <span class="text-red-400">Sangat Tinggi</span></h1> --}}
                    <h1 class="text-base sm:text-1xl mb-1">Klasifikasi Korban Bullying : <span
                            class="text-green-400">Rendah</span></h1>
                    {{-- <h1>Klasifikasi Korban Bullying : <span class="text-amber-400">Sedang</span></h1>
         <h1>Klasifikasi Korban Bullying : <span class="text-orange-400">Tinggi</span></h1>
         <h1>Klasifikasi Korban Bullying : <span class="text-red-400">Sangat Tinggi</span></h1> --}}
                    <h1 class="text-base sm:text-1xl mb-1">Interpretasi : Memiliki kecenderungan menjadi pelaku bullying
                        <span class="text-green-400">Rendah</span>
                    </h1>
                    {{-- <h1>Interpretasi : Memiliki kecenderungan menjadi pelaku bullying <span class="text-amber-400">Sedang</span></h1>
         <h1>Interpretasi : Memiliki kecenderungan menjadi pelaku bullying <span class="text-orange-400">Tinggi</span></h1>
         <h1>Interpretasi : Memiliki kecenderungan menjadi pelaku bullying <span class="text-red-400">Sangat Tinggi</span></h1> --}}
                    <h1 class="text-base sm:text-1xl mb-1">Interpretasi : Memiliki kecenderungan menjadi Korban bullying
                        <span class="text-green-400">Rendah</span>
                    </h1>
                    {{-- <h1>Interpretasi : Memiliki kecenderungan menjadi Korban bullying <span class="text-amber-400">Sedang</span></h1>
         <h1>Interpretasi : Memiliki kecenderungan menjadi Korban bullying <span class="text-orange-400">Tinggi</span></h1>
         <h1>Interpretasi : Memiliki kecenderungan menjadi Korban bullying <span class="text-red-400">Sangat Tinggi</span></h1> --}}
                </div>
            @else
                belum mengisi survey
            @endif
            <a href="{{ route('murid.print') }}" class="bg-[#0062CE] btn rounded-lg text-white flex justify-center items-center  w-fit px-8 h-10 hover:bg-blue-600 duration-300 ease-in-out mt-4">
               <span>Print</span>
            </a>
        </div>
        <div class="mt-4 w-full  overflow-x-auto overflow-y-auto rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-white uppercase  bg-blue-500  ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pertanyaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jawaban
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b  hover:bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <span class="sm:text-sm md:text-md ">1</span>
                        </th>
                        <td class="px-6 py-4">
                            <span class="sm:text-sm md:text-md text-center">Saya dipanggil dengan nama panggilan yang jelek,
                                diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="sm:text-sm md:text-md ">Selalu</span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b  hover:bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <span class="sm:text-sm md:text-md ">2</span>
                        </th>
                        <td class="px-6 py-4">
                            <span class="sm:text-sm md:text-md text-center">Saya dipanggil dengan nama panggilan yang jelek,
                                diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="sm:text-sm md:text-md ">Selalu</span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b  hover:bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <span class="sm:text-sm md:text-md ">3</span>
                        </th>
                        <td class="px-6 py-4">
                            <span class="sm:text-sm md:text-md text-center">Saya dipanggil dengan nama panggilan yang jelek,
                                diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="sm:text-sm md:text-md ">Selalu</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection
