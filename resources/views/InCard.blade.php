@extends ('Partials.layout')
@section('title', 'KOSKU')
@section('content')

<div class="h-52"></div>
<div class="w-auto h-auto flex flex-row">
    <div class="w-2/5 flex flex-col h-screen mr-10 ml-10">
        <H1 class="w-full justify-center text-center" >Gambar</H1>
    </div>
    <div class="flex flex-col">
        <H1 class="text-2xl font-bold">Deskripsi</H1>
        <table>
            <label>Name</label>
            <p></p>
            <label>Address</label>
            <p></p>
            <label>Unit</label>
            <p></p>
            <label>Price Range</label>
            <p></p>
            <label>Description</label>
            <p></p>
            <label>Photo</label>
            <p></p>
        </table>
    </div>
</div>

@endsection