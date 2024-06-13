{{-- Navbar  --}}
<header>
    <nav class="fixed top-0 z-10 w-full border-b-4 h-20 py-4 bg-black">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="text-white hover:text-blue-600 transition duration-300 text-lg font-bold flex items-center pl-20">
                <img src="#" alt="" class="w-16 mr-4">KOSKU
            </a>
            <!-- Navigation Links -->
            <div class="space-x-5 pr-20 flex">
                <!-- Jika pengguna sudah login -->
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button"
                            class="group relative flex justify-center items-center text-white hover:text-blue-600 transition duration-300 font-semibold border-0 focus:outline-none"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            {{ Auth::user()->name }}
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
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
