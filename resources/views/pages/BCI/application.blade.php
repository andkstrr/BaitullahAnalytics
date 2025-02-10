@extends('layouts.app')

@section('title-page', 'Application')
@section('site-code-app', 'BCI')
@section('app-name', 'baitullah.co.id')

@section('content')
    {{-- SECTION 1 --}}
    <h6 class="section-title fw-semisemibold text-black fs-5 mt-14">Overview</h6>
    <div class="row mt-4">
        {{-- LEFT COL --}}
        <div class="col-12 col-sm-6 col-md-4">
            {{-- CARD --}}
            <div class="card rounded-3 shadow">
                <div class="card-title px-4 pt-4">
                    <h5 class="fw-semibold fs-sm text-gray">Today's</h5>
                    <h5 class="fw-semibold fs-5 text-black">Page Views</h5>
                    <div class="value mt-3">
                        <h2 class="fw-medium display-4 text-black">1,500</h2>
                        <p class="text-black fs-sm fw-normal mb-0">
                            <span class="text-plus fw-semibold">
                                <i class="fa-solid fa-angles-up"></i> {{ $percentage ?? '0%' }}
                            </span> more than yesterday
                        </p>
                    </div>
                </div><hr>
                <div class="card-content px-4 py-4">
                    {{-- ITEM 1 --}}
                    <div class="item">
                        <div class="d-flex justify-content-between">
                            <div class="item d-flex align-items-center gap-2 mb-3">
                                <div class="icon-container"><i class="fas fa-user fa-sm"></i></div>
                                <h6 class="text-black fw-semibold fs-sm mb-0">Users</h6>
                            </div>
                            <p class="text-plus">
                                <i class="fa-solid fa-angles-up"></i> 5300
                            </p>
                        </div>
                    </div>

                    {{-- ITEM 2 --}}
                    <div class="item">
                        <div class="d-flex justify-content-between">
                            <div class="item d-flex align-items-center gap-2 mb-3">
                                <div class="icon-container"><i class="fas fa-user fa-sm"></i></div>
                                <h6 class="text-black fw-semibold fs-sm mb-0">Users</h6>
                            </div>
                            <p class="text-plus">
                                <i class="fa-solid fa-angles-up"></i> 5300
                            </p>
                        </div>
                    </div>

                    {{-- ITEM 3 --}}
                    <div class="item">
                        <div class="d-flex justify-content-between">
                            <div class="item d-flex align-items-center gap-2 mb-3">
                                <div class="icon-container"><i class="fas fa-user fa-sm"></i></div>
                                <h6 class="text-black fw-semibold fs-sm mb-0">Users</h6>
                            </div>
                            <p class="text-plus">
                                <i class="fa-solid fa-angles-up"></i> 5300
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- RIGHT COL --}}
        <div class="col-12 col-sm-6 col-md-8">
            <div class="card p-4 rounded-3 shadow">
                <div class="card-title">
                    <h5 class="fw-semibold fs-sm text-gray">Today's</h5>
                    <h5 class="fw-semibold fs-5 text-black">Activities</h5>
                </div>
                <div class="card content">
                    <div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="card bg-white p-4 rounded-3 shadow">
                                    <div class="card-content d-flex align-items-start gap-3">
                                        <div class="icon-container mt-2">
                                            <i class="fas fa-user fa-sm"></i>
                                        </div>
                                        <div>
                                            <h5 class="text-black fs-2 fw-semibold mb-0">234</h5>
                                            <p class="fs-6 fw-normal text-black mb-0">Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="card bg-white p-4 rounded-3 shadow">
                                    <div class="card-content d-flex align-items-start gap-3">
                                        <div class="icon-container mt-2">
                                            <i class="fas fa-user fa-sm"></i>
                                        </div>
                                        <div>
                                            <h5 class="text-black fs-2 fw-semibold mb-0">234</h5>
                                            <p class="fs-6 fw-normal text-black mb-0">Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="card bg-white p-4 rounded-3 shadow">
                                    <div class="card-content d-flex align-items-start gap-3">
                                        <div class="icon-container mt-2">
                                            <i class="fas fa-user fa-sm"></i>
                                        </div>
                                        <div>
                                            <h5 class="text-black fs-2 fw-semibold mb-0">234</h5>
                                            <p class="fs-6 fw-normal text-black mb-0">Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="card bg-white p-4 rounded-3 shadow">
                                    <div class="card-content d-flex align-items-start gap-3">
                                        <div class="icon-container mt-2">
                                            <i class="fas fa-user fa-sm"></i>
                                        </div>
                                        <div>
                                            <h5 class="text-black fs-2 fw-semibold mb-0">234</h5>
                                            <p class="fs-6 fw-normal text-black mb-0">Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-5">
                        <div class="chart" style="height: 200px; width: 150px">
                            <canvas id="appChart"></canvas>
                        </div>
                        <div class="bar">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

        const cbu = document.getElementById('appChart').getContext('2d');

        const appChart = new Chart(cbu, {
          type: 'doughnut',
          data: {
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
    </script>
@endsection
