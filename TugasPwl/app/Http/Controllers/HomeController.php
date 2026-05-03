<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Halaman Home - kirim 4 data ke view
    public function index()
    {
        $namaWebsite  = 'Kelompok 1';
        $tagline      = 'Bersama Belajar, Bersama Berkembang';
        $namaKelompok = 'Kelompok 1 - Pemrograman Web Lanjut';
        $semester     = 'Semester 4';

        return view('home', compact('namaWebsite', 'tagline', 'namaKelompok', 'semester'));
    }

    // // Halaman About - kirim array anggota ke view
    // public function about()
    // {
    //     $anggota = [
    //         ['nama' => 'Nedy Bagus Lidiyono',    'nim' => '24104410010', 'peran' => 'Project Manager'],
    //         ['nama' => 'Setyo Panji Pratama', 'nim' => '24104410016', 'peran' => 'UI/UX Designer'],
    //         ['nama' => 'M. Zaenal Arifin S.',   'nim' => '24104410020', 'peran' => 'Frontend Developer'],
    //         ['nama' => 'Rama Bahrul Ulum ',    'nim' => '24104410034', 'peran' => 'Backend Developer'],
    //         ['nama' => 'Hadyan Sultan A.',  'nim' => '24104410029', 'peran' => 'DevOps Engineer'],
    //     ];

    //     return view('about', compact('anggota'));
    // }
    public function about()
{
    $anggota = [
        [
            'nama' => 'Nedy Bagus Lidiyono',
            'nim' => '24104410010',
            'peran' => 'Project Manager',
            'foto' => 'nedy.jpeg'
        ],
        [
            'nama' => 'Setyo Panji Pratama',
            'nim' => '24104410016',
            'peran' => 'UI/UX Designer',
            'foto' => 'panji.jpeg'
        ],
        [
            'nama' => 'M. Zaenal Arifin S.',
            'nim' => '24104410020',
            'peran' => 'Frontend Developer',
            'foto' => 'zaenal.jpeg'
        ],
        [
            'nama' => 'Rama Bahrul Ulum',
            'nim' => '24104410034',
            'peran' => 'Backend Developer',
            'foto' => 'rama.jpeg'
        ],
        [
            'nama' => 'Hadyan Sultan A.',
            'nim' => '24104410029',
            'peran' => 'DevOps Engineer',
            'foto' => 'sultan.jpeg'
        ],
    ];

    return view('about', compact('anggota'));
}

    // Halaman Contact - kirim data kontak ke view
    public function contact()
    {
        $email     = 'kelompok1@mahasiswa.ac.id';
        $alamat    = 'Universitas Islam Balitar, Blitar, Jawa Timur';
        $instagram = '@kelompok1.pwl';
        $github    = 'github.com/kelompok1-pwl';
        $linkedin  = 'linkedin.com/in/kelompok1-pwl';

        return view('contact', compact('email', 'alamat', 'instagram', 'github', 'linkedin'));
    }
}
