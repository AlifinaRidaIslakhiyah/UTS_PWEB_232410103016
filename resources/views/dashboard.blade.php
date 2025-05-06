@extends('layout.app')
@section('title', 'Dashboard Mahasiswa')
@section('bodyClass', 'bg-pink-50 text-gray-800')
@section('content')
    @include('components.navbar')
    <!-- Header -->
    <header class="bg-pink-100 shadow-sm w-full">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-pink-600">Halo {{$username}} Selamat Datang Di Pengelolaan Data Mahasiswa Unej</h2>
        </div>
    </header>
    <main class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl shadow p-6 hover:shadow-pink-200 transition">
                    <h3 class="text-lg font-semibold text-pink-600">Total Mahasiswa</h3>
                    <p class="mt-2 text-3xl font-bold">1,245</p>
                </div>
                <div class="bg-white rounded-2xl shadow p-6 hover:shadow-pink-200 transition">
                    <h3 class="text-lg font-semibold text-pink-600">Fakultas Terdaftar</h3>
                    <p class="mt-2 text-3xl font-bold">12</p>
                </div>
                <div class="bg-white rounded-2xl shadow p-6 hover:shadow-pink-200 transition">
                    <h3 class="text-lg font-semibold text-pink-600">Data Terverifikasi</h3>
                    <p class="mt-2 text-3xl font-bold">89%</p>
                </div>
            </div>

            <div class="mt-10 bg-white rounded-2xl shadow overflow-hidden">
                <div class="p-4 border-b bg-pink-100 text-pink-700 font-semibold">Daftar Mahasiswa</div>
                <table class="min-w-full text-sm text-left text-gray-700">
                    <thead class="bg-pink-50 text-pink-700 uppercase">
                        <tr>
                            <th class="px-6 py-3">NIM</th>
                            <th class="px-6 py-3">Nama</th>
                            <th class="px-6 py-3">Program Studi</th>
                            <th class="px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $mhs)
                            <tr class="border-t">
                                <td class="px-6 py-4">{{ $mhs['nim'] }}</td>
                                <td class="px-6 py-4">{{ $mhs['nama'] }}</td>
                                <td class="px-6 py-4">{{ $mhs['program_studi'] }}</td>
                                <td class="px-6 py-4 
                                    @if($mhs['status'] === 'Aktif') text-green-600
                                    @elseif($mhs['status'] === 'Cuti') text-yellow-600
                                    @else text-red-600
                                    @endif">
                                    {{ $mhs['status'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
<script>
    document.querySelector('button').addEventListener('click', function () {
        const dropdown = document.querySelector('.dropdown-content');
        dropdown.classList.toggle('hidden');
    });
</script>
@endsection
