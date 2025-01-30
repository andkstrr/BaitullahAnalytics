<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class VisitTimeChart
{
    protected $visitTimeChart;

    public function __construct(LarapexChart $visitTimeChart)
    {
        $this->visitTimeChart = $visitTimeChart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->visitTimeChart->barChart()
            ->setXAxis(['00:00', '03:00', '06:00', '09:00', '12:00', '15:00', '18:00', '21:00'])
            ->addData('Jumlah Kunjungan', [35, 120, 50, 200, 150, 90, 80, 60])
            ->setColors(['#6F9677'])
            ->setDataLabels(false);
    }
}
