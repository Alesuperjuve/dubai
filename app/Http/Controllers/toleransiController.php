<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class toleransiController extends Controller
{
    public function toleransi()
    {
        // Mengambil data dari file listToleransi.php
        $listToleransi      = include(app_path('Data/listTolerance.php'));
        $listFontPlacard    = include(app_path('Data/listFontPlacard.php'));
        $listMaterial       = include(app_path('Data/listMaterial.php'));
        $listFontColor      = include(app_path('Data/listFontColor.php'));
        $listArtwork        = include(app_path('Data/listArtwork.php'));
        $listBackground     = include(app_path('Data/listBackground.php'));
        $listZone           = include(app_path('Data/listZone.php'));
        $listTitle          = include(app_path('Data/listTitle.php'));
        $listHeight         = include(app_path('Data/listHeight.php'));
        $listDescription    = include(app_path('Data/listDescription.php'));
        $listBody           = include(app_path('Data/listBody.php'));
        $listScale          = include(app_path('Data/listScale.php'));
        $listSize           = include(app_path('Data/listSize.php'));
        $listRadius         = include(app_path('Data/listRadius.php'));



        // Mengirim data ke view
        return view('toleransi', 
            compact(
                'listToleransi',
                'listMaterial',
                'listFontPlacard',
                'listFontColor',
                'listArtwork',
                'listBackground',
                'listZone',
                'listTitle',
                'listBody',
                'listHeight',
                'listDescription',
                'listScale',
                'listSize',
                'listRadius',
            ));
    }
}
