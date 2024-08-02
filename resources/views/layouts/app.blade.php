<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png"/>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @yield('styles')
    <style>
        /* Light theme */
        body.light {
            background-color: #ffffff;
            color: #333333;
        }
        body.light .navbar {
            background-color: #f8f9fa !important;
        }
        body.light .navbar .nav-link,
        body.light .navbar .navbar-brand {
            color: #333333 !important;
        }

        /* Dark theme */
        body.dark {
            background-color: #111827;
            color: #ffffff;
        }
        body.dark .navbar {
            background-color: #1f2937 !important;
        }
        body.dark .navbar .nav-link,
        body.dark .navbar .navbar-brand {
            color: #ffffff !important;
        }
        body.dark .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Auto theme */
        @media (prefers-color-scheme: dark) {
            body.auto {
                background-color: #111827;
                color: #333333;
            }
            body.auto .navbar {
                background-color: #1f2937 !important;
            }
            body.auto .navbar .nav-link,
            body.auto .navbar .navbar-brand {
                color: #ffffff !important;
            }
        }

        /* Transitions */
        body, .navbar, .nav-link {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>
<body class="light"> <!-- Default to light mode -->
    <!-- Include Navbar -->
    @include('layouts.navbar')

    <!-- Main Content -->
    <div class="container mt-5 pt-4">
        @yield('content')
    </div>

    <!-- Scripts -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    @yield('scripts')
</body>
</html>
