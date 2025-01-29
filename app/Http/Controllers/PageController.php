<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view ('pages.dashboard');
    }
    
    public function total_pengunjung()
    {
        return view ('pages.total-pengunjung');
    }

    public function total_pengunjung_aktif()
    {
        return view ('pages.total-pengunjung-aktif');
    }

    public function notifikasi()
    {
        return view ('pages.notifikasi');
    }

}
