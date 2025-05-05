<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baitullah Analytics</title>

    {{-- WEB ICON --}}
    <link rel="website icon" href="{{ asset('assets/images/logo/' . View::yieldContent('pict')) }}">

    {{-- FASTBOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- REMIX ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">

    {{-- LEAFLET MAPS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-search@2.9.8/dist/leaflet-search.min.css" />

    {{-- AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
    <button class="toggle-btn" id="menuToggle"><i class="fas fa-bars"></i></button>
    <div class="wrapper d-flex">
        <!-- SIDEBAR -->
        <div class="sidebar" id="sidebar">
            {{-- LOGO --}}
            <img src="{{ asset('assets/images/logo/Baitullah Analytics.png') }}" alt="Baitullah Analytics" class="img-fluid" width="160">

            {{-- KATEGORI NAVIGASI GENERAL --}}
            <p class="fw-semibold fs-sm text-gray mt-7 px-2">General</p>
            <ul class="nav flex-column gap-2">
                <li class="nav-item">
                    <a href="{{ route('analytics.dashboard') }}" class="nav-link text-gray {{ request()->routeIs('analytics.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-table-columns"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('analytics.notification') }}" class="nav-link text-gray {{ request()->routeIs('analytics.notification') ? 'active' : '' }}">
                        <i class="fas fa-bell"></i> Notification
                    </a>
                </li>
            </ul>

            {{-- KATEGORI NAVIGASI ANALYTICS --}}
            <p class="fw-semibold fs-sm text-gray mt-8 px-2">Analytics</p>
            <ul class="nav flex-column gap-2">
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <!-- MONITORING -->
                        <a href="{{ route('analytics.monitoring.dashboard') }}" class="nav-link text-gray {{ request()->routeIs('analytics.monitoring.dashboard') ? 'active' : '' }}">
                            <i class="far fa-folder-open"></i> Monitoring
                        </a>
                        <!-- DROPDOWN -->
                        <button class="btn btn-link text-gray ps-7" type="button" data-bs-toggle="collapse" data-bs-target="#monitoringSubmenu" aria-expanded="false">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <!-- SUBMENU DROPDOWN -->
                    <div class="collapse mt-3" id="monitoringSubmenu">
                        <ul class="nav flex-column ps-5">
                            <li class="nav-item">
                                <a href="{{ route('analytics.monitoring.users') }}" class="nav-link mb-2 text-gray {{ request()->routeIs('analytics.monitoring.users') ? 'active' : '' }}">
                                    <i class="fas fa-users-gear"></i> Users
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('analytics.monitoring.application') }}" class="nav-link text-gray {{ request()->routeIs('analytics.monitoring.application') ? 'active' : '' }}">
                                    <i class="fas fa-house-laptop"></i> Application
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('analytics.report') }}" class="nav-link text-gray {{ request()->routeIs('analytics.report') ? 'active' : '' }}">
                        <i class="fas fa-chart-area"></i> Report
                    </a>
                </li>
            </ul>

            {{-- KATEGORI NAVIGASI MERCHANT --}}
            <p class="fw-semibold fs-sm text-gray mt-8 px-2">Merchant</p>
            <ul class="nav flex-column gap-2">
                <li class="nav-item">
                    <a href="{{ route('analytics.merchant.dashboard')}}" class="nav-link text-gray {{ request()->routeIs('analytics.merchant.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-plane-arrival"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('analytics.merchant.location')}}" class="nav-link text-gray {{ request()->routeIs('analytics.merchant.location') ? 'active' : '' }}">
                        <i class="fas fa-map-location-dot"></i> Location
                    </a>
                </li>
            </ul>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-content mt-4">
                <div class="content-nav d-flex justify-content-between">
                    {{-- TITLE --}}
                    <div class="content-title d-flex align-items-end gap-3">
                        <h2 class="fw-semibold fs-2 text-black">@yield('title-page')</h2>

                        {{-- KATEGORI WAKTU --}}
                        @if (request()->routeIs('analytics.dashboard'))
                            <h2 class="fw-semibold fs-2 text-black">
                                {{ ucwords(Auth::user()->name) }}!
                            </h2>
                        @endif
                    </div>

                    {{-- KATEGORI WEB/APK --}}
                    <div class="content-title d-flex align-items-center gap-6">
                        {{-- <div class="app-category">
                            <h6 class="fw-semibold fs-xs text-end text-gray mb-0">Opened Now</h6>
                            <div class="app-name d-flex gap-2">
                                <img src="{{ asset('assets/images/logo/' . View::yieldContent('pict')) }}" alt="App Logo" width="20" height="20">
                                <p class="fw-semibold text-black fs-6 mb-0">@yield('app-name') </p>
                            </div>
                        </div> --}}

                        <div class="dropdown text-center gap-10">
                            {{-- ICON & PROFILE SECTION --}}
                            <div class="d-flex justify-content-center gap-3 align-items-center">
                                <a href="{{ route('analytics.merchant.create') }}" class="avatar bg-green text-decoration-none"><i class="fas fa-add fa-lg"></i></a>
                                <a href="#" class="avatar bg-gray text-decoration-none"><i class="fas fa-magnifying-glass text-black"></i></a>
                                <a href="{{ route('analytics.notification') }}" class="avatar bg-gray text-decoration-none"><i class="far fa-bell fa-lg text-black"></i></a>
                                <div class="d-flex align-items-center gap-3">
                                    @if (Auth::user()->avatar)
                                        <img src="{{ asset('assets/avatar/' . Auth::user()->avatar) }}" class="avatar avatar-lg">
                                    @else
                                        <img src="{{ asset('assets/avatar/unknown.jpg') }}" class="avatar avatar-lg">
                                    @endif

                                    <div class="d-none d-md-block text-start">
                                        <p class="fw-semibold text-black fs-5 mb-0">{{ ucfirst(Auth::user()->name) }}</p>
                                        <h6 class="fw-normal fs-sm text-gray mb-0">{{ ucfirst(Auth::user()->role) }}</h6>
                                    </div>
                                </div>
                            </div>

                            {{-- CHEVRON DOWN TO TOGGLE DROPDOWN --}}
                            <a href="#" class="d-flex align-items-center text-dark text-decoration-none" id="accountDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-chevron-down"></i>
                            </a>

                            {{-- DROPDOWN MENU --}}
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}" class="dropdown-item text-danger">Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <hr class="my-5">

            {{-- CONTENT --}}
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-control-search@2.9.8/dist/leaflet-search.min.js"></script>
    <script>
        AOS.init();
    </script>

    @stack('script')
</body>
</html>
