<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/home/logo.png') }}" alt="ADD LIFE Logo" height="30">
            <span style="font-weight: bold;">Kawan HTML</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Hubungi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="themeDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-adjust"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="themeDropdown">
                        <a class="dropdown-item" href="#" data-theme-toggle="light">Light</a>
                        <a class="dropdown-item" href="#" data-theme-toggle="dark">Dark</a>
                        {{-- <a class="dropdown-item" href="#" data-theme-toggle="auto">Auto</a> --}}
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
