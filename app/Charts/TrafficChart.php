<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TrafficChart
{
    protected $trafficChart;

    public function __construct(LarapexChart $trafficChart)
    {
        $this->trafficChart = $trafficChart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->trafficChart->donutChart()
            ->addData([20, 15, 30, 30])
            ->setColors(['#3A3A3A', '#868686', '#D9D9D9', '#6F9677'])
            ->setLabels(['Direct', 'Organic', 'Referral', 'Paid',])
            ->setOptions([
                'legend' => [
                    'position' => 'bottom', // Memindahkan legend ke bawah
                    'horizontalAlign' => 'center', // Memusatkan legend
                ]
            ]);
    }
}
