@extends('layout.app')
@section('title', 'Pengelolaan Mahasiswa')
@section('bodyClass', 'bg-pink-50 text-gray-800')
@section('content')
    @include('components.navbar')
    <!-- Header -->
    <header class="bg-pink-100 shadow-sm">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-pink-600">Halo {{$username}} Anda Berada Di Halaman Pengelolaan</h2>
        </div>
    </header>

    <!-- Content -->
    <main class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white rounded-2xl shadow p-6">
            <p class="text-lg text-gray-700">Di sini Anda bisa menambahkan atau mengatur data mahasiswa, program studi, dan lainnya.</p>

            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-pink-100 p-4 rounded-lg shadow hover:bg-pink-200 transition cursor-pointer">
                    <h3 class="text-pink-700 font-semibold text-lg">Kelola Data Mahasiswa</h3>
                    <p class="text-sm text-pink-600">Tambah, edit, atau hapus data mahasiswa.</p>
                </div>

                <div class="bg-pink-100 p-4 rounded-lg shadow hover:bg-pink-200 transition cursor-pointer">
                    <h3 class="text-pink-700 font-semibold text-lg">Kelola Fakultas</h3>
                    <p class="text-sm text-pink-600">Atur daftar fakultas dan program studi.</p>
                </div>
            </div>
        </div>
    </main>
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
@endsection
@section('scripts')
<script>
    document.querySelector('button').addEventListener('click', function () {
        const dropdown = document.querySelector('.dropdown-content');
        dropdown.classList.toggle('hidden');
    });
</script>
@endsection
