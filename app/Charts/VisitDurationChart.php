<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class VisitDurationChart
{
    protected $visitDurationChart;

    public function __construct(LarapexChart $visitDurationChart)
    {
        $this->visitDurationChart = $visitDurationChart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->visitDurationChart->lineChart()
            ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
            ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['< 15m', '15m - 30m', '30m - 45m', '45m - 1h', '1h - 2h', '> 2h']);
    }
}
