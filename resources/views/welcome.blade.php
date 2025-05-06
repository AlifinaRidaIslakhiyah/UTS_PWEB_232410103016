@extends('layout.app')
@section('bodyClass', 'bg-pink-50 text-pink-900 min-h-screen flex flex-col items-center justify-center p-6')
@section('content')
    <main class="text-center max-w-2xl mx-auto mt-10">
        <h1 class="text-5xl font-extrabold text-pink-700 mb-4">Selamat Datang</h1>
        <h2 class="text-3xl font-semibold text-pink-500 mb-6">Website Pengelolaan Data Mahasiswa Unej</h2>
        <p class="text-lg text-pink-800 mb-8 leading-relaxed">
            Platform ini dirancang untuk memudahkan pengelolaan data mahasiswa Universitas Jember secara aman, cepat, dan terintegrasi.
        </p>
        <a href="{{ route('login') }}"
           class="inline-block px-6 py-3 bg-pink-600 text-white rounded-md shadow hover:bg-pink-700 transition">
            Login
        </a>
    </main>
@endsection
