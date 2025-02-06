<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baitullah Analytics</title>

    {{-- WEB ICON --}}
    <link rel="website icon" href="{{ asset('assets/images/logo/Logo Baitullah.png') }}">

    {{-- FASTBOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- INTERNAL CSS --}}
    <style>
        body {
            overflow-x: hidden;
        }
        .sidebar {
            width: 230px;
            background-color: #F8F8F8;
            padding: 20px;
            transition: all 0.3s;
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            overflow-y: auto;
        }
        .nav-link {
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 8px;
            color: #555;
            transition: 0.3s;
            text-decoration: none; /* Remove underline from links */
        }
        .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        .nav-link:hover {
            background-color: #e0e7ff;
            color: #053600;
        }
        .nav-link.active {
            color: #053600;
            font-weight: bold;
            border-left: 4px solid #085000;
            padding-left: 14px;
        }
        .search-box {
            background-color: #F8F8F8;
            width: 200px;
        }
        .search-box input {
            border: none;
            background: none;
            outline: none;
            width: 100%;
            padding-left: 10px;
        }
        .search-box i { color: gray; }
        .btn-time {
            border-radius: 12px;
            border: none;
            border-color: gray;
            background-color: white
            outline: gray;
            color: gray;
            cursor: pointer;
        }
        .main-content {
            flex: 1;
            padding: 20px;
            margin-left: 240px;
            margin-right: 10px;
            width: calc(100% - 260px);
        }
        .card { background-color: #fcfcfc; border: none; }
        .toggle-btn { display: none; }
        .text-gray { color: gray; }
        .text-black { color: black; }
        .text-plus { color: #00bd48}
        .text-minus { color: rgb(218, 0, 0)}

        @media (max-width: 1150px) {
            .sidebar {
                left: -260px;
            }
            .sidebar.active {
                left: 0;
            }
            .toggle-btn {
                display: block;
                position: absolute;
                top: 10px;
                left: 10px;
                font-size: 24px;
                background: none;
                border: none;
                cursor: pointer;
            }
            .main-content {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
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
                <li class="nav-item"><a href="{{ route('BCI.analytics.dashboard') }}" class="nav-link active"><i class="fas fa-th-large"></i>Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('BCI.analytics.notifikasi') }}" class="nav-link text-gray"><i class="fas fa-bell"></i>Notification</a></li>
            </ul>

            {{-- KATEGORI NAVIGASI ANALYTICS --}}
            <p class="fw-semibold fs-sm text-gray mt-8 px-2">Analytics</p>
            <ul class="nav flex-column gap-2">
                <li class="nav-item"><a href="#" class="nav-link text-gray"><i class="fas fa-th-large"></i>Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-gray"><i class="fas fa-cogs"></i>Application</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-gray"><i class="fas fa-users"></i>Monitoring</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-gray"><i class="fas fa-chart-line"></i>Report</a></li>
            </ul>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-content mt-4">
                <div class="content-nav d-flex justify-content-between">
                    {{-- TITLE --}}
                    <div class="content-title d-flex align-items-end gap-3">
                        <h2 class="fw-semibold fs-2 text-black">@yield('title')</h2>

                        {{-- KATEGORI WAKTU --}}
                        <div class="dropdown">
                            <button class="btn-time dropdown-toggle fs-xs px-3 py-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              This Month
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a class="dropdown-item text-black" href="#">1 Bulan Terakhir</a></li>
                              <li><a class="dropdown-item text-black" href="#">3 Bulan Terakhir</a></li>
                              <li><a class="dropdown-item text-black" href="#">1 Tahun Terakhir</a></li>
                            </ul>
                        </div>
                    </div>

                    {{-- KATEGORI WEB/APK --}}
                    <div class="content-title d-flex align-items-center gap-4">
                        <div class="app-category">
                            <h6 class="fw-semibold fs-xs text-end text-gray mb-0">Opened Now</h6>
                            <div class="app-name d-flex gap-2">
                                <img src="{{ asset('assets/images/logo/Logo Baitullah.png') }}" alt="Logo Baitullah" width="20" height="20">
                                <p class="fw-semibold text-black fs-6 mb-0">@yield('app-name')</p>
                            </div>
                        </div>

                        {{-- SEARCH BOX --}}
                        <div class="search-box d-flex align-items-center px-2 py-2 rounded-3">
                            <input type="text" id="searchInput" placeholder="Search">
                            <i class="fas fa-search fa-xs px-3"></i>
                        </div>
                    </div>

                </div>
            </div>

            {{-- CONTENT --}}
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <script type="module" src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    @stack('script')
</body>
</html>
