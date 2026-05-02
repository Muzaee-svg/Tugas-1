@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- Sambutan utama --}}
    <div class="bg-white rounded-lg shadow p-8 text-center mb-6">
        <h1 class="text-3xl font-bold text-blue-600 mb-2">
            Selamat Datang di Website {{ $namaWebsite }}
        </h1>
        <p class="text-gray-500 text-lg mb-2">{{ $tagline }}</p>
        <p class="text-gray-600 text-sm">{{ $namaKelompok }} &mdash; {{ $semester }}</p>
    </div>

    {{-- 3 kartu info --}}
    <div class="grid md:grid-cols-3 gap-4">

        <div class="bg-white rounded-lg shadow p-6 text-center">
            <div class="text-4xl mb-3">👥</div>
            <h2 class="font-bold text-gray-700 mb-1">Tim Kami</h2>
            <p class="text-gray-500 text-sm">5 anggota dengan peran masing-masing</p>
            <a href="{{ route('about') }}"
               class="inline-block mt-4 bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700">
                Lihat Profil
            </a>
        </div>

        <div class="bg-white rounded-lg shadow p-6 text-center">
            <div class="text-4xl mb-3">📝</div>
            <h2 class="font-bold text-gray-700 mb-1">Artikel</h2>
            <p class="text-gray-500 text-sm">Berbagi tulisan seputar web development</p>
            <a href="{{ route('blog') }}"
               class="inline-block mt-4 bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700">
                Baca Blog
            </a>
        </div>

        <div class="bg-white rounded-lg shadow p-6 text-center">
            <div class="text-4xl mb-3">📬</div>
            <h2 class="font-bold text-gray-700 mb-1">Kontak</h2>
            <p class="text-gray-500 text-sm">Hubungi kami lewat email atau sosial media</p>
            <a href="{{ route('contact') }}"
               class="inline-block mt-4 bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700">
                Hubungi Kami
            </a>
        </div>

    </div>

@endsection
