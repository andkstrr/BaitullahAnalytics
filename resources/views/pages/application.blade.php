@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Application')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
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
                        <p class="text-black fs-6 fw-normal mb-0">
                            <span class="text-plus fw-semibold">
                                <i class="fas fa-angles-up"></i> {{ $percentage ?? '0%' }}
                            </span> more than yesterday
                        </p>
                    </div>
                </div><hr>
                <div class="card-content px-4 py-4">
                    {{-- ITEM 1 --}}
                    <x-application-statisctic />

                    {{-- ITEM 2 --}}
                    <x-application-statisctic />

                    {{-- ITEM 3 --}}
                    <x-application-statisctic />

                    {{-- ITEM 4 --}}
                    <x-application-statisctic />
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card content">
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-3">
                                        <x-application-card />
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3">
                                        <x-application-card />
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3">
                                        <x-application-card />
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-3">
                                        <x-application-card />
                                    </div>
                                </div>

                                <div class="row mt-6">
                                    <div class="col-12 col-md-3">
                                        <div class="chart-container">
                                            <canvas id="appChart" style="height: 179px;"></canvas>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-9">
                                        <div class="progress-container mt-5">
                                            <x-application-activities title="Visitors" widthBar="90px" bgColor="00531E" value="234" />
                                            <x-application-activities title="Visitors" widthBar="260px" bgColor="027C29" value="550" />
                                            <x-application-activities title="Visitors" widthBar="210px" bgColor="00B03F" value="350" />
                                            <x-application-activities title="Visitors" widthBar="300px" bgColor="00C647" value="798" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script>
        // CHART DOUGHNUT
        document.addEventListener('DOMContentLoaded', function () {

        const cbu = document.getElementById('appChart').getContext('2d');

        const appChart = new Chart(cbu, {
          type: 'doughnut',
          data: {
            datasets: [{
              label: 'Customer Satisfaction',
              data: [30, 15, 10], // data persentase
              backgroundColor: [
                '#036222',
                '#01A23B',
                '#79CB79',
              ],
            }]
          },
          options: {
            responsive: true, // Membuat chart responsif
            maintainAspectRatio: false, // Memungkinkan pengaturan aspek rasio
            cutoutPercentage: 50, // Mengatur ukuran lubang di tengah doughnut
            plugins: {
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
