<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pesawatController extends Controller
{
    public function pesawat()
    {
        // Mengambil data dari file listPesawat.php
        $listPesawat = include(app_path('Data/listPlane.php'));
        $listMaskapai = include(app_path('Data/listMaskapai.php'));
        $listTipePlane = include(app_path('Data/listTipePlane.php'));

        // Mengirim data ke view
        return view('pesawat', compact('listPesawat', 'listMaskapai', 'listTipePlane'));
    }
}
