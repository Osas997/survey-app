@extends('layout.pages')
@section('title', 'Survey App')
@section('content')
@include('dashboard.murid.navbar')
{{--
Berikut adalah copywriting yang telah saya ubah agar lebih enak dilihat:

Hasil Tes Bullying

Nama: Diki Brong

Klasifikasi:

Pelaku Bullying: Tinggi
Korban Bullying: Sedang
Interpretasi:

Pelaku Bullying: Diki memiliki kecenderungan menjadi pelaku bullying yang tinggi. Hal ini dapat disebabkan oleh beberapa
faktor, seperti lingkungan, pertemanan, atau pengalaman pribadi.
Korban Bullying: Diki memiliki kecenderungan menjadi korban bullying yang rendah. Hal ini dapat disebabkan oleh beberapa
faktor, seperti kepercayaan diri, kemampuan sosial, atau dukungan dari orang-orang terdekat. --}}

<div class="container mx-auto px-4 py-8">
    <div>
        {{-- nama, Skor, klasifikasi, interpretasi --}}
        @if ($dataLaporan)
        <div class="">
            <h1 class="text-1xl sm:text-2xl mb-4">Hasil Tes Survey</h1>
            <h1 class="text-lg sm:text-1xl mb-2">Nama : {{ auth('murid')->user()->nama_murid }}</h1>
            <h1 class="text-lg">Klasifikasi :</h1>
            <ul class="list-disc pl-10">
                <li class="text-base sm:text-1xl mb-1">Pelaku Bullying :
                    @if ($dataLaporan->skor_total_pelaku >= 46)
                    <span class="text-black">{{ $dataLaporan->skor_total_pelaku }}</span> <span
                        class="text-red-400">Sangat Tinggi</span>
                    @elseif ($dataLaporan->skor_total_pelaku >= 35 && $dataLaporan->skor_total_pelaku < 46) <span
                        class="text-black">{{ $dataLaporan->skor_total_pelaku }}</span> <span
                            class="text-orange-400">Tinggi</span>
                        @elseif ($dataLaporan->skor_total_pelaku >= 24 && $dataLaporan->skor_total_pelaku < 35) <span
                            class="text-black">{{ $dataLaporan->skor_total_pelaku }}</span> <span
                                class="text-amber-400">Sedang</span>
                            @else
                            <span class="text-black">{{ $dataLaporan->skor_total_pelaku }}</span> <span
                                class="text-green-400">Rendah</span>
                            @endif
                </li>
                <li class="text-base sm:text-1xl mb-1">Korban Bullying :
                    @if ($dataLaporan->skor_total_korban >= 46)
                    <span class="text-black">{{ $dataLaporan->skor_total_korban }}</span> <span
                        class="text-red-400">Sangat Tinggi</span>
                    @elseif ($dataLaporan->skor_total_korban >= 35 && $dataLaporan->skor_total_korban < 46) <span
                        class="text-black">{{ $dataLaporan->skor_total_korban }}</span> <span
                            class="text-orange-400">Tinggi</span>
                        @elseif ($dataLaporan->skor_total_korban >= 24 && $dataLaporan->skor_total_korban < 35) <span
                            class="text-black">{{ $dataLaporan->skor_total_korban }}</span> <span
                                class="text-amber-400">Sedang</span>
                            @else
                            <span class="text-black">{{ $dataLaporan->skor_total_korban }}</span> <span
                                class="text-green-400">Rendah</span>
                            @endif
                </li>
            </ul>


            <div class="text-base sm:text-1xl mb-1">Interpretasi :
                <ul class="list-disc pl-10">
                    <li class="text-base sm:text-1xl mb-1"> {{ auth('murid')->user()->nama_murid }} memiliki
                        kecenderungan menjadi pelaku bullying yang
                        @if ($dataLaporan->skor_total_pelaku >= 46)
                        <span class="text-red-400">Sangat Tinggi</span>. Hal ini dapat disebabkan oleh beberapa faktor,
                        seperti lingkungan, pertemanan, atau pengalaman pribadi.
                        @elseif ($dataLaporan->skor_total_pelaku >= 35 && $dataLaporan->skor_total_pelaku < 46) <span
                            class="text-red-400">Tinggi</span>. Hal ini dapat disebabkan oleh beberapa faktor, seperti
                            lingkungan, pertemanan, atau pengalaman pribadi.
                            @elseif ($dataLaporan->skor_total_pelaku >= 24 && $dataLaporan->skor_total_pelaku < 35)
                                <span class="text-red-400">Sedang</span>. Hal ini dapat disebabkan oleh beberapa faktor,
                                seperti lingkungan, pertemanan, atau pengalaman pribadi.
                                @else
                                <span class="text-red-400">Rendah</span>. Hal ini dapat disebabkan oleh beberapa faktor,
                                seperti lingkungan, pertemanan, atau pengalaman pribadi.
                                @endif
                    </li>
                    <li class="text-base sm:text-1xl mb-1"> {{ auth('murid')->user()->nama_murid }} memiliki
                        kecenderungan menjadi Korban bullying yang
                        @if ($dataLaporan->skor_total_korban >= 46)
                        <span class="text-red-400">Sangat Tinggi</span>. Hal ini dapat disebabkan oleh beberapa faktor,
                        seperti kepercayaan diri, kemampuan sosial, atau dukungan dari orang-orang terdekat.
                        @elseif ($dataLaporan->skor_total_korban >= 35 && $dataLaporan->skor_total_korban < 46) <span
                            class="text-red-400">Tinggi</span>. Hal ini dapat disebabkan oleh beberapa faktor, seperti
                            kepercayaan diri, kemampuan sosial, atau dukungan dari orang-orang terdekat.
                            @elseif ($dataLaporan->skor_total_korban >= 24 && $dataLaporan->skor_total_korban < 35)
                                <span class="text-red-400">Sedang</span>. Hal ini dapat disebabkan oleh beberapa faktor,
                                seperti kepercayaan diri, kemampuan sosial, atau dukungan dari orang-orang terdekat.
                                @else
                                <span class="text-red-400">Rendah</span>. Hal ini dapat disebabkan oleh beberapa faktor,
                                seperti kepercayaan diri, kemampuan sosial, atau dukungan dari orang-orang terdekat.
                                @endif
                    </li>
                </ul>
            </div>
        </div>
        <a href="{{ route('murid.print') }}"
            class="bg-[#0062CE] btn rounded-lg text-white flex justify-center items-center  w-fit px-8 h-10 hover:bg-blue-600 duration-300 ease-in-out mt-4">
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
                @foreach ($dataLaporan->jawaban as $jawaban)
                <tr class="bg-white border-b  hover:bg-gray-50 ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        <span class="sm:text-sm md:text-md ">{{ $loop->iteration }}</span>
                    </th>
                    <td class="px-6 py-4">
                        <span class="sm:text-sm md:text-md text-center">{{ $jawaban->pertanyaan->pertanyaan }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="sm:text-sm md:text-md ">
                            @if ($jawaban->skor == 4)
                            Selalu
                            @elseif($jawaban->skor == 3)
                            Sering
                            @elseif ($jawaban->skor == 2)
                            Jarang
                            @elseif ($jawaban->skor == 1)
                            Tidak Pernah
                            @endif
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    belum mengisi survey
    @endif
</div>

@endsection