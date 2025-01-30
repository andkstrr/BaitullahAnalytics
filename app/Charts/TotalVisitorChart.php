<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalVisitorChart
{
    protected $totalVisitorChart;

    public function __construct(LarapexChart $totalVisitorChart)
    {
        $this->totalVisitorChart = $totalVisitorChart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PolarAreaChart
    {
        return $this->totalVisitorChart
            ->polarAreaChart()
            ->addData([20, 24, 30, 40])
            ->setColors(['#3A3A3A', '#868686', '#D9D9D9', '#6F9677'])
            ->setLabels(['Laki-laki', 'Perempuan', 'Unknown', 'Unknown']);
    }
}
