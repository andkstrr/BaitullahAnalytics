<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class VisitorChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->addData('Kunjungan', [200, 408, 357, 705, 920, 800])
            ->addData('Pembelian', [70, 150, 77, 28, 55, 45])
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'])
            ->setColors(['#205529', '#6F9677']);
    }
}
