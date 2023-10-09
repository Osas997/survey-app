<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
   <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
         <div class="flex items-center justify-start">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
               type="button"
               class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
               <span class="sr-only">Open sidebar</span>
               <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" fill-rule="evenodd"
                     d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                  </path>
               </svg>
            </button>
            <a href="{{ route('index') }}" class="flex ml-2 md:mr-24">
               <img src="{{asset('assets/img/blue-logo.png')}}" class="h-8 mr-3" alt="FlowBite Logo" />
               <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Survey
                  App</span>
            </a>
         </div>
         <div class="flex items-center">
            <div class="flex items-center ml-3">
               <div>
                  <button type="button"
                     class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                     aria-expanded="false" data-dropdown-toggle="dropdown-user">
                     <span class="sr-only">Open user menu</span>
                     <div
                        class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center text-xl text-white">
                        @if (auth('admin')->check())
                        {{ substr(auth('admin')->user()->username, 0, 1) }}
                        @elseif (auth('sekolah')->check())
                        {{ substr(auth('sekolah')->user()->nama_sekolah, 0, 1) }}
                        @elseif (auth('guru')->check())
                        {{ substr(auth('guru')->user()->nama, 0, 1) }}
                        @endif
                     </div>
                  </button>
               </div>
               <div
                  class="z-50 hidden my-4 text-base list-none w-52 bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                  id="dropdown-user">
                  <div class="px-4 py-3" role="none">
                     <p class="text-sm text-gray-900 dark:text-white" role="none">
                        Username
                     </p>
                     <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                        @if (auth('admin')->check())
                        {{auth('admin')->user()->username}}
                        @elseif (auth('sekolah')->check())
                        {{auth('sekolah')->user()->nama_sekolah}}
                        @elseif (auth('guru')->check())
                        {{auth('guru')->user()->nama}}
                        @endif
                     </p>
                  </div>
                  <ul class="py-1" role="none">
                     <li>
                        <a @if (auth('admin')->check())
                           href="{{ route('admin.dashboard') }}"
                           @elseif (auth('sekolah')->check())
                           href="{{ route('sekolah.dashboard') }}"
                           @elseif (auth('guru')->check())
                           href="{{ route('guru.dashboard') }}"
                           @endif
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                           role="menuitem">Dashboard</a>
                     </li>
                     <li>
                        <form action="{{ route('logout') }}" method="post">
                           @csrf
                           <button href="#" type="submit"
                              class="block text-start w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                              role="menuitem">Sign out</button>
                        </form>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</nav>