@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Dashboard')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
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
                    <x-dashboard-card title="Audience" value="1,500" percentage="12%" />
                </div>

                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Visitors" value="1,500" percentage="12%" />
                </div>

                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Merchant" value="1,500" percentage="12%" />
                </div>

                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Page Views" value="1,500" percentage="12%" />
                </div>

                {{-- CARD --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Traffic" value="1,500" percentage="12%" />
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
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 mb-4">
            <div class="card rounded-3 shadow">
                <div class="card-title px-4 pt-4">
                    <p class="fw-semibold text-gray fs-6 mb-0">Activities</p>
                </div>
                <div class="card-content p-6 mb-5">
                    <x-line-chart />
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4 mb-4">
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
        document.addEventListener('DOMContentLoaded', function () {
          const cbu = document.getElementById('browserUsage').getContext('2d');

          const browserUsage = new Chart(cbu, {
            type: 'pie',
            data: {
              labels: ['Chrome', 'Edge', 'Firefox', 'Other'],
              datasets: [{
                label: 'Customer Satisfaction',
                data: [30, 25, 10, 15],
                backgroundColor: [
                  '#036222',
                  '#01A23B',
                  '#68DA6B',
                  '#79CB79'
                ],
                borderColor: [
                  '#FDFDFD'
                ],
                borderWidth: 3
              }]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              cutoutPercentage: 50, // ukuran lubang di tengah doughnut
              plugins: {
                legend: {
                  display: true,
                  position: 'bottom'
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
