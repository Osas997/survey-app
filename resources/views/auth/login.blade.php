@extends('layout.pages')
@section('title','Login')
@section('content')
    <div class="bg-[#0090D4] w-screen h-screen overflow-x-hidden ">
        <div class=" w-full sm:cointainer">
            <div class="flex justify-center items-center">
                <div class="bg-white w-screen h-screen px-16 flex flex-col items-center justify-center sm:my-6 sm:max-w-[550px] sm:rounded-[40px] sm:h-full"> 
                    <div class="flex justify-center items-center mt-12 mb-8 ">
                        <img src="{{asset('assets/img/logos/kemdigbud.png')}}" alt="" srcset="" >
                    </div>
                    <input type="date" name="date" id="">
                    <h2 class="text-center font-semibold text-3xl">Welcome Back</h2>
                    <p class="text-center font-medium text-xs">Please enter your details!</p>
                    @if (session()->has('loginError'))
                    <div class="alert alert-error w-3/4 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>{{session('loginError')}}</span>
                      </div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <div class="form-group min-w-[280px] sm:min-w-[330px]">
                            <p class="font-semibold text-black">Username</p>
                            <input type="text" placeholder="Masukan Username" name="username" class="input input-bordered bg-transparent
                            @error('username')
                                input-error @else border-[#0090D4]
                            @enderror 
                            w-full max-w-xs border-2  focus:border-[#0090D4] focus:outline-none text-black " value="{{old('username')}}" />
                        </div>
                        @error('username')
                        <div class="mt-2">
                            <p class="text-red-500 text-sm italic"></p>
                        </div>
                        @enderror
                        <div class="form-group mt-4 min-w-[280px] sm:min-w-[330px]
                        ">
                            <p class="font-semibold text-black">Password</p>
                            <input type="password" placeholder="*********" name="password" class="input input-bordered input-primary bg-transparent w-full max-w-xs border-2 focus:border-[#0090D4] focus:outline-none text-black   @error('username')
                            input-error @else border-[#0090D4]
                        @enderror " />
                        </div>
                        @error('password')
                        
                        <div class="mt-2">
                            <span class="text-red-500 align-start italic text-sm">Error</span>
                        </div>
                        @enderror
                        <button type="submit" class="block bg-blue-500 w-full py-4 mt-8 mb-14 rounded-full text-white hover:bg-[#0090D4] transition-colors duration-300 ease-in-out">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection