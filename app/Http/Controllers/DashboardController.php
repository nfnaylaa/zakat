<?php

namespace App\Http\Controllers;

use App\Models\Mustahiq;
use App\Models\Bayar_zakat;
use Illuminate\Http\Request;
use App\Models\Mustahiq_Lainnya;
use App\Models\Muzzaki;

class DashboardController extends Controller
{
    //
    public function index()
    {

        return view('dashboard',[
            "tittle"=>"Home",
            "bayarZakat"=> Bayar_zakat::sum('tanggungan_dibayar'),
            "totaljiwa"=> Muzzaki::sum('tanggungan'),
            "Beras0"=> Mustahiq::where('JenisHak','Beras')->sum('Hak'),
            "Beras1"=> Mustahiq_Lainnya::where('JenisHak','Beras')->sum('Hak'),
            "Uang"=> Mustahiq::where('JenisHak','Uang')->sum('Hak'),
            "Uang1"=> Mustahiq_Lainnya::where('JenisHak','Uang')->sum('Hak'),
            "warga"=> Mustahiq::count('nama'),
            "lainnya"=> Mustahiq_Lainnya::count('nama'),
        ]);
    }
}
