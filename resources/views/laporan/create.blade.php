@extends('layouts.app')

@section('title', 'Laporkan Kerusakan')

@section('content')
<div class="max-w-2xl mx-auto py-12 px-6">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800">Laporkan Kerusakan Infrastruktur</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
        {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Laporan</label>
            <input type="text" name="judul" id="judul" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Kerusakan</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" required class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
        </div>

        <div class="mb-4">
            <label for="lokasi" class="block text-sm font-medium text-gray-700 mb-1">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="mb-6">
            <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Upload Foto (Opsional)</label>
            <input type="file" name="foto" id="foto" accept="image/*" class="w-full text-sm text-gray-500">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Kirim Laporan</button>
    </form>
</div>
@endsection
