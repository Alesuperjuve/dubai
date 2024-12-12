<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maskapaiController extends Controller
{
    public function maskapai()
    {
        // Mengambil data dari file listMaskapai.php
        $listMaskapai = include(app_path('Data/listMaskapai.php'));

        // Mengirim data ke view
        return view('maskapai', compact('listMaskapai'));
    }
}
