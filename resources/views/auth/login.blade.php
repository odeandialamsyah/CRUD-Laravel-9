@extends('auth.layout')
@section('title', 'Login')
@section('content')

<div class="h-full bg-blue-700">
    <div class="h-screen bg-[url('#')] bg-repeat flex">
        <div class="flex flex-col align-middle content-center items-center justify-center mt-20 ml-20 mb-20 bg-white mx-auto w-1/4 h-auto p-6 border-b rounded-xl text-center shadow-md">
            <img src="#" alt="" class="w-32 h-32 self-center">
            <span class="font-bold text-3xl mb-4">KOSKU</span>
            <form action="#" method="POST" class="mb-4">
                @csrf
                  <input type="email" name="email" placeholder="Email" class="mb-4 border-0 border-b-2 p-3 w-full">
                  <input type="password" name="password" placeholder="Password" class="mb-4 border-0 border-b-2 p-3 w-full">      
                <button type="submit" class="bg-blue-600 hover:bg-blue-800 p-3 rounded-md text-white font-bold duration-200 mb-4">Masuk</button>
            </form>
            <span class=" text-xs">Tidak punya akun? Daftar<a href="{{route('register')}}"> disini</a></span>
        </div>
    </div>
</div>