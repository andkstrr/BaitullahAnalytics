<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\CategoryChart;
use App\Charts\VisitTimeChart;
use App\Charts\VisitDurationChart;
use App\Charts\DeviceChart;
use App\Charts\VisitorChart;
use App\Charts\TotalVisitorChart;

class PageController extends Controller
{
    public function dashboard(CategoryChart $categoryChart, VisitTimeChart $visitTimeChart, VisitDurationChart $visitDurationChart)
    {
        return view('pages.dashboard', [
            'categoryChart' => $categoryChart->build(),
            'visitTimeChart' => $visitTimeChart->build(),
            'visitDurationChart' => $visitDurationChart->build()
        ]);
    }

    public function pengunjung(DeviceChart $deviceChart, VisitorChart $visitorChart)
    {
        return view ('pages.pengunjung', [
            'deviceChart' => $deviceChart->build(),
            'visitorChart' => $visitorChart->build()
        ]);
    }

    public function total_pengunjung (TotalVisitorChart $totalVisitorChart)
    {
        return view ('pages.total-pengunjung', [
            'totalVisitorChart' => $totalVisitorChart->build()
        ]);
    }

    public function pengunjung_hari_ini()
    {
        return view ('pages.pengunjung-hari-ini');
    }

    public function pengunjung_aktif()
    {
        return view ('pages.pengunjung-aktif');
    }

    public function trafik_website()
    {
        return view ('pages.trafik');
    }

    public function notifikasi()
    {
        return view ('pages.notifikasi');
    }

}
