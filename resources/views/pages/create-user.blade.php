<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-center mb-10">
            <img src="{{ asset('assets/images/logo/Baitullah Analytics.png') }}" class="img-fluid mb-10" width="200">
        </div>

        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="col-md-6 offset-md-3">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Session::get('failed'))
                <div class="alert alert-danger">{{ Session::get('failed') }}</div>
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" id="name" name="name"
                    class="form-control"
                    placeholder="Masukkan username" required />
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Role</label>
                <input type="text" id="role" name="role"
                    class="form-control"
                    placeholder="Masukkan role" required />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email"
                    class="form-control"
                    placeholder="Masukkan email" required />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password"
                    name="password"class="form-control"
                    placeholder="Masukkan password" required />
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">Avatar</label>
                <input type="file" id="avatar" name="avatar" class="form-control" />
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" name="action" value="login"
                    class="btn d-flex align-items-end btn-success">
                    Create User
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
