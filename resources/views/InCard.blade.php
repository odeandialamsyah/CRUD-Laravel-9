@extends ('Partials.layout')
@section('title', 'KOSKU')
@section('content')

<div class="h-52"></div>
<div class="w-auto h-auto flex flex-row">
    <div class="w-2/5 flex flex-col h-screen mr-10 ml-10">
        <H1 class="w-full justify-center text-center" >Gambar</H1>
    </div>
    <div>
        <H1>Deskripsi</H1>
        <th class="py-2 px-4 border border-gray-500">Name</th>
        <th class="py-2 px-4 border border-gray-500">Address</th>
        <th class="py-2 px-4 border border-gray-500">Unit</th>
        <th class="py-2 px-4 border border-gray-500">Price Range</th>
        <th class="py-2 px-4 border border-gray-500">Description</th>
        <th class="py-2 px-4 border border-gray-500">Photo</th>
        <th class="py-2 px-4 border border-gray-500">Actions</th>
    </div>
</div>

@endsection