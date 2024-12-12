<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stikerController extends Controller
{
    public function stiker()
    {
        // Mengambil data dari file listStiker.php
        $listStiker = include(app_path('Data/listStiker.php'));

        // Mengirim data ke view
        return view('stiker', compact('listStiker'));
    }
}
