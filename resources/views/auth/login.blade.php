<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   @vite('resources/css/app.css')

</head>

<body>
   @if (session()->has("loginError"))
   <div class="alert alert-error">
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-slate-50 shrink-0 h-6 w-6" fill="none"
         viewBox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span class="text-slate-50 font-bold">{{ session("loginError") }}</span>
   </div>
   @endif
   <form action="/login" method="POST">
      @csrf
      <input type="text" name="username">
      <input type="password" name="password">
      <button type="submit">kirimm</button>
   </form>


</body>

</html>