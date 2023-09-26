@extends('dashboard.layouts.main')
@section('content')
{{-- dashboard ada 3 chart
1. circle chart korban dan pelaku
2. chart korban
3. chart pelaku
4. card jumlah murid
5. card jumlah pelaku
6. card jumlah korban
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
    <h1 class="text-2xl md:text-3xl text-slate-800 font-bold mb-1">Welcome Back {{
      auth("admin")->user()->username }} 👋</h1>
    <p class="">Here is what's happening with your projects today:</p>
  </div>

</div>

<div class="grid grid-cols-1 justify-center items-center gap-4">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <div class="grid grid-cols-1 gap-4">
      <div class="bg-blue-400 w-full rounded-xl px-4 py-6 shadow-md">
        <p class="text-white">Jumlah Aktif Murid</p>
        <h1 class="text-white font-bold text-4xl lg:text-5xl">{{ $jumlahMurid }}</h1>
      </div>
      <div class="bg-red-400 w-full rounded-xl px-4 py-6 shadow-md">
        <p class="text-white">Jumlah Korban Perundungan</p>
        <h1 class="text-white font-bold text-4xl lg:text-5xl">304</h1>
      </div>
      <div class="bg-gray-400 w-full rounded-xl px-4 py-6 shadow-md">
        <p class="text-white">Jumlah Pelaku Perundungan</p>
        <h1 class="text-white font-bold text-4xl lg:text-5xl">220</h1>
      </div>
    </div>
    {{-- pie chart --}}
    <div class=" max-w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">

      <div class="flex justify-between items-start w-full">
        <div class="flex-col items-center">
          <div class="flex items-center mb-1">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white mr-1">Murid</h5>
            {{-- <svg data-popover-target="chart-info" data-popover-placement="bottom"
              class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ml-1"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z" />
            </svg> --}}
            <div data-popover id="chart-info" role="tooltip"
              class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
              <div class="p-3 space-y-2">
                <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a
                  growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in
                  period n contain all activities up to period n, plus the activities generated by your community in
                  period.</p>
                <a href="#"
                  class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read
                  more <svg class="w-2 h-2 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4" />
                  </svg></a>
              </div>
              <div data-popper-arrow></div>
            </div>
          </div>
          <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown"
            data-dropdown-ignore-click-outside-class="datepicker" type="button"
            class="inline-flex items-center text-blue-700 dark:text-blue-600 font-medium hover:underline">Sekolah<svg
              class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
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
        <div class="flex justify-end items-center">
        </div>
      </div>

      {{-- Chart pie --}}
      <div class="py-6" id="pie-chart"></div>

    </div>

  </div>

  {{-- line chart --}}
  <div class="max-w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
    <div class="flex justify-between">
      <div>
        <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-2">Korban Keseluruhan</h5>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">korban keseluruhan bebrapa periode</p>
      </div>
    </div>
    <div id="area-chart"></div>
    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
      <div class="flex justify-between items-center pt-5">
        <!-- Button -->
        <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom"
          class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
          type="button">
          Last 7 days
          <svg class="w-2.5 m-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="lastDaysdropdown"
          class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7
                days</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30
                days</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90
                days</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  {{-- line chart --}}
  <div class="max-w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
    <div class="flex justify-between">
      <div>
        <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-2">Pelaku Keseluruhan</h5>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pelaku keseluruhan bebrapa periode</p>
      </div>
    </div>
    <div id="area-chart1"></div>
    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
      <div class="flex justify-between items-center pt-5">
        <!-- Button -->
        <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom"
          class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
          type="button">
          Last 7 days
          <svg class="w-2.5 m-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="lastDaysdropdown"
          class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7
                days</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30
                days</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90
                days</a>
            </li>
          </ul>
        </div>
      </div>
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
            series: [60, 40],
            colors: ["#1C64F2", "#16BDCA"],
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
                formatter: function (value) {
                  return value + "%"
                },
              },
            },
            xaxis: {
              labels: {
                formatter: function (value) {
                  return value  + "%"
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

    // ApexCharts options and config
  window.addEventListener("load", function() {
    let options = {
      chart: {
        height: "100%",
        maxWidth: "100%",
        type: "area",
        fontFamily: "Inter, sans-serif",
        dropShadow: {
          enabled: false,
        },
        toolbar: {
          show: false,
        },
      },
      tooltip: {
        enabled: true,
        x: {
          show: false,
        },
      },
      fill: {
        type: "gradient",
        gradient: {
          opacityFrom: 0.55,
          opacityTo: 0,
          shade: "#1C64F2",
          gradientToColors: ["#1C64F2"],
        },
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        width: 6,
      },
      grid: {
        show: false,
        strokeDashArray: 4,
        padding: {
          left: 2,
          right: 2,
          top: 0
        },
      },
      series: [
        {
          name: "New users",
          data: [6500, 6418, 6456, 6526, 6356, 6456],
          color: "#1A56DB",
        },
      ],
      xaxis: {
        categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
        labels: {
          show: false,
        },
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false,
        },
      },
      yaxis: {
        show: false,
      },
    }

    if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
      const chart = new ApexCharts(document.getElementById("area-chart"), options);
      chart.render();
    }
    if (document.getElementById("area-chart1") && typeof ApexCharts !== 'undefined') {
      const chart = new ApexCharts(document.getElementById("area-chart1"), options);
      chart.render();
    }
  });
</script>
@endsection