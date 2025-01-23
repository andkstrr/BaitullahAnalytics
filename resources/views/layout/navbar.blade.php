<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baitullah Analytics</title>

    {{-- WEB ICON --}}
    <link rel="website icon" href="{{ asset('assets/images/logo/Logo Baitullah.png')}}">

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    {{-- FASTBOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color: #f1f1f1f1">
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-white p-3 shadow-lg">
        <div class="container">
            <a class="navbar-brand">
                <img src="{{ asset('assets/images/logo/Baitullah Analytics.png')}}" width="150" alt="Logo" />
            </a>
            <ul class="navbar-nav">
                <li class="nav-item gap-3">
                    <a href="#" class="nav-link position-relative">
                        <span class="badge position-absolute top-0 end-0 text-bg-danger">5</span>
                        <span><i class="fa-regular fa-bell fa-xl" style="color: #000000;"></i></span>
                    </a>
                    <a href="#" class="nav-link">
                        <img src="{{ asset('assets/images/icon/Burger Nav.jpg')}}" width="40" alt="Nav Burger"></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- SECTION CONTENT --}}
    <div class="section py-16">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @stack('script')
</body>
</html>
