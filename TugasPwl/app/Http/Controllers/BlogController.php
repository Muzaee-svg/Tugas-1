<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Halaman Blog - kirim array artikel ke view
    public function index()
    {
        $artikel = [
            [
                'judul'   => 'Belajar Laravel dari Nol',
                'penulis' => 'Arya Pratama',
                'tanggal' => '1 Mei 2026',
                'isi'     => 'Laravel adalah framework PHP yang sangat populer. Dengan Laravel kita bisa membuat website dengan cepat dan terstruktur menggunakan pola MVC.',
            ],
            [
                'judul'   => 'Mengenal TailwindCSS',
                'penulis' => 'Bella Salsabila',
                'tanggal' => '3 Mei 2026',
                'isi'     => 'TailwindCSS adalah framework CSS yang menggunakan utility class. Kita bisa styling langsung di HTML tanpa perlu menulis CSS terpisah.',
            ],
            [
                'judul'   => 'Cara Kerja MVC di Laravel',
                'penulis' => 'Cahya Nugraha',
                'tanggal' => '5 Mei 2026',
                'isi'     => 'MVC adalah singkatan dari Model, View, Controller. Pola ini memisahkan logika, tampilan, dan data agar kode lebih rapi dan mudah dikelola.',
            ],
            [
                'judul'   => 'Blade Template di Laravel',
                'penulis' => 'Dinda Rahayu',
                'tanggal' => '7 Mei 2026',
                'isi'     => 'Blade adalah template engine bawaan Laravel. Dengan Blade kita bisa membuat layout yang bisa dipakai ulang di semua halaman dengan @extends.',
            ],
        ];

        return view('blog', compact('artikel'));
    }
}
