<nav class="bg-gradient-to-r from-pink-400 to-pink-600 shadow-md text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img src="https://unej.ac.id/wp-content/uploads/2025/03/card-og-unej.webp"
                 alt="Logo Unej"
                 class="h-11 w-11 object-cover object-center rounded-full">
            <a href="{{ route('dashboard', ['username' => $username, 'mahasiswa' => $mahasiswa]) }}" class="text-white text-lg font-semibold hover:text-pink-100 transition">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username, 'mahasiswa' => $mahasiswa]) }}" class="text-white text-lg font-semibold hover:text-pink-100 transition">Pengelolaan</a>

        </div>



        <div class="flex items-center space-x-4">
            <span class="text-sm font-medium">Halo, {{ $username }}</span>
            <div class="relative">
                <button class="bg-pink-500 hover:bg-pink-400 px-4 py-2 text-sm rounded-md font-medium inline-flex items-center">
                    <span>Pengaturan</span>
                    <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="dropdown-content absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden group-hover:block">
                    <div class="py-1">
                        <a href="{{ route('profile',['username' => $username, 'mahasiswa' => $mahasiswa]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-100">Profil</a>
                        <a href="{{ route('/')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-100">Log Out</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
