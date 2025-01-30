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

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->deviceChart->barChart()
            ->setXAxis(['Mobile', 'Tablet', 'Laptop', 'Dekstop'])
            ->addData('Jumlah Kunjungan', [1500, 675, 1250, 865])
            ->setColors(['#6F9677'])
            ->setDataLabels(false)
            ->setOptions(['width' => '100%', 'height' => 300]);
    }
}
