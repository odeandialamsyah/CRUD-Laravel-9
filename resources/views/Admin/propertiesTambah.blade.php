@extends('Admin.layout')

@section('title', 'Create Item')

@section('content')
<div class=" h-32"></div>
<div class=" h-full w-full justify-center items-center ">

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Whoops!</strong>
            <span class="block sm:inline">There were some problems with your input.</span>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="flex flex-col align-middle content-center items-center justify-center mt-20 ml-20 mb-20 bg-white mx-auto w-full h-full p-6 border-b rounded-xl text-left">
        <form action="{{ route('dashboard.store') }}" method="POST" class="w-2/5 m h-52" enctype="multipart/form-data">
            @csrf
            <h1 class="text-3xl font-bold w-3/4 text-center mb-6">Add New Item</h1>
            <div class="mb-2">
                <input type="text" id="name" name="name" placeholder="Nama" class="w-3/4 border-0 border-b-2 p-3" required>
            </div>
            <div class="mb-2">
                <input type="text" id="address" name="address" placeholder ="Alamat"class="w-3/4 border-0 border-b-2 p-3" required>
            </div>
            <div class="mb-2">
                <input type="text" id="unit" name="unit" placeholder="Unit" class="w-3/4 border-0 border-b-2 p-3" required>
            </div>
            <div class="mb-2">
                <input type="text" id="price_range" name="price_range" placeholder="Harga" class="w-3/4 border-0 border-b-2 p-3" required>
            </div>
            <div class="mb-2">
                <select id="status" name="status" placeholder="Status" class="w-3/4 border-0 border-b-2 p-3" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="mb-2">
                <textarea id="description" name="description" placeholder="Deskripsi" class="w-3/4 border-0 border-b-2 p-3" required></textarea>
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-gray-700">Photo</label>
                <input type="file" id="photo" name="photo" class="w-3/4 border-0 border-b-2 p-3" required>
            </div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-800 p-3 rounded-md text-white font-bold duration-200">Add Item</button>
        </form>
    </div>
</div>
<div class="h-96"></div>
@endsection
