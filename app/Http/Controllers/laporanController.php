<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function laporan()
    {
        // Mengambil data dari file listLaporan.php
        $listLaporan    = include(app_path('Data/listReferensiLaporan.php'));
        $listPartNumber = include(app_path('Data/listPartNumber.php'));

        // Mengirim data ke view
        return view('laporan', compact('listLaporan','listPartNumber'));
    }
}
