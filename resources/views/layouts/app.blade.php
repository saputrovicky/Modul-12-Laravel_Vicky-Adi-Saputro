<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BPS Provinsi Yogyakarta')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header text-white">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <span class="navbar-brand fw-bold d-flex align-items-center gap-2">
                    <img src="/images/logo-bps.webp" alt="Logo" class="brand-logo">
                    BPS PROVINSI YOGYAKARTA
                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('publikasi.index') ? 'active' : '' }}" href="{{ route('publikasi.index') }}">Publikasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('publikasi.create') ? 'active' : '' }}" href="{{ route('publikasi.create') }}">Tambah Publikasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

    <footer class="site-footer text-white text-center py-3">
        Copyright 2026 <br>
        BPS Provinsi Daerah Istimewa Yogyakarta <br>
        Jl. Brawijaya Tamantirto Kasihan Bantul 55183 <br>
        E-mail : yogyakarta@bps.go.id <br>
        <i>Created by Vicky Adi Saputro (<a class="text-white" href="mailto:222413798@stis.ac.id">222413798@stis.ac.id</a>)</i>
    </footer>
</body>
</html>
