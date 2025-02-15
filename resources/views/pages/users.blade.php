@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Users Monitoring')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
@section('app-name', 'baitullah.co.id')

@section('content')
    {{-- SECTION 1 --}}
    <h6 class="section-title fw-semisemibold text-black fs-5 mt-14">Overview</h6>
    <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-4">
            <x-monitoring-card icon="fa-user" title="Total Visitors" href="" icon="fa-up-right-from-square" value="376K" content="" percentage="12%" />
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <x-monitoring-card icon="fa-user" title="Visitors is Active" href="" icon="fa-up-right-from-square" value="149" content="User" percentage="12%" />
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <x-monitoring-card icon="fa-user" title="Traffic Website" href="" icon="fa-up-right-from-square" value="6" content="Type" percentage="12%" />
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <x-monitoring-card icon="fa-user" title="Visit Time (m)" href="" icon="fa-up-right-from-square" value="13" content="Minute" percentage="12%" />
        </div>

        <div class="col-12 col-sm-12 col-md-4">
            <x-monitoring-card icon="fa-user" title="Duration of Visit (m)" href="" icon="fa-up-right-from-square" value="10" content="minute" percentage="12%" />
        </div>
    </div><hr class="my-2">

    {{-- SECTION 2 --}}
    <div class="row mt-7 mb-9">
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


    <div class="row mt-4">
        <div class="col-12">
            <div class="card p-3">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-center">Email</th>
                                <th class="text-start">Username</th>
                                <th class="text-center">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td class="d-flex align-items-center">
                                    <span class="avatar"><i class="fas fa-user"></i></span>
                                    <div class="ps-6">
                                        <span>markotto@email.com</span><br>
                                        <small>Added: 01/03/2020</small>
                                    </div>
                                </td>
                                <td>Markotto89</td>
                                <td class="status"><span class="active">Active</span></td>
                                <td>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                '#006116',
                '#b98a00',
                '#998a5f',
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
