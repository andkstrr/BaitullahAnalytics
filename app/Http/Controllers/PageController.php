<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\CategoryChart;
use App\Charts\VisitTimeChart;
use App\Charts\VisitDurationChart;

class PageController extends Controller
{
    public function dashboard(CategoryChart $categoryChart, VisitTimeChart $visitTimeChart, VisitDurationChart $visitDurationChart)
    {
        return view('pages.dashboard', [
            'categoryChart' => $categoryChart->build(),
            'visitTimeChart' => $visitTimeChart->build(),
            'visitDurationChart' => $visitDurationChart->build(),
        ]);
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
