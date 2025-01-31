<?php
// view ('pages.dashboard)

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class CategoryChart
{
    protected $categoryChart;

    public function __construct(LarapexChart $categoryChart)
    {
        $this->categoryChart = $categoryChart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->categoryChart->donutChart()
            ->addData([20   , 15, 30, 30])
            ->setColors(['#3A3A3A', '#868686', '#D9D9D9', '#6F9677'])
            ->setLabels(['Umroh', 'Umroh Plus', 'Haji Khusus', 'Wisata Halal'])
            ->setOptions([
                'legend' => [
                    'position' => 'bottom', // Memindahkan legend ke bawah
                    'horizontalAlign' => 'center', // Memusatkan legend
                ]
            ]);
    }
}
