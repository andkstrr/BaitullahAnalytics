<?php
// view ('pages.pengunjung-hari-ini)

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class VisitCompareChart
{
    protected $visitCompareChart;

    public function __construct(LarapexChart $visitCompareChart)
    {
        $this->visitCompareChart = $visitCompareChart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->visitCompareChart->lineChart()
            ->addData('Kunjungan', [32, 15, 24, 21, 18, 20, 14])
            ->setColors(['#205529'])
            ->setXAxis(['7 Hari', '6 Hari', '5 Hari', '4 Hari', '3 Hari', 'Kemarin', 'Hari Ini']);
    }
}
