@extends('auth.layout')
@section('title', 'Register')
@section('content')

<div class="h-screen bg-[url('image/burung-walet.png')] bg-repeat flex">
    <div class="flex flex-col align-middle content-center items-center justify-center mt-20 ml-20 mb-20 bg-white mx-auto w-1/4 h-auto p-6 border-b rounded-xl text-center shadow-md">
        <img src="#" alt="" class="w-32 h-32 self-center">
        <span class="font-bold text-3xl mb-4">KOSKU</span>
        <form action="#" method="POST" class="mb-4">
            @csrf
              <input type="text" name="name" placeholder="username" class="mb-4 border-0 border-b-2 p-3 w-full">
              <input type="email" name="email" placeholder="email" class="mb-4 border-0 border-b-2 p-3 w-full">
              <input type="password" name="password" placeholder="password" class="mb-4 border-0 border-b-2 p-3 w-full">   
              <input type="password" name="password_confirmation" placeholder="confirm password" class="mb-4 border-0 border-b-2 p-3 w-full">   
            <button type="submit" class="bg-blue-600 hover:bg-blue-800 p-3 rounded-md text-white font-bold duration-200 mb-4">Register</button>
        </form>
        <span class=" text-xs">Sudah punya akun? Masuk<a href="{{route('login')}}"> disini</a></span>
    </div>
</div>