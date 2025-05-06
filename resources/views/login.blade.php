@extends('layout.app')
@section('title', 'Login Mahasiswa')
@section('bodyClass', 'bg-pink-100 min-h-screen w-full flex flex-col items-center justify-center')
@section('content')
    <div class="max-w-lg w-full p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-pink-600 leading-tight mb-6">
            Login Mahasiswa
        </h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input id="username" class="block mt-1 w-full p-3 border border-pink-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500" type="text" name="username" required autofocus />
                @error('username')
                    <div class="mt-2 text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" class="block mt-1 w-full p-3 border border-pink-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500" type="password" name="password" required />
                @error('password')
                    <div class="mt-2 text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" class="bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-600 transition duration-300">
                    Log in
                </button>
            </div>
        </form>
    </div>
@endsection
