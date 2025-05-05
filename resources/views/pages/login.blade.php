<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baitullah Analytics</title>

    <!-- STYLE -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- WEBSITE ICON -->
    <link rel="icon" href="../assets/images/logo/logo-baitullah-01.png">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url('{{ asset('assets/images/bg/bg-login.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">

        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column -->
                <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/logo/Baitullah Analytics.png') }}" alt="Baitullah Logo" class="img-fluid w-50 mb-5">
                    <div>
                        <div class="text-top">
                            <p class="fw-semibold fs-6  text-muted">
                               Dapatkan info terbaru seputar paket, tips perjalanan, <br>
                               rekomendasi serta promo.
                            </p>
                        </div>
                        <div class="text-bottom">
                            <p class="fw-semibold fs-6 text-muted">
                                Pakai My Baitullah, umrah dan haji lebih mudah hanya dalam <br>
                                satu genggaman
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-6">
                    <div class="form-container p-5 shadow-lg rounded-3 border-3">
                        <form action={{ route('login') }} method="POST">
                            @csrf
                                <h3 class="text-center mb-4 fw-bold">Login</h3>

                                @if (Session::get('success'))
                                    <div class="alert alert-success my-3">{{ Session::get('success') }}</div>
                                @elseif (Session::get('failed'))
                                    <div class="alert alert-danger my-3">{{ Session::get('failed') }}</div>
                                @endif

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-success w-100 mb-3">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>
</html>
