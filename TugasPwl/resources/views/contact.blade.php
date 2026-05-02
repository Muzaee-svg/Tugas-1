@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <h1 class="text-2xl font-bold text-gray-700 mb-6">Hubungi Kami</h1>

    <div class="grid md:grid-cols-2 gap-6">

        {{-- Informasi kontak --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="font-bold text-gray-700 text-lg mb-4">Informasi Kontak</h2>

            <ul class="space-y-3 text-gray-600 text-sm">
                <li>📧 <strong>Email:</strong> {{ $email }}</li>
                <li>📍 <strong>Alamat:</strong> {{ $alamat }}</li>
                <li>📸 <strong>Instagram:</strong> {{ $instagram }}</li>
                <li>💻 <strong>GitHub:</strong> {{ $github }}</li>
                <li>💼 <strong>LinkedIn:</strong> {{ $linkedin }}</li>
            </ul>
        </div>

        {{-- Form kontak (tampilan saja, tidak simpan ke database) --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="font-bold text-gray-700 text-lg mb-4">Kirim Pesan</h2>

            <div class="space-y-4">

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Nama</label>
                    <input type="text" placeholder="Nama kamu"
                           class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                    <input type="email" placeholder="email@kamu.com"
                           class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Pesan</label>
                    <textarea rows="4" placeholder="Tulis pesanmu di sini..."
                              class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-blue-500"></textarea>
                </div>

                <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 text-sm font-medium">
                    Kirim Pesan
                </button>

                <p class="text-xs text-gray-400 text-center">
                    * Form ini hanya tampilan, tidak terhubung ke database
                </p>

            </div>
        </div>

    </div>

@endsection
