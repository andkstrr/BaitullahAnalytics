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
            ->addData([20, 24, 30, 40, 50])
            ->setColors(['#3A3A3A', '#868686', '#B8860B', '#6F9677', '#205529'])
            ->setLabels(['Laki-laki', 'Perempuan', 'Mobile', 'Tablet', 'Dekstop']);
    }
}
