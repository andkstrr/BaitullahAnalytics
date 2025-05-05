@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Location')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
@section('app-name', 'baitullah.co.id')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h6 class="section-title fw-semibold text-black fs-5">Overview</h6>

        {{-- SEARCH DAN FILTER --}}
        <div class="d-flex justify-content-end align-items-center" style="gap: 10px;">
            <div class="search-box btn btn-outline-default d-flex align-items-center px-2 py-2 rounded-3">
                <i class="fas fa-search px-1"></i>
                <input type="text" id="searchInput" name="search_name" value="{{ request('search_name') }}" placeholder="Merchant Name" class="text-black">
            </div>

            <div class="dropdown">
                <button class="btn btn-outline-default rounded-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 50px; height: 40px;" title="Filter Status">
                    <i class="ri-filter-3-line fs-4 text-black"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" onclick="filterMarkers('all')">View All</a></li>
                    <li><a class="dropdown-item" onclick="filterMarkers('not')">Not Verified</a></li>
                    <li><a class="dropdown-item" onclick="filterMarkers('pending')">Pending</a></li>
                    <li><a class="dropdown-item" onclick="filterMarkers('merchant')">Merchant</a></li>
                </ul>
            </div>

            <a href="{{ route('analytics.merchant.location') }}" class="btn btn-outline-default" style="width: 50px; height: 40px;" title="Reset Filters">
                <i class="fa-solid fa-rotate my-1"></i>
            </a>
        </div>
    </div>

    </div>
    <div class="row mt-4">
        <div class="col-12 col sm-6 col-md-4">
            <x-monitoring-card title="Not Merchant" href="{{ route('analytics.monitoring.users') }}" icon="fa-users-line" value="{{ number_format($notMerchant) }}" content="" percentage="12%" />
        </div>

        <div class="col-12 col sm-6 col-md-4">
            <x-monitoring-card title="Pending Merchant" href="" icon="fa-users-line" value="{{ number_format($pendingMerchant) }}" content="" percentage="12%" />
        </div>

        <div class="col-12 col sm-6 col-md-4">
            <x-monitoring-card title="Active Merchant" href="{{ route('analytics.monitoring.application') }}" icon="fa-users-line" value="{{ number_format($activeMerchant) }}" content="" percentage="12%" />
        </div>
    </div>
    <hr class="my-3">

    <div id="map" class="rounded-3 my-8" style="height: 60vh"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        let map = L.map('map').setView([-2.5489, 118.0149], 5); // indonesia

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        // ICONS COLOR
        const iconRed = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
            shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        const iconYellow = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-yellow.png',
            shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        const iconGreen = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
            shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        // DATA
        let merchants = @json($merchants);
        let allMarkers = [];
        let markersLayer = new L.LayerGroup();
        map.addLayer(markersLayer);

        merchants.forEach(merchant => {
            if (merchant.latitude && merchant.longitude) {
                let icon = iconRed;

                if (merchant.isMerchant === 'pending') icon = iconYellow;
                else if (merchant.isMerchant === 'merchant') icon = iconGreen;

                let marker = L.marker([merchant.latitude, merchant.longitude], {
                        icon: icon,
                        status: merchant.isMerchant
                    })
                    .bindPopup(`
                        <strong>${merchant.name}</strong><br><br>
                        Kota : ${merchant.city_name}<br>
                        Status : ${merchant.isMerchant == 'not' ? 'Not Merchant' :
                                  (merchant.isMerchant == 'pending' ? 'Pending' :
                                  (merchant.isMerchant == 'merchant' ? 'Merchant' :
                                  'Unknown'))}<br>
                        PPIU : ${merchant.ppiu ?? '-'}<br>
                        PIHK : ${merchant.pihk ?? '-'}<br>
                        Contact : ${merchant.contact ?? '-'}
                    `);

                // Simpan nama travel untuk pencarian
                marker.travelName = merchant.name.toLowerCase();

                allMarkers.push(marker);
                markersLayer.addLayer(marker);
            }
        });

        // Fungsi filter
        function filterMarkers(status) {
            markersLayer.clearLayers();

            allMarkers.forEach(marker => {
                if (status === 'all' || marker.options.status === status) {
                    markersLayer.addLayer(marker);
                }
            });
        }

        // Fungsi pencarian manual
        document.getElementById('searchInput').addEventListener('keyup', function (e) {
            if (e.key === 'Enter') {
                const query = this.value.toLowerCase();

                const matchedMarkers = allMarkers.filter(marker => marker.travelName.includes(query));

                if (matchedMarkers.length > 0) {
                    markersLayer.clearLayers();

                    matchedMarkers.forEach(marker => {
                        markersLayer.addLayer(marker);
                    });

                    // map.setView(matchedMarkers[0].getLatLng(), 12); // Fokus ke salah satu marker
                } else {
                    alert('Travel tidak ditemukan.');
                }

            }
        });
    </script>
@endsection
