<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materialController extends Controller
{
    public function material()
    {
        // Mengambil data dari file listMaterial.php
        $listMaterial = include(app_path('Data/listmaterial.php'));

        // Mengirim data ke view
        return view('material', compact('listMaterial'));
    }
}
