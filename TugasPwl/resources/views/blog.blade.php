@extends('layouts.app')

@section('title', 'Blog')

@section('content')

    <h1 class="text-2xl font-bold text-gray-700 mb-6">Artikel Blog</h1>

    <div class="grid md:grid-cols-2 gap-4">

        @foreach ($artikel as $post)
        <div class="bg-white rounded-lg shadow p-6">

            <h2 class="font-bold text-gray-800 text-lg mb-2">{{ $post['judul'] }}</h2>
            <p class="text-gray-500 text-sm mb-4">{{ $post['isi'] }}</p>

            <div class="text-xs text-gray-400 border-t pt-3 flex justify-between">
                <span>✍️ {{ $post['penulis'] }}</span>
                <span>📅 {{ $post['tanggal'] }}</span>
            </div>

        </div>
        @endforeach

    </div>

@endsection
