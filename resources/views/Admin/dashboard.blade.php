@extends('Admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="flex min-h-screen ">
    {{-- Navbar  --}}
<header>
    <nav class=" flex-none w-64 mr-20 border-b-4 h-full py-4 bg-black">
        <div class="flex flex-col items-start pl-7 justify-between">
            <!-- Logo -->
            <a href="#" class="text-white pt-8 hover:text-blue-600 transition duration-300 text-3xl  font-bold items-center">
            KOSKU
            </a>
            <!-- Navigation Links -->
            <div class="space-x-5 pt-16">
                <!-- Jika pengguna sudah login -->
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button"
                            class="group relative flex justify-center items-center text-white hover:text-blue-600 transition duration-300 font-semibold border-0 focus:outline-none"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            {{ Auth::user()->name }}
                            <svg class="mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div id="gambar"
                        class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="{{ route('logout') }}" class="text-gray-700 block px-4 py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-1"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <a href="{{route('profile.edit')}}" class="text-gray-700 block px-4 py-2 text-sm"
                            role="menuitem" tabindex="-1" id="menu-item-2">Edit</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
{{-- Navbar end  --}}
<div class="container w-auto mx-auto mt-10">
    <div class="w-full h-5"></div>
    <h1 class="text-3xl font-bold pb-10">DASHBOARD</h1>

    @if(session('success'))
        <div class="bg-green-100 border mb-6 rounded-2xl border-green-400 text-green-700 px-4 py-3 relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <a href="{{ route('dashboard.create') }}" class="bg-blue-600 hover:bg-blue-800 p-3 rounded-md text-white font-bold duration-200 mb-4 inline-block">Add New Item</a>

    <table class="w-full justify-center items-center bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border border-gray-500">Name</th>
                <th class="py-2 px-4 border border-gray-500">Address</th>
                <th class="py-2 px-4 border border-gray-500">Unit</th>
                <th class="py-2 px-4 border border-gray-500">Price Range</th>
                <th class="py-2 px-4 border border-gray-500">Description</th>
                <th class="py-2 px-4 border border-gray-500">Photo</th>
                <th class="py-2 px-4 border border-gray-500">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($item as $items)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $items->name }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $items->address }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $items->unit }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $items->price_range }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $items->description }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <img src="{{ asset('photos/' . $items->photo) }}" alt="{{ $items->name }}" class="w-16 h-16 object-cover">
                    </td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <a href="{{ route('dashboard.edit', $items->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                        <form action="{{ route('dashboard.destroy', $items->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
