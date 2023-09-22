<aside id="logo-sidebar"
   class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 "
   aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white ">
      <ul class="space-y-2 font-medium">
         @if (auth('admin')->check())
         <li>
            <a href="{{route('admin.dashboard')}}" class="
            @if (Request::is('admin/dashboard'))
                bg-gray-200
            @endif
            flex items-center p-2 text-gray-900 rounded-lg duration-300 ease-in-out   hover:bg-gray-100 group">
               <div class="w-8 h-8">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path
                           d="M9 18V21M15 18V21M7 21H17M3 12H21M12 15H12.01M6.2 18H17.8C18.9201 18 19.4802 18 19.908 17.782C20.2843 17.5903 20.5903 17.2843 20.782 16.908C21 16.4802 21 15.9201 21 14.8V6.2C21 5.0799 21 4.51984 20.782 4.09202C20.5903 3.71569 20.2843 3.40973 19.908 3.21799C19.4802 3 18.9201 3 17.8 3H6.2C5.0799 3 4.51984 3 4.09202 3.21799C3.71569 3.40973 3.40973 3.71569 3.21799 4.09202C3 4.51984 3 5.07989 3 6.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z"
                           stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     </g>
                  </svg>
               </div>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="{{ route('admin.survey') }}" class="
            @if (Request::is('admin/survey*') || Request::is('admin/pertanyaan*'))
                bg-gray-200
            @endif
            flex items-center p-2 text-gray-900 rounded-lg duration-300 ease-in-out hover:bg-gray-100  group">
               <div class="w-8 h-8">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path
                           d="M8 8H13M8 12H16M8 16H11M7.2 4H16.8C17.9201 4 18.4802 4 18.908 4.21799C19.2843 4.40973 19.5903 4.71569 19.782 5.09202C20 5.51984 20 6.0799 20 7.2V16.8C20 17.9201 20 18.4802 19.782 18.908C19.5903 19.2843 19.2843 19.5903 18.908 19.782C18.4802 20 17.9201 20 16.8 20H7.2C6.0799 20 5.51984 20 5.09202 19.782C4.71569 19.5903 4.40973 19.2843 4.21799 18.908C4 18.4802 4 17.9201 4 16.8V7.2C4 6.0799 4 5.51984 4.21799 5.09202C4.40973 4.71569 4.71569 4.40973 5.09202 4.21799C5.51984 4 6.0799 4 7.2 4Z"
                           stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     </g>
                  </svg>
               </div>
               <span class="flex-1 ml-3 whitespace-nowrap">Survey</span>
            </a>
         </li>
         <li>
            <a href="{{ route('admin.sekolah') }}" class="
            @if (Request::is('admin/sekolah*'))
                bg-gray-200
            @endif
            flex items-center p-2 text-gray-900 rounded-lg duration-300 ease-in-out hover:bg-gray-100  group">
               <div class="w-8 h-8">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path
                           d="M6 15.5002H7M6 18.5002H7M17 18.5002H18M17 15.5002H18M10 22.0002V18.0002C10 16.8956 10.8954 16.0002 12 16.0002C13.1046 16.0002 14 16.8956 14 18.0002V22.0002M12 5H16.84C16.896 5 16.924 5 16.9454 4.9891C16.9642 4.97951 16.9795 4.96422 16.9891 4.9454C17 4.92401 17 4.89601 17 4.84V2.16C17 2.10399 17 2.07599 16.9891 2.0546C16.9795 2.03578 16.9642 2.02049 16.9454 2.0109C16.924 2 16.896 2 16.84 2H12.16C12.104 2 12.076 2 12.0546 2.0109C12.0358 2.02049 12.0205 2.03578 12.0109 2.0546C12 2.07599 12 2.10399 12 2.16V5ZM12 5V7.69092M12.03 12.25H12.0375M12 7.69092C12.1947 7.69092 12.3895 7.71935 12.5779 7.77623C13.0057 7.90536 13.3841 8.24585 14.1407 8.92681L17 11.5002L18.5761 11.8942C19.4428 12.1109 19.8761 12.2192 20.1988 12.4608C20.4834 12.674 20.7061 12.9592 20.8439 13.2871C21 13.6587 21 14.1053 21 14.9987V18.8002C21 19.9203 21 20.4804 20.782 20.9082C20.5903 21.2845 20.2843 21.5905 19.908 21.7822C19.4802 22.0002 18.9201 22.0002 17.8 22.0002H6.2C5.0799 22.0002 4.51984 22.0002 4.09202 21.7822C3.71569 21.5905 3.40973 21.2845 3.21799 20.9082C3 20.4804 3 19.9203 3 18.8002V14.9987C3 14.1053 3 13.6587 3.15613 13.2871C3.29388 12.9592 3.51657 12.674 3.80124 12.4608C4.12389 12.2192 4.55722 12.1109 5.42388 11.8942L7 11.5002L9.85931 8.92681C10.6159 8.24584 10.9943 7.90536 11.4221 7.77623C11.6105 7.71935 11.8053 7.69092 12 7.69092ZM12.03 13C11.6158 13 11.28 12.6642 11.28 12.25C11.28 11.8358 11.6158 11.5 12.03 11.5C12.4442 11.5 12.78 11.8358 12.78 12.25C12.78 12.6642 12.4442 13 12.03 13Z"
                           stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     </g>
                  </svg>
               </div>
               <span class="flex-1 ml-3 whitespace-nowrap">Sekolah</span>
            </a>
         </li>
         @endif
         @if (auth('sekolah')->check())
         <li>
            <a href="{{route('sekolah.dashboard')}}" class="
               @if (Request::is('sekolah/dashboard'))
                   bg-gray-200
               @endif
               flex items-center p-2 text-gray-900 rounded-lg duration-300 ease-in-out hover:bg-gray-100 group">
               <div class="w-8 h-8">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path
                           d="M9 18V21M15 18V21M7 21H17M3 12H21M12 15H12.01M6.2 18H17.8C18.9201 18 19.4802 18 19.908 17.782C20.2843 17.5903 20.5903 17.2843 20.782 16.908C21 16.4802 21 15.9201 21 14.8V6.2C21 5.0799 21 4.51984 20.782 4.09202C20.5903 3.71569 20.2843 3.40973 19.908 3.21799C19.4802 3 18.9201 3 17.8 3H6.2C5.0799 3 4.51984 3 4.09202 3.21799C3.71569 3.40973 3.40973 3.71569 3.21799 4.09202C3 4.51984 3 5.07989 3 6.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z"
                           stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     </g>
                  </svg>
               </div>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="{{ route('sekolah.guru') }}" class="
               @if (Request::is('sekolah/guru*'))

                   bg-gray-200
               @endif
               flex items-center p-2 text-gray-900 rounded-lg duration-300 ease-in-out hover:bg-gray-100  group">
               <div class="w-8 h-8">
                  <svg fill="#000000" height="32px" width="32px" version="1.1" id="Capa_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 489.38 489.38" xml:space="preserve">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <g id="XMLID_129_">
                           <path id="XMLID_134_"
                              d="M473.725,5.656H213.576c-8.655,0-15.655,7.022-15.655,15.664v110.484l11.319-13.234 c5.375-6.292,12.461-10.172,19.992-11.793V36.978h228.836v204.531H229.233v-34.238l-7.05,8.244 c-6.161,7.189-14.858,11.65-24.262,12.529v29.124c0,8.642,7,15.655,15.655,15.655h84.489L255.141,467.7 c-1.923,8.739,3.6,17.382,12.346,19.31c8.667,1.904,17.382-3.601,19.287-12.331l44.457-201.855h25.844l44.457,201.855 c1.666,7.557,8.369,12.714,15.803,12.705c1.154,0,2.334-0.117,3.502-0.374c8.746-1.928,14.268-10.57,12.328-19.31l-42.92-194.877 h83.481c8.647,0,15.655-7.013,15.655-15.655V21.32C489.38,12.678,482.372,5.656,473.725,5.656z">
                           </path>
                           <path id="XMLID_132_"
                              d="M349.368,97.116c-1.234-3.11-4.732-4.637-7.84-3.406l-92.234,32.555 c-8.465-6.554-20.678-5.383-27.737,2.827l-29.267,34.178l-25.951-22.245c0.171,1.837,0.56,3.622,0.56,5.507v48.291l14.438,12.371 c8.568,7.338,21.385,6.204,28.549-2.198l34.842-40.743l28.1-16.439l73.951-43.267C349.336,103.073,350.469,99.923,349.368,97.116z">
                           </path>
                           <path id="XMLID_131_"
                              d="M109.928,105.776H92.547c-13.308,0-25.01,6.468-32.448,16.327l-53.352,49.12 c-8.313,7.405-9.067,20.232-1.581,28.595l43.528,48.585c7.421,8.309,20.267,9.044,28.579,1.576 c8.334-7.469,9.038-20.262,1.57-28.586l-30.003-33.504l42.616-38.134l-24.82,33.721l24.279,27.107 c13.416,14.992,12.151,38.027-2.834,51.453c-10.231,9.172-24.193,11.324-36.297,7.094c0,0,0.188,93.659,0.188,193.962 c0,13.416,10.874,24.291,24.291,24.291c13.403,0,24.291-10.875,24.291-24.291c0-100.272,0-43.051,0-144.771h16.203 c0,101.646,0,44.468,0,144.771c0,7.004-1.953,13.49-5.067,19.231c4.076,3.135,9.148,5.06,14.676,5.06 c13.424,0,24.298-10.875,24.298-24.291c0-100.272,0.031-58.237,0.031-316.561C150.697,124.022,132.45,105.776,109.928,105.776z">
                           </path>
                           <path id="XMLID_130_"
                              d="M79.592,91.198c6.495,3.376,13.787,5.471,21.62,5.471c7.853,0,15.145-2.095,21.659-5.477 c15.204-7.877,25.684-23.559,25.684-41.862c0-26.146-21.196-47.335-47.344-47.335c-26.144,0-47.335,21.189-47.335,47.335 C53.877,67.643,64.368,83.331,79.592,91.198z">
                           </path>
                        </g>
                     </g>
                  </svg>
               </div>
               <span class="flex-1 ml-3 whitespace-nowrap">Guru</span>
            </a>
         </li>
         <li>
            <a href="" class="
               @if (Request::is('dashboard/murid*'))
                   bg-gray-200
               @endif
               flex items-center p-2 text-gray-900 rounded-lg duration-300 ease-in-out hover:bg-gray-100  group">
               <div class="w-8 h-8">
                  <svg height="32px" width="32px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                     fill="#000000">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <style type="text/css">
                           .st0 {
                              fill: #000000;
                           }
                        </style>
                        <g>
                           <path class="st0"
                              d="M366.042,378.266c-26.458-9.72-49.309-18.113-51.793-42.026c-1.149-11.024-0.214-23.982,2.702-37.507 c9.144-9.798,16.72-23.936,24.484-45.691c15.458-5.955,25.31-19.192,30.109-40.442c2.461-10.885-1.058-22.073-9.655-30.807 c0.773-13.206,0.095-13.928-0.402-14.456l-0.542-0.536H151.497v14.914c-9.897,9.115-13.61,19.503-11.038,30.885 c4.794,21.242,14.648,34.48,30.12,40.442c7.762,21.754,15.332,35.885,24.464,45.675c2.06,9.518,4.158,23.61,2.71,37.523 c-2.484,23.913-25.336,32.306-51.795,42.026c-36.32,13.338-77.484,28.462-77.484,88.641C68.474,485.634,126.653,512,256,512 c129.347,0,187.526-26.366,187.526-45.093C443.526,406.729,402.362,391.605,366.042,378.266z M233.908,484.578L203.021,359.12 l37.47,15.598l-2.302,20.66l6.572-0.148L233.908,484.578z M277.101,395.378l-2.302-20.66l37.47-15.598l-30.887,125.458 l-10.854-89.348L277.101,395.378z">
                           </path>
                           <path class="st0"
                              d="M91.083,82.779l54.864,24.13v36.397h222.66v-36.397l22.395-9.852v51.234c-4.75,0.753-8.389,4.728-8.389,9.495 c0,4.146,2.741,7.74,6.704,9.053l-6.378,40.217c-0.421,2.663,0.34,5.357,2.081,7.392c1.739,2.042,4.28,3.214,6.972,3.214h16.792 c2.692,0,5.233-1.172,6.968-3.214c1.745-2.034,2.506-4.728,2.085-7.392l-6.374-40.217c3.969-1.312,6.714-4.907,6.714-9.053 c0-4.767-3.643-8.742-8.397-9.495V88.804l13.686-6.017c2.696-1.172,4.439-3.789,4.439-6.654c0-2.85-1.739-5.458-4.433-6.646 L272.931,3.284C267.987,1.102,262.72,0,257.273,0c-5.446,0-10.712,1.102-15.652,3.284L91.081,69.487 c-2.692,1.188-4.431,3.796-4.431,6.646C86.649,79.006,88.392,81.614,91.083,82.779z">
                           </path>
                        </g>
                     </g>
                  </svg>
               </div>
               <span class="flex-1 ml-3 whitespace-nowrap">Murid</span>
            </a>
         </li>
         @endif
      </ul>
   </div>
</aside>