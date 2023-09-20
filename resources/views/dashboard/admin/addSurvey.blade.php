@extends('dashboard.layouts.main')
@section('content')
<div class="min-h-screen max-h-full bg-white mx-8 my-8 border border-black rounded-[40px] p-10 ">
    <div class="flex justify-start items-center gap-5">
        <div class="w-10 h-10">
            <a href="">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z" fill="#0F0F0F"></path> </g></svg>
            </a>
        </div>
        <p class="font-bold text-lg my-0">
            <span class=" md:text-xl">Tambah Survey</span>
        </p>
    </div>
    <div class="flex justify-center items-center flex-col">
        <div class="form-group w-full mt-8">
            <p class="font-semibold text-black">Nama Survey</p>
            <input type="text" placeholder="Nama Survey" name="nama" class="input input-bordered bg-transparent
                @error('survey')
                    input-error @else border-[#0090D4]
                @enderror 
                w-full max-w-xs border-2  focus:border-[#0090D4] focus:outline-none text-black "/>
        </div>
        <div class="form-group w-full mt-4">
            <p class="font-semibold text-black">Nama Deskribsi</p>
            <textarea rows="4" placeholder="Nama Survey" name="nama" class="textarea textarea-bordered bg-transparent p-2 rounded-lg
                @error('survey')
                    input-error @else border-[#0090D4]
                @enderror 
                w-full max-w-xs border-2  focus:border-[#0090D4] focus:outline-none text-black "></textarea>
        </div>
        <div class="md:flex md:justify-center md:items-center  md:flex-row md:gap-4 min-w-full md:min-w-fit ">
           
            <div class="bg-[#29CE00] rounded-lg flex justify-center items-center gap-3 w-full px-8 h-12 mt-4 ">
                <span class="text-white whitespace-nowrap  text-md">Submit</span>
                
            </div>     
            
        </div>
    </div>
</div>
@endsection