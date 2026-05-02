@extends('layouts.app')

@section('title', 'About')

@section('content')

    <h1 class="text-2xl font-bold text-gray-700 mb-6">Profil Anggota Kelompok</h1>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">

        @foreach ($anggota as $orang)
        <div class="bg-white rounded-lg shadow p-6">

            {{-- Avatar huruf pertama nama --}}
            <div class="w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center text-2xl font-bold mb-4">
                {{ strtoupper(substr($orang['nama'], 0, 1)) }}
            </div>

            <h2 class="font-bold text-gray-800 text-lg">{{ $orang['nama'] }}</h2>
            <p class="text-sm text-blue-500 mb-1">NIM: {{ $orang['nim'] }}</p>
            <p class="text-sm text-gray-500">{{ $orang['peran'] }}</p>

        </div>
        @endforeach

    </div>

@endsection
