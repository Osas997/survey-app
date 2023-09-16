@extends('layout.pages')
@section('title','Login')
@section('content')
    <div class="bg-[#0090D4] w-screen h-screen overflow-x-hidden ">
        <div class=" w-full sm:cointainer">
            <div class="flex justify-center items-center">
                <div class="bg-white w-screen h-screen px-16 flex flex-col items-center justify-center sm:my-6 sm:max-w-[550px] sm:rounded-[40px] sm:h-full"> 
                    <div class="flex justify-center items-center mt-12 mb-16 ">
                        <img src="{{asset('assets/img/logos/kemdigbud.png')}}" alt="" srcset="" >
                    </div>
                    <h2 class="text-center font-semibold text-3xl">Welcome Back</h2>
                    <p class="text-center font-medium text-xs">Please enter your details!</p>
                    <form action="" method="post" class="flex flex-col items-center justify-center">
                        <div class="form-group min-w-[280px] sm:min-w-[330px]">
                            <p class="font-semibold text-black">username</p>
                            <input type="text" placeholder="Masukan Username" name="username" class="input input-bordered input-primary bg-transparent w-full max-w-xs border-2 border-[#0090D4] focus:border-[#0090D4] focus:outline-none text-black" />
                        </div>
                        <div class="form-group mt-6 min-w-[280px] sm:min-w-[330px]">
                            <p class="font-semibold text-black">Password</p>
                            <input type="password" placeholder="*********" name="password" class="input input-bordered input-primary bg-transparent w-full max-w-xs border-2 border-[#0090D4] focus:border-[#0090D4] focus:outline-none text-black" />
                        </div>
                        <button type="submit" class="block bg-blue-500 w-full py-4 mt-16 mb-14 rounded-full text-white hover:bg-[#0090D4] transition-colors duration-300 ease-in-out">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

