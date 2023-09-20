<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @include('dashboard.partials.link')
   <title>{{$title}}</title>
</head>

<body
   class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
<<<<<<< HEAD
   @include('dashboard.partials.navbar')
=======

   <div class="absolute w-full  dark:hidden min-h-75"></div>

>>>>>>> b39983301fa7f942c47d0d05009b146e904cd293
   @include('dashboard.partials.sidenav')

   <div class="p-4 sm:ml-64">
      <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
         @yield('content')
      </div>
   </div>


   {{-- <div class="container mx-auto"> --}}
      {{-- </div> --}}
   @include('dashboard.partials.script')
</body>

</html>