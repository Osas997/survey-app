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

   <div class="absolute w-full  dark:hidden min-h-75"></div>

   @include('dashboard.partials.sidenav')
   <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
      @include('dashboard.partials.navbar')
      {{-- @include('dashboard.partials.content') --}}
      @yield('content')
   </main>
   {{-- @include('dashboard.partials.settings') --}}
   @include('dashboard.partials.script')
</body>

</html>