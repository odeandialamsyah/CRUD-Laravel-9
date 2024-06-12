@extends('auth.layout')

@section('title', 'DeleteAccount')

@section('content')
<div class="bg-blue-700">
    <div class="container mx-auto mt-10">
        <div class="max-w-md mx-auto bg-white p-5 rounded-md shadow-sm">
            <h2 class="text-2xl font-semibold mb-6">Delete Account</h2>
    
            <form action="{{ route('profile.destroy') }}" method="POST" onsubmit="return confirmDelete();">
                @csrf
                @method('DELETE')
                <div class="mb-4">
                    <p class="text-red-600">Are you sure you want to delete your account? This action cannot be undone.</p>
                </div>
                <div class="mt-6 flex justify-between items-center">
                    <button type="submit" class="bg-red-600 hover:bg-red-800 p-3 rounded-md text-white font-bold duration-200">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete your account? This action cannot be undone.');
        }
    </script>
</div>
@endsection
