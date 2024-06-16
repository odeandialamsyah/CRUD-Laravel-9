@extends ('Partials.layout')
@section('title', 'KOSKU')
@section('content')

<div class="h-52"></div>
<div class="w-auto h-auto flex flex-row">
    <div class="w-2/5 flex flex-col h-screen mr-10 ml-10">
        <H1 class="w-full justify-center text-center" >Gambar</H1>
    </div>
    <div class="flex-col">
        <H1>Deskripsi</H1>
        <label >Name</label>
        <label >Address</label>
        <label >Unit</label>
        <label >Price Range</label>
        <label >Description</label>
        <label >Photo</label>
        <label >Actions</label>
    </div>
</div>

@endsection