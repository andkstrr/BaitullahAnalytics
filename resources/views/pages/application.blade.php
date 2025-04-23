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
        <div class="col-12 col-sm-12 col-md-3">
            {{-- CARD --}}
            <x-application-card title="Total Visitors" href="{{ route('analytics.monitoring.users') }}" icon="fa-up-right-from-square" content="" value="1,500" percentage="12%" />
        </div>

        <div class="col-12 col-sm-12 col-md-3">
            {{-- CARD --}}
            <x-application-card title="Total Visitors" href="{{ route('analytics.monitoring.users') }}" icon="fa-up-right-from-square" content="" value="1,500" percentage="12%" />
        </div>

        <div class="col-12 col-sm-12 col-md-3">
            {{-- CARD --}}
            <x-application-card title="Total Visitors" href="{{ route('analytics.monitoring.users') }}" icon="fa-up-right-from-square" content="" value="1,500" percentage="12%" />
        </div>

        <div class="col-12 col-sm-12 col-md-3">
            {{-- CARD --}}
            <x-application-card title="Total Visitors" href="{{ route('analytics.monitoring.users') }}" icon="fa-up-right-from-square" content="" value="1,500" percentage="12%" />
        </div>
    </div><hr class="my-3">

    {{-- SECTION 2 --}}
    <div class="row mt-4">
        <div class="col-12 col sm-6 col-md-8">
            <div class="card rounded-3 shadow">
                <div class="card-title px-5 pt-4">
                    <div class="d-flex justify-content-between align-items center">
                        <div><p class="fw-semibold text-gray fs-5 mb-0">Activities</p></div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />
                                <label class="label" for="flexRadioDefault1">Daily</label>
                            </div>
                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                <label class="label" for="flexRadioDefault2">Monthly</label>
                            </div>
                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                                <label class="label" for="flexRadioDefault3">Yearly</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-content p-6 mb-5">
                    <x-line-chart />
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <x-tab-content
                title="Top Accumulated"
                object=""
                href=""
                icon="fa-user"
                information=""
                :tabs="[
                    'Daily' => ['label' => 'Page Views', 'value' => '/umroh-plus'],
                    'Traffic' => ['label' => 'Traffic', 'value' => 'Organic'],
                ]"
                :percentages="[
                    'unread' => '+5.12%',
                    'read' => '+12.30%',
                ]"
            />
        </div>
    </div>



    {{-- RIGHT COL --}}
    {{-- <div class="card p-3 rounded-3 shadow">
        <div class="d-flex align-items-center gap-3">
            <div><canvas id="appChart" width="150px" height="100px"></canvas></div>
            <div class="content">
                <div class="title fw-semibold fs-5 text-black">Top Page Views</div><br>
                <div class="subtitle">
                    <h6 class="fw-semibold fs-6 text-gray">Accumulated Visits</h6>
                    <h3 class="fw-semibold fs-3 text-black">/umroh-plus <span class="fs-xs">(13,7K)</span></h3
                </div>
            </div>
        </div>
    </div> --}}

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
