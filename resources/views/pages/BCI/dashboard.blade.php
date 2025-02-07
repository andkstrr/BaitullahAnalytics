@extends('layouts.app')

@section('title-page', 'Dashboard')
@section('site-code-app', 'BCI')
@section('app-name', 'baitullah.co.id')

@section('content')
    {{-- SECTION 1 --}}
    <div class="d-flex flex-column flex-lg-row gap-6 mt-6">
        {{-- LEFT COL --}}
        <div class="flex-grow-1">
            <h6 class="section-title fw-semisemibold text-black fs-5 mt-7">Overview</h6>
            <div class="row mt-4">
                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-card-dashboard title="Audience" value="1,500" percentage="12%"></x-card-dashboard>
                </div>

                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-card-dashboard title="Visitors" value="1,500" percentage="12%"></x-card-dashboard>
                </div>

                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-card-dashboard title="Merchant" value="1,500" percentage="12%"></x-card-dashboard>
                </div>

                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-card-dashboard title="Page Views" value="1,500" percentage="12%"></x-card-dashboard>
                </div>

                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-card-dashboard title="Traffic" value="1,500" percentage="12%"></x-card-dashboard>
                </div>
            </div>
        </div>

        {{-- RIGHT COL --}}
        <div class="col-12 col-lg-4 mt-9">
            {{-- TOTAL ALL USERS CARD --}}
            <x-tab-content
                title="Users"
                object="User"
                :tabs="[
                    'Daily' => ['label' => 'Daily', 'value' => '1,403'],
                    'Monthly' => ['label' => 'Monthly', 'value' => '18,3K'],
                    'Yearly' => ['label' => 'Yearly', 'value' => '520K'],
                ]"
                :percentages="[
                    'unread' => '+5.12%',
                    'read' => '+12.30%',
                ]"
            />
        </div>
    </div>

    {{-- SECTION 2 --}}
    <div class="row mt-9 mb-9">
        <div class="col-12 col-md-6 col-lg-8 mb-4">
            <div class="card rounded-3 shadow">
                <div class="card-title px-4 pt-4">
                    <p class="fw-semibold text-gray fs-6 mb-0">Chart</p>
                </div>
                <div class="card-content p-6 mb-5">
                    <div style="width: 100%; height: 263px;">
                        <canvas id="userChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card rounded-3 shadow">
                <div class="card-title text-center px-4 pt-4">
                    <p class="fw-semibold text-gray fs-6 mb-0">Browser Usage</p>
                </div>
                <div class="card-content p-4">
                    <div style="width: 80%; margin: 0 auto;">
                        <canvas id="browserUsage"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // PIE CHART
        document.addEventListener('DOMContentLoaded', function () {
          const cbu = document.getElementById('browserUsage').getContext('2d');

          const browserUsage = new Chart(cbu, {
            type: 'pie',
            data: {
              labels: ['Chrome', 'Edge', 'Firefox', 'Other'],
              datasets: [{
                label: 'Customer Satisfaction',
                data: [30, 25, 10, 15], // Contoh data persentase
                backgroundColor: [
                  '#91CC75', // CHROME
                  '#73C0DE', // Kuning
                  '#FAC858', // Merah
                  '#EE6666'  // Hijau
                ],
                borderColor: [
                  '#FDFDFD'
                ],
                borderWidth: 3
              }]
            },
            options: {
              responsive: true, // Membuat chart responsif
              maintainAspectRatio: false, // Memungkinkan pengaturan aspek rasio
              cutoutPercentage: 50, // Mengatur ukuran lubang di tengah doughnut
              plugins: {
                legend: {
                  display: true, // Menampilkan legenda
                  position: 'bottom' // Posisi legenda di bawah chart
                },
                tooltip: {
                  callbacks: {
                    label: function(context) {
                      const label = context.label || '';
                      const value = context.formattedValue || '';
                      return `${label}: ${value}%`; // Menampilkan persentase pada tooltip
                    }
                  }
                }
              }
            }
          });
        });

       // LINE CHART
        document.addEventListener('DOMContentLoaded', function () {
            const clu = document.getElementById('userChart');

            new Chart(clu, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Sales',
                        data: [2000, 1800, 1900, 2100, 2500, 2300, 2600, 2500, 2800, 3400, 3000, 3200],
                        borderColor: '#206400', // Warna garis hijau
                        borderWidth: 3, // Ketebalan garis lebih tebal
                        pointBackgroundColor: 'white', // Warna titik putih
                        pointBorderColor: '#085000', // Warna border titik biru
                        pointRadius: 2, // Ukuran titik
                        fill: false,
                        tension: 0.4,
                        lineCap: 'round' // Ujung garis membulat
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    size: 14, // Ukuran font label x
                                    family: 'Arial' // Contoh font, ganti sesuai keinginan
                                },
                                color: '#333' // Warna label x lebih gelap
                            }
                        },
                        y: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    size: 14, // Ukuran font label y
                                    family: 'Arial' // Contoh font, ganti sesuai keinginan
                                },
                                stepSize: 1000,
                                color: '#333' // Warna label y lebih gelap
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        });
    </script>
@endsection
