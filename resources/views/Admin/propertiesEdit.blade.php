@extends('Admin.layout')

@section('title', 'Edit Item')

@section('content')
<div class=" h-32"></div>
<div class=" h-full w-full justify-center items-center">

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    <div class="flex flex-col align-middle content-center items-center justify-center mt-20 ml-20 mb-20 bg-white mx-auto w-full h-full p-6 border-b rounded-xl text-left">
        <form class="w-2/5 m h-52" action="{{ route('dashboard.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h1 class="text-3xl font-bold mb-6">Edit Item</h1>
            <div class="mb-2">
                <input type="text" id="name" name="name" value="{{ $item->name }}" placeholder="Nama" class="w-full border-0 border-b-2 p-3" required>
            </div>
            <div class="mb-2">
                <input type="text" id="address" name="address" value="{{ $item->address }}" placeholder="Alamat" class="w-full border-0 border-b-2 p-3" required>
            </div>
            <div class="mb-2">
                <input type="text" id="unit" name="unit" value="{{ $item->unit }}" placeholder="Jumlah Unit" class="w-full border-0 border-b-2 p-3" required>
            </div>
            <div class="mb-2">
                <input type="text" id="price_range" name="price_range" value="{{ $item->price_range }}" placeholder="Harga" class="w-full border-0 border-b-2 p-3" required>
            </div>
            <div class="mb-2">
                <select id="status" name="status" placeholder="status" class="w-full border-0 border-b-2 p-3" required>
                    <option value="active" {{ $item->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $item->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="mb-2">
                <textarea id="description" name="description" placeholder="Deskripsi" class="w-full border-0 border-b-2 p-3" required>{{ $item->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-gray-700">Photo</label>
                <input type="file" id="photo" name="photo" class="w-full border-0 border-b-2 p-3">
                @if($item->photo)
                    <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->name }}" class="w-32 h-auto mt-2 object-cover">
                @endif
            </div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-800 p-3 rounded-md text-white font-bold duration-200">Update Item</button>
        </form>
    </div>
</div>
<div class="h-96 bg-white"></div>
@endsection
