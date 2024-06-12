@extends('Admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto mt-10">
    <div class="w-full h-36"></div>
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    @if(session('success'))
        <div class="bg-green-100 border mb-6 rounded-2xl border-green-400 text-green-700 px-4 py-3 relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <a href="{{ route('dashboard.create') }}" class="bg-blue-600 hover:bg-blue-800 p-3 rounded-md text-white font-bold duration-200 mb-4 inline-block">Add New Item</a>

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200">Name</th>
                <th class="py-2 px-4 border-b border-gray-200">Address</th>
                <th class="py-2 px-4 border-b border-gray-200">Unit</th>
                <th class="py-2 px-4 border-b border-gray-200">Price Range</th>
                <th class="py-2 px-4 border-b border-gray-200">Description</th>
                <th class="py-2 px-4 border-b border-gray-200">Photo</th>
                <th class="py-2 px-4 border-b border-gray-200">Actions</th>
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
    <div class="w-full h-36"></div>
</div>
@endsection
