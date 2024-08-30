<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Inisialisasi 2024</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('inis/images/logoangkatan.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('inis/images/logoangkatan.png') }}" type="image/png">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Log in</h1>
                    <p class="auth-subtitle mb-5">Log in dengan NIM yang telah diberikan oleh Pendamping Kelompok masing
                        - masing.</p>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="login" class="form-control form-control-xl"
                                placeholder="Email / NIM" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl"
                                placeholder="Password (if you have one)">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-2">Log in</button>
                    </form>


                    <div class="content text-center">
                        <p class="mt-3">Atau</p>
                        <p class="mt-3"><a href="/login-maba">Saya adalah mahasiswa baru</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <img src="{{ asset('inis/images/IMG_3526.jpg') }}" alt="foto" style="height: 100vh">
                    {{-- <img src="{{ asset('inis/images/IMG_3526.jpg') }}" alt="foto" style="height: 130vh"> --}}
                </div>
            </div>
        </div>

    </div>
</body>

</html>
