<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zonaController extends Controller
{
    public function zona()
    {
        // Mengambil data dari file listZona.php
        $listZona = include(app_path('Data/listZonaStiker.php'));

        // Mengirim data ke view
        return view('zona', compact('listZona'));
    }
}
