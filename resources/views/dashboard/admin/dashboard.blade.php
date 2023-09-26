@extends('dashboard.layouts.main')
@section('content')
    {{-- dashboard ada 3 chart
1. 2 pie chart 
2. setiap chart isi 4 golongan sangat tinggi, tinggi, sedang, rendah
3. ada 9 card
4. 1 cart untuk aktif murid
5. 4 cart untuk golognan sangat tigngi, tinggi sedang rendah pelaku
6. 4 cart untuk golognan sangat tigngi, tinggi sedang rendah korban
--}}
    <div class="relative bg-indigo-200 w-full py-8  p-4 sm:p-6 rounded-xl overflow-hidden mb-8 ">
        <!-- Background illustration -->
        <div class="absolute right-0 top-0 -mt-4 mr-16 pointer-events-none hidden xl:block" aria-hidden="true">
            <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <path id="welcome-a" d="M64 0l64 128-64-20-64 20z" />
                    <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z" />
                    <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z" />
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                        <stop stop-color="#A5B4FC" offset="0%" />
                        <stop stop-color="#818CF8" offset="100%" />
                    </linearGradient>
                    <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                        <stop stop-color="#4338CA" offset="0%" />
                        <stop stop-color="#6366F1" stop-opacity="0" offset="100%" />
                    </linearGradient>
                </defs>
                <g fill="none" fill-rule="evenodd">
                    <g transform="rotate(64 36.592 105.604)">
                        <mask id="welcome-d" fill="#fff">
                            <use xlink:href="#welcome-a" />
                        </mask>
                        <use fill="url(#welcome-b)" xlink:href="#welcome-a" />
                        <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z" />
                    </g>
                    <g transform="rotate(-51 91.324 -105.372)">
                        <mask id="welcome-f" fill="#fff">
                            <use xlink:href="#welcome-e" />
                        </mask>
                        <use fill="url(#welcome-b)" xlink:href="#welcome-e" />
                        <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z" />
                    </g>
                    <g transform="rotate(44 61.546 392.623)">
                        <mask id="welcome-h" fill="#fff">
                            <use xlink:href="#welcome-g" />
                        </mask>
                        <use fill="url(#welcome-b)" xlink:href="#welcome-g" />
                        <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z" />
                    </g>
                </g>
            </svg>
        </div>

        <!-- Content -->
        <div class="relative">
            <h1 class="text-2xl md:text-3xl text-slate-800 font-bold mb-1">Welcome Back
                {{ auth('admin')->user()->username }} 👋</h1>
            <p class="">Here is what's happening with your projects today:</p>
        </div>

    </div>

    <div class="grid grid-cols-1 justify-center items-center gap-4">
        <div class="bg-blue-400 w-full rounded-xl px-12 py-12 shadow-md">
            <p class="text-white text-lg">Jumlah Aktif Murid</p>
            <h1 class="text-white font-bold text-4xl lg:text-6xl">{{ $jumlahMurid }}</h1>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            {{-- card --}}
            {{-- korban --}}
            <div class="grid grid-cols-1 gap-4">
                <h1 class="text-gray-900 font-bold text-xl mt-4">Korban Perundungan</h1>
                <div class="bg-red-400 w-full rounded-xl px-4 py-6 shadow-md">
                    <p class="text-white">Jumlah Korban Sangat Tinggi</p>
                    <h1 class="text-white font-bold text-4xl lg:text-5xl">12</h1>
                </div>
                <div class="bg-orange-400 w-full rounded-xl px-4 py-6 shadow-md">
                    <p class="text-white">Jumlah Korban Tinggi</p>
                    <h1 class="text-white font-bold text-4xl lg:text-5xl">14</h1>
                </div>
                <div class="bg-yellow-400 w-full rounded-xl px-4 py-6 shadow-md">
                    <p class="text-white">Jumlah Korban Sedang</p>
                    <h1 class="text-white font-bold text-4xl lg:text-5xl">32</h1>
                </div>
                <div class="bg-green-400 w-full rounded-xl px-4 py-6 shadow-md">
                    <p class="text-white">Jumlah Korban Rendah</p>
                    <h1 class="text-white font-bold text-4xl lg:text-5xl">14</h1>
                </div>
            </div>
            {{-- Pelaku --}}
            <div class="grid grid-cols-1 gap-4">
                <h1 class="text-gray-900 font-bold text-xl mt-4">Pelaku Perundungan</h1>
                <div class="bg-red-400 w-full rounded-xl px-4 py-6 shadow-md">
                    <p class="text-white">Jumlah Pelaku Sangat Tinggi</p>
                    <h1 class="text-white font-bold text-4xl lg:text-5xl">12</h1>
                </div>
                <div class="bg-orange-400 w-full rounded-xl px-4 py-6 shadow-md">
                    <p class="text-white">Jumlah Pelaku Tinggi</p>
                    <h1 class="text-white font-bold text-4xl lg:text-5xl">14</h1>
                </div>
                <div class="bg-yellow-400 w-full rounded-xl px-4 py-6 shadow-md">
                    <p class="text-white">Jumlah Pelaku Sedang</p>
                    <h1 class="text-white font-bold text-4xl lg:text-5xl">32</h1>
                </div>
                <div class="bg-green-400 w-full rounded-xl px-4 py-6 shadow-md">
                    <p class="text-white">Jumlah Pelaku Rendah</p>
                    <h1 class="text-white font-bold text-4xl lg:text-5xl">14</h1>
                </div>
            </div>

            {{-- pie chart --}}
            <div class=" max-w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 shadow-lg">
                <div class="flex justify-between items-start w-full">
                    <div class="flex-col items-center">
                        <div class="flex items-center mb-1">
                            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white mr-1">Korban</h5>
                            <div data-popover id="chart-info" role="tooltip"
                                class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                <div data-popper-arrow></div>
                            </div>
                        </div>
                        <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown"
                            data-dropdown-ignore-click-outside-class="datepicker" type="button"
                            class="inline-flex items-center text-blue-700 dark:text-blue-600 font-medium hover:underline">Sekolah<svg
                                class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dateRangeDropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40  dark:bg-gray-700 dark:divide-gray-600">
                            <span class="px-4">Daftar Sekolah</span>
                            <div class="p-3" aria-labelledby="dateRangeButton">
                                <div date-rangepicker datepicker-autohide class="flex items-center">
                                    <div class="relative">
                                        <a href="">
                                            <p>Semua Sekolah</p>
                                            <a href="">
                                                <p>SDN 2 Banyuwangi</p>
                                            </a>
                                            <a href="">
                                                <p>SDN 1 Banyuwangi</p>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Chart pie --}}
                <div class="py-6" id="pie-chart"></div>

            </div>
            <div class=" max-w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 shadow-lg">
                <div class="flex justify-between items-start w-full">
                    <div class="flex-col items-center">
                        <div class="flex items-center mb-1">
                            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white mr-1">Pelaku</h5>
                            <div data-popover id="chart-info" role="tooltip"
                                class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                <div data-popper-arrow></div>
                            </div>
                        </div>
                        <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown"
                            data-dropdown-ignore-click-outside-class="datepicker" type="button"
                            class="inline-flex items-center text-blue-700 dark:text-blue-600 font-medium hover:underline">Sekolah<svg
                                class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dateRangeDropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40  dark:bg-gray-700 dark:divide-gray-600">
                            <span class="px-4">Daftar Sekolah</span>
                            <div class="p-3" aria-labelledby="dateRangeButton">
                                <div date-rangepicker datepicker-autohide class="flex items-center">
                                    <div class="relative">
                                        <a href="">
                                            <p>Semua Sekolah</p>
                                            <a href="">
                                                <p>SDN 2 Banyuwangi</p>
                                            </a>
                                            <a href="">
                                                <p>SDN 1 Banyuwangi</p>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Chart pie --}}
                <div class="py-6" id="pie-chart1"></div>

            </div>
        </div>


    </div>



    <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {

            const dataSurvey = @json($dataSurveyMurid);

            console.log(dataSurvey);

            const getChartOptions = () => {
                return {
                    series: [20, 20, 40, 20],
                    colors: ["#ef4444", "#f97316", "#eab308", "#22c55e"],
                    chart: {
                        height: 420,
                        width: "100%",
                        type: "pie",
                    },
                    stroke: {
                        colors: ["white"],
                        lineCap: "",
                    },
                    plotOptions: {
                        pie: {
                            labels: {
                                show: true,
                            },
                            size: "100%",
                            dataLabels: {
                                offset: -25
                            }
                        },
                    },
                    labels: ["Sangat Tinggi", "Tinggi", "Sedang", "Rendah"],
                    dataLabels: {
                        enabled: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                        },
                    },
                    legend: {
                        position: "bottom",
                        fontFamily: "Inter, sans-serif",
                    },
                    yaxis: {
                        labels: {
                            formatter: function(value) {
                                return value + "%"
                            },
                        },
                    },
                    xaxis: {
                        labels: {
                            formatter: function(value) {
                                return value + "%"
                            },
                        },
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                    },
                }
            }

            if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
                chart.render();
            }
        });
        window.addEventListener("load", function() {

            const dataSurvey = @json($dataSurveyMurid);

            console.log(dataSurvey);

            const getChartOptions = () => {
                return {
                    series: [20, 20, 40, 20],
                    colors: ["#ef4444", "#f97316", "#eab308", "#22c55e"],
                    chart: {
                        height: 420,
                        width: "100%",
                        type: "pie",
                    },
                    stroke: {
                        colors: ["white"],
                        lineCap: "",
                    },
                    plotOptions: {
                        pie: {
                            labels: {
                                show: true,
                            },
                            size: "100%",
                            dataLabels: {
                                offset: -25
                            }
                        },
                    },
                    labels: ["Korban", "Pelaku"],
                    dataLabels: {
                        enabled: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                        },
                    },
                    legend: {
                        position: "bottom",
                        fontFamily: "Inter, sans-serif",
                    },
                    yaxis: {
                        labels: {
                            formatter: function(value) {
                                return value + "%"
                            },
                        },
                    },
                    xaxis: {
                        labels: {
                            formatter: function(value) {
                                return value + "%"
                            },
                        },
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                    },
                }
            }

            if (document.getElementById("pie-chart1") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("pie-chart1"), getChartOptions());
                chart.render();
            }
        });
        // ApexCharts options and config
    </script>
@endsection
