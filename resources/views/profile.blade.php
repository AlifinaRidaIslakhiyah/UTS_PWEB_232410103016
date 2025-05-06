@extends('layout.app')
@section('title', 'Profil Mahasiswa')
@section('bodyClass', 'bg-pink-50 text-gray-800')
@section('content')
    @include('components.navbar')
    <!-- Header -->
    <header class="bg-pink-100 shadow-sm">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-pink-600">Halo {{$username}} Selamat Datang Di Profil Mahasiswa</h2>
        </div>
    </header>
    <!-- Main Content -->
    <main class="py-10">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Update Profile Information -->
            <div class="p-6 bg-white rounded-2xl shadow hover:shadow-pink-100 transition">
                <h3 class="text-lg font-semibold text-pink-600 mb-4">Informasi Profil</h3>
                <div class="max-w-xl space-y-4">
                    <!-- Menampilkan Username -->
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-700">Username:</span>
                        <span class="text-pink-600">{{ $username }}</span>
                    </div>
                    <!-- Menampilkan Nama Lengkap -->
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-700">Nama:</span>
                        <span class="text-pink-600">Siapa Ya</span>
                    </div>
                    <!-- Menampilkan Email -->
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-700">Email:</span>
                        <span class="text-pink-600">Siapaya@gmail.com</span>
                    </div>
                    <!-- Menampilkan NIM -->
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-700">NIM:</span>
                        <span class="text-pink-600">222410101026</span>
                    </div>
                    <!-- Menampilkan Program Studi -->
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-700">Program Studi:</span>
                        <span class="text-pink-600">Sistem Informasi</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
<script>
    const toggle = document.getElementById('dropdownToggle');
    const menu = document.getElementById('dropdownMenu');
    toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
@endsection
