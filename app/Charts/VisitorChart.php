<?php
// view ('pages.pengunjung')

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class VisitorChart
{
    protected $visitorChart;

    public function __construct(LarapexChart $visitorChart)
    {
        $this->visitorChart = $visitorChart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->visitorChart->lineChart()
            ->addData('Kunjungan', [200, 408, 357, 705, 920, 800])
            ->addData('Pembelian', [70, 150, 77, 28, 55, 45])
            ->addData('Terdaftar', [150, 300, 670, 874, 1150, 1526])
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'])
            ->setColors(['#205529', '#6F9677', '#3A3A3A']);
    }
}
