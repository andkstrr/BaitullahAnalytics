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
                {{-- CARDS --}}
                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Audience" value="1,500" percentage="12%" />
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Visitors" value="1,500" percentage="12%" />
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Merchant" value="1,500" percentage="12%" />
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <x-dashboard-card title="Page Views" value="1,500" percentage="12%" />
                </div>

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
    </div><hr class="my-3">

    {{-- SECTION 2 --}}
    <div class="row mt-7 mb-9">
        {{-- LEFT COL --}}
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            {{-- CALENDAR --}}
            <div class="card-body">
                <div class="card calendar p-4 rounded-3 shadow">
                    <div class="header-calendar d-flex justify-content-between align-items-center">
                        <button id="prevBtn" class="btn btn-light rounded-circle shadow-sm">
                            <i class="fas fa-chevron-left fa-sm"></i>
                        </button>
                        <div class="monthYear fw-bold text-center flex-grow-1" id="monthYear"></div>
                        <button id="nextBtn" class="btn btn-light rounded-circle shadow-sm">
                            <i class="fas fa-chevron-right fa-sm"></i>
                        </button>
                    </div>
                    <div class="days row row-cols-7 mb-5 text-center fw-semibold fs-sm">
                        <div class="col">Sun</div>
                        <div class="col">Mon</div>
                        <div class="col">Tue</div>
                        <div class="col">Wed</div>
                        <div class="col">Thu</div>
                        <div class="col">Fri</div>
                        <div class="col">Sat</div>
                    </div>
                    <div class="dates row row-cols-7 g-1 text-center" id="dates"></div>
                </div>
            </div>
        </div>

        {{-- CENTER COL --}}
        <div class="col-12 col-md-12 col-lg-4 mb-4">
            {{-- MAPS --}}
            <div class="card p-6 rounded-3 shadow h-100">
                <div class="card-title d-flex justify-content-between text-black">
                    <div class="fw-semibold fs-6">Real Time</div>
                    <div id="clock"><h6 id="date-time"></h6></div>
                </div>
                <div class="card-content">

                </div>
            </div>
        </div>

        {{-- RIGHT COL --}}
        <div class="col-12 col-md-12 col-lg-4 mb-4">
            <div class="card-content">
                <x-pie-chart />
            </div>
        </div>
    </div>

    <script>
        // Inisialisasi Peta
var map = L.map('map').setView([20, 0], 2); // Posisi awal

// Tambahkan TileLayer (Peta Dasar)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

// Data Dummy (Bisa Diganti dengan Data dari Database)
var locations = [
    { lat: 37.7749, lng: -122.4194 }, // San Francisco
    { lat: 48.8566, lng: 2.3522 }, // Paris
    { lat: -1.2921, lng: 36.8219 }, // Nairobi
    { lat: 35.6895, lng: 139.6917 }, // Tokyo
    { lat: -33.8688, lng: 151.2093 } // Sydney
];

// Tambahkan Marker ke Peta
locations.forEach(function(loc) {
    L.marker([loc.lat, loc.lng]).addTo(map);
});

    </script>
@endsection
