@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title', 'Dashboard')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('app-name', 'baitullah.co.id')

@section('content')
    <h6 class="section-title fw-semisemibold text-black fs-5 mt-7">Overview</h6>

    {{-- SECTION - 1 --}}
    <div class="row mt-7">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4 col-lg-3 mb-5">
                    {{-- CARD --}}
                    <div class="card p-4 mb-6 rounded-3 shadow">
                        <div class="card-title d-flex justify-content-between">
                            <div class="title">
                                <p class="text-gray fs-xs mb-0">This Month</p>
                                <h6 class="text-black fs-6 mb-0">Audience</h6>
                            </div>
                            <div>
                                <i class="fa-solid fa-users px-1 text-black"></i>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="total text-black">
                                <h4 class="fw-semisemibold fs-2">2000</h4>
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="percentage text-black">
                                        <p class="text-black fs-sm fw-normal mb-0">
                                            <span class="text-plus fw-semisemibold"><i class="fa-solid fa-arrow-trend-up"></i> +20%</span>
                                                vs last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-5">
                    {{-- CARD --}}
                    <div class="card p-4 mb-5 rounded-3 shadow">
                        <div class="card-title d-flex justify-content-between">
                            <div class="title">
                                <p class="text-gray fs-xs mb-0">This Month</p>
                                <h6 class="text-black fs-6 mb-0">Audience</h6>
                            </div>
                            <div>
                                <i class="fa-solid fa-users px-1 text-black"></i>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="total text-black">
                                <h4 class="fw-semisemibold fs-2">2000</h4>
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="percentage text-black">
                                        <p class="text-black fs-sm fw-normal mb-0">
                                            <span class="text-plus fw-semisemibold"><i class="fa-solid fa-arrow-trend-up"></i> +20%</span>
                                                vs last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-5">
                    {{-- CARD --}}
                    <div class="card p-4 mb-6 rounded-3 shadow">
                        <div class="card-title d-flex justify-content-between">
                            <div class="title">
                                <p class="text-gray fs-xs mb-0">This Month</p>
                                <h6 class="text-black fs-6 mb-0">Audience</h6>
                            </div>
                            <div>
                                <i class="fa-solid fa-users px-1 text-black"></i>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="total text-black">
                                <h4 class="fw-semisemibold fs-2">2000</h4>
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="percentage text-black">
                                        <p class="text-black fs-sm fw-normal mb-0">
                                            <span class="text-plus fw-semisemibold"><i class="fa-solid fa-arrow-trend-up"></i> +20%</span>
                                                vs last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-5">
                    {{-- CARD --}}
                    <div class="card p-4 mb-5 rounded-3 shadow">
                        <div class="card-title d-flex justify-content-between">
                            <div class="title">
                                <p class="text-gray fs-xs mb-0">This Month</p>
                                <h6 class="text-black fs-6 mb-0">Audience</h6>
                            </div>
                            <div>
                                <i class="fa-solid fa-users px-1 text-black"></i>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="total text-black">
                                <h4 class="fw-semisemibold fs-2">2000</h4>
                                <div>
                                    <div class="percentage text-black">
                                        <p class="text-black fs-sm fw-normal mb-0">
                                            <span class="text-plus fw-semisemibold"><i class="fa-solid fa-arrow-trend-up"></i> +20%</span>
                                                vs last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-5">
                    {{-- CARD --}}
                    <div class="card p-4 mb-5 rounded-3 shadow">
                        <div class="card-title d-flex justify-content-between">
                            <div class="title">
                                <p class="text-gray fs-xs mb-0">This Month</p>
                                <h6 class="text-black fs-6 mb-0">Audience</h6>
                            </div>
                            <div>
                                <i class="fa-solid fa-users px-1 text-black"></i>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="total text-black">
                                <h4 class="fw-semisemibold fs-2">2000</h4>
                                <div>
                                    <div class="percentage text-black">
                                        <p class="text-black fs-sm fw-normal mb-0">
                                            <span class="text-plus fw-semisemibold"><i class="fa-solid fa-arrow-trend-up"></i> +20%</span>
                                                vs last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CHART --}}
        <div class="col-lg-4">
            <div class="card shadow p-4 mb-5 rounded-3 shadow">
                <div class="card-body">
                    <h6 class="text-muted">Total All User</h6>

                    <!-- TABS -->
                    <ul class="nav nav-pills mb-3" id="userTabs">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#daily">Daily</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#monthly">Monthly</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#yearly">Yearly</button>
                        </li>
                    </ul>

                    <!-- TAB CONTENT -->
                    <div class="tab-content text-black">
                        <div class="tab-pane fade show active" id="daily">
                            <h1 class="fw-semibold display-4">4678 <span class="fs-5">User</span></h1>
                            <p class="text-success fw-semibold">
                                <span class="fs-5">+40.12%</span> than last week
                            </p>
                        </div>
                        <div class="tab-pane fade" id="monthly">
                            <h1 class="fw-semibold display-4">15,230 <span class="fs-5 text-muted">User</span></h1>
                            <p class="text-success fw-semibold">
                                <span class="fs-5">+25.80%</span> than last month
                            </p>
                        </div>
                        <div class="tab-pane fade" id="yearly">
                            <h1 class="fw-semibold display-4">120,500 <span class="fs-5 text-muted">User</span></h1>
                            <p class="text-danger fw-semibold">
                                <span class="fs-5">-5.30%</span> than last year
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION - 2 --}}
    <div class="row mt-7">
        {{-- CALENDAR --}}
        <div class="col-md-3">
            <div class="card rounded-3 shadow">
                <div class="card-title">

                </div>
            </div>
        </div>

       {{-- MAPS --}}
        <div class="col-md-6">
            <div class="card rounded-3 shadow">
                <div class="card-title">

                </div>
            </div>
        </div>

        {{-- BROWSER --}}
        <div class="col-md-3">
            <div class="card rounded-3 shadow">
                <div class="card-title">

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
                datasets: [{
                    label: 'Jumlah Penjualan',
                    data: [65, 59, 80, 81, 56],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

@endsection
