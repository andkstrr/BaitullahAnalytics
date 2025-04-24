@extends('layouts.app')

{{-- NAMA PAGE --}}
@section('title-page', 'Location')

{{-- NAMA APP/WEB ANALYTICS --}}
@section('site-code-app', 'BCI')
@section('pict', 'logo_baitullah.png')
@section('app-name', 'baitullah.co.id')

@section('content')
    {{-- <h6 class="section-title fw-semisemibold text-black fs-5 mt-14">Overview</h6> --}}
    <div id="map" class="rounded-3 mt-14" style="height: 70vh"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-search/dist/leaflet-search.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-search/dist/leaflet-search.min.css" />

    <script>
        let map = L.map('map').setView([-2.5489, 118.0149], 5);

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
        let markersLayer = new L.LayerGroup();
        map.addLayer(markersLayer);

        merchants.forEach(merchant => {
            if (merchant.latitude && merchant.longitude) {
                let icon = iconRed; // default icon

                if (merchant.isMerchant == 'pending') icon = iconYellow;
                else if (merchant.isMerchant == 'merchant') icon = iconGreen;

                let marker = L.marker([merchant.latitude, merchant.longitude], {
                        title: merchant.name,
                        icon: icon
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
                markersLayer.addLayer(marker);
            }
        });

        // SEARCH
        let searchControl = new L.Control.Search({
            layer: markersLayer,
            propertyName: 'title',
            initial: false,
            zoom: 10,
            marker: false,
            textPlaceholder: 'Cari travel...'
        });

        map.addControl(searchControl);
    </script>
@endsection
