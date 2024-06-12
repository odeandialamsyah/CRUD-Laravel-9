@extends('Partials.layout')
@section('title', 'KOSKU')
@section('content')
<main>
    <div class="">
        <div class="h-32 bg-white"></div>
        {{-- diganti aja pake carouls, soalnya ini yg simple-simple aja --}}
        <div class="bg-white flex mt-10 mb-10">
            <div class="w-full flex justify-center">
                <button class="text-black w-20 mr-4 hover:bg-gray-500 p-3 rounded-xl font-semibold" onclick="document.getElementById('kosku').src='photos/pemandangan.jpg'"> < </button>
                <img id="kosku" src="photos/pemandangan.jpg" class="h-96 rounded-xl w-full px-72">
                <button class="text-black w-20 mr-4 hover:bg-gray-500 p-3 rounded-xl font-semibold" onclick="document.getElementById('kosku').src='photos/1716998867.jpg'"> > </button>
            </div>
        </div>
        </div>
        <div class="h-1/2 bg-gray-200 rounded-3xl w-auto mb-9 mr-9 ml-9 flex justify-center items-center">
            <@foreach ($item as $items)
                <div class="relative overflow-hidden bg-gray-50 mb-8 rounded-xl shadow-xl ring-gray-900/5">
                    <a href="#{{ $items->id }}">
                         <div class="relative inset-0 bg-center dark:bg-black"></div>
                         <div class="group relative flex h-3/4 rounded-xl border border-gray-200 transition duration-300 ease-in-out group-hover:border-gray-700 dark:border-gray-700">
                            <img src="{{ asset('photos/' . $items->photo) }}" class="block w-full h-full object-cover transition duration-300 transform scale-100 group-hover:scale-110" alt="{{ $items->name }}" />
                            <div class="absolute bottom-0 p-4 text-white transition duration-300 ease-in-out transform translate-y-0 translate-x-0 group-hover:-translate-y-1 group-hover:translate-x-3">
                                <h1 class="text-2xl font-bold">{{ $items->name }}</h1>
                                <p class="text-sm font-light">{{ $items->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</main>