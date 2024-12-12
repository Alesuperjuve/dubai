<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    public function pegawai()
    {
        // Mengambil data dari file listPegawai.php
        $listPegawai = include(app_path('Data/listEmployee.php'));

        // Mengirim data ke view
        return view('pegawai', compact('listPegawai'));
    }
}
