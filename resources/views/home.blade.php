@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-6">
    <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-3 gap-6">

        <a href="{{ route('laporan.create') }}" class="bg-white hover:bg-blue-50 transition rounded-xl shadow p-6 flex flex-col items-center text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M12 4h9m-9 8h9M4 6h16M4 10h16M4 14h16M4 18h16" />
            </svg>
            <h3 class="text-lg font-semibold text-gray-700">Laporkan Kerusakan</h3>
            <p class="text-sm text-gray-500 mt-2">Kirim laporan kerusakan infrastruktur di wilayah Anda</p>
        </a>

        <a href="#" class="bg-white hover:bg-blue-50 transition rounded-xl shadow p-6 flex flex-col items-center text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z" />
            </svg>
            <h3 class="text-lg font-semibold text-gray-700">Cek Status Laporan</h3>
            <p class="text-sm text-gray-500 mt-2">Lihat perkembangan laporan yang sudah dikirim</p>
        </a>

        <a href="#" class="bg-white hover:bg-blue-50 transition rounded-xl shadow p-6 flex flex-col items-center text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h3M3 6h3m4 8h4m0 0h4M5 18h14M3 14h18m-3-8h3" />
            </svg>
            <h3 class="text-lg font-semibold text-gray-700">Pemantauan Proyek</h3>
            <p class="text-sm text-gray-500 mt-2">Pantau proyek perbaikan dan tindak lanjut kerusakan</p>
        </a>

  </div>
</div>
@endsection
