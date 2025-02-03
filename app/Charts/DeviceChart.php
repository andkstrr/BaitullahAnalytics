<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DeviceChart
{
    protected $deviceChart;

    public function __construct(LarapexChart $deviceChart)
    {
        $this->deviceChart = $deviceChart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->deviceChart->horizontalBarChart()
            ->setColors(['#205529'])
            ->addData('Perangkat Pengunjung', [925, 568, 750])
            ->setXAxis(['Mobile', 'Tablet', 'Dekstop']);
    }
}
