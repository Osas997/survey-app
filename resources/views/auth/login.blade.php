@extends('layout.pages')
@section('title','Login')
@section('content')
    <div class="bg-[#0090D4] w-screen h-screen overflow-x-hidden ">
        <div class="container  w-full">
            <div class="flex justify-center items-center gap-10 ">
                <img src="{{asset('assets/img/illustrations/survey.png')}}" alt="" srcset="" class="w-[600px] h-auto">
                <div class="bg-white w-[470px] rounded-[40px] px-16 flex flex-col items-center justify-center my-8"> 
                    <div class="flex justify-center items-center mt-12 mb-16">
                        <img src="{{asset('assets/img/logos/kemdigbud.png')}}" alt="" srcset="">
                    </div>
                    <h2 class="text-center font-semibold text-3xl">Welcome Back</h2>
                    <p class="text-center font-medium text-xs">Please enter your details!</p>
                    <form action="" method="post" class="flex flex-col items-center justify-center">
                        <div class="form-group w-[330px]">
                            <p class="font-semibold text-black">Email</p>
                            <input type="text" placeholder="Masukan Email" name="email" class="input input-bordered input-primary bg-transparent w-full max-w-xs border-2 border-[#0090D4] focus:border-[#0090D4] focus:outline-none" />
                        </div>
                        <div class="form-group mt-6 w-full">
                            <p class="font-semibold text-black">Password</p>
                            <input type="password" placeholder="*********" name="password" class="input input-bordered input-primary bg-transparent w-full max-w-xs border-2 border-[#0090D4] focus:border-[#0090D4] focus:outline-none" />
                        </div>
                        <button type="submit" class="block bg-blue-500 w-full py-4 mt-16 mb-14 rounded-full text-white hover:bg-[#0090D4] transition-colors duration-300 ease-in-out">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
