<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <script type="text/javascript"> 
        document.onkeydown = function(e) {
            if(event.keyCode == 123) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    </script>

    <style>
        /* CSS FOR Hero */
        .hero-section {
            background-image: url('images/home/background.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-section .container {
            background-color: rgba(0,0,0,0.5);
            padding: 2rem;
            border-radius: 10px;
        }

        .hero-section h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        .hero-section .lead {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .hero-section .btn-primary {
            font-size: 1.25rem;
            padding: 0.75rem 1.5rem;
            background-color: #ff6600;
            border-color: #ff6600;
        }
        
        .hero-section .btn-primary:hover {
            background-color: #e55c00;
            border-color: #e55c00;
        }

        /* CSS FOR ABOUT */
        .about-section {
            background: linear-gradient(45deg, #f3f3f3, #ffffff);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .about-section h2 {
            color: #333;
            border-bottom: 2px solid #FF6D00;
            padding-bottom: 10px;
        }

        .feature-list {
            list-style-type: none;
            padding-left: 0;
        }

        .feature-list li {
            margin-bottom: 10px;
        }

        .feature-list i {
            color: #FF6D00;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #FF6D00;
            border-color: #FF6D00;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #E56200;
            border-color: #E56200;
            transform: translateY(-2px);
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* CSS FOR Services */
        .wrapper {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .wrapper .container {
            height: 400px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
        }
        .card {
            padding-top: 10px;
            width: 80px;
            border-radius: 2rem;
            background-size: cover;
            cursor: pointer;
            overflow: hidden;
            margin: 0 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: .6s cubic-bezier(.28,-0.03,0,.99);
            box-shadow: 0px 10px 30px -5px rgba(0,0,0,0.8);
            height: 400px;
            text-align: center;
        }
        .card > .row {
            height: auto;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 15px;
            width: 100%;
        }
        .card > .row > .icon {
            background: #FF6D00;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 0 15px 0;
        }
        .card > .row > .description {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
            height: auto;
            width: 100%;
            opacity: 0;
            transform: translateY(30px);
            transition-delay: .3s;
            transition: all .3s ease;
        }
        .description p {
            color: #b0b0ba;
            padding-top: 5px;
            margin-bottom: 5px;
            line-height: 1.3;
        }
        .description h4 {
            text-transform: uppercase;
            margin-bottom: 10px;
        }
        .description .price {
            color: #FF6D00;
            font-weight: bold;
            margin-top: 10px;
        }
        .wrapper input {
            display: none;
        }
        .wrapper input:checked + label {
            width: 400px;
        }
        .wrapper input:checked + label .description {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        .card[for="c1"] {
            background-image: url('images/home/HTMLbasic.gif');
        }
        .card[for="c2"] {
            background-image: url('images/home/HTMLpremium.gif');
        }
        .card[for="c3"] {
            background-image: url('images/home/HTMLcustom.gif');
        }
        .card[for="c4"] {
            background-image: url('images/home/HTMLportofolio.gif');
        }

        .card {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.7);
            z-index: 1;
        }

        .card .row {
            position: relative;
            z-index: 2;
        }

        /* CSS FOR TESTIMONIAL */
        .testimonial-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .testimonial-item {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .testimonial-item:hover {
            transform: translateY(-5px);
        }

        .testimonial-content {
            text-align: center;
        }

        .testimonial-content p {
            font-style: italic;
            margin-bottom: 15px;
        }

        .testimonial-content h5 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .stars {
            color: #ffc107;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/home/logo.png') }}" alt="ADD LIFE Logo" height="30">
                <span style="font-weight: bold;">Kawan HTML</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home" style="color: #333; transition: color 0.3s ease;" onmouseover="this.style.color='#ff6600'" onmouseout="this.style.color='#333'">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: #333; transition: color 0.3s ease;" onmouseover="this.style.color='#ff6600'" onmouseout="this.style.color='#333'">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" style="color: #333; transition: color 0.3s ease;" onmouseover="this.style.color='#ff6600'" onmouseout="this.style.color='#333'">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials" style="color: #333; transition: color 0.3s ease;" onmouseover="this.style.color='#ff6600'" onmouseout="this.style.color='#333'">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" style="color: #333; transition: color 0.3s ease;" onmouseover="this.style.color='#ff6600'" onmouseout="this.style.color='#333'">Hubungi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="jumbotron jumbotron-fluid text-center hero-section" id="home">
        <div class="container">
            <h1 class="display-3 mb-4">Create Digital Magic with HTML</h1>
            <p class="lead mb-4">Express your emotions through stunning digital greetings and invitations</p>
            <a href="/login" class="btn btn-primary btn-lg px-5 py-3">Mulai</a>
        </div>
    </div>

    <!-- About Section -->
    <div class="container my-5" id="about">
        <div class="row about-section">
            <div class="col-md-6 fade-in">
                <img src="images/home/3D.png" class="img-fluid rounded shadow" alt="Tim HTML">
            </div>
            <div class="col-md-6 fade-in">
                <h2 class="mb-4">Tentang HTML</h2>
                <p>HTML (Hubungan Terjalin Melalui Letters) adalah layanan kartu ucapan, surat, dan undangan digital yang inovatif. Kami hadir untuk memudahkan Anda mengirim pesan personal secara efisien, tanpa batasan jarak dan waktu.</p>
                <p>Keunggulan kami:</p>
                <ul class="feature-list">
                    <li><i class="fas fa-palette"></i> Desain yang dapat disesuaikan</li>
                    <li><i class="fas fa-globe"></i> Berbasis digital</li>
                    <li><i class="fas fa-tag"></i> Harga terjangkau</li>
                </ul>
                <p>Dengan HTML, sampaikan pesan Anda dengan cara yang lebih modern dan ekspresif.</p>
                {{-- <a href="#" class="btn btn-primary">Mulai Sekarang</a> --}}
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="container my-5" id="services">
        <h2 class="text-center mb-4">Produk Kami</h2>
        <div class="wrapper">
            <div class="container">
                <input type="radio" name="slide" id="c1" checked>
                <label for="c1" class="card">
                    <div class="row">
                        <div class="icon"><i class="fa fa-envelope"></i></div>
                        <div class="description">
                            <h4>HTML Basic</h4>
                            <p>Menggunakan desain template dan menyesuaikan dengan permintaan pelanggan</p>
                            <p class="price">Mulai dari Rp1.000</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c2">
                <label for="c2" class="card">
                    <div class="row">
                        <div class="icon"><i class="fa fa-file-alt"></i></div>
                        <div class="description">
                            <h4>HTML Premium</h4>
                            <p>Menambahkan interaksi dengan pengguna</p>
                            <p class="price">Mulai dari Rp10.000</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c3">
                <label for="c3" class="card">
                    <div class="row">
                        <div class="icon"><i class="fa fa-palette"></i></div>
                        <div class="description">
                            <h4>HTML Custom</h4>
                            <p>Pengerjaan produk semua berdasarkan permintaan pelanggan</p>
                            <p class="price">Harga disesuaikan dengan kompleksitas</p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c4">
                <label for="c4" class="card">
                    <div class="row">
                        <div class="icon"><i class="fa fa-laptop-code"></i></div>
                        <div class="description">
                            <h4>HTML Portofolio</h4>
                            <p>Layanan untuk pembuatan website portofolio pribadi</p>
                            <p class="price">Mulai dari Rp100.000</p>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </div>

    <!-- Testimonial Section -->
    <div class="container my-5" id="testimonials">
        <h2 class="text-center mb-4">Apa Kata Mereka</h2>
        <div class="row testimonial-row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"HTML membantu saya membuat undangan pernikahan digital yang indah. Tamu-tamu sangat terkesan!"</p>
                        <h5>Budi Santoso</h5>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Layanan HTML Premium sangat worth it! Interaksi yang ditambahkan membuat kartu ucapan saya jadi lebih berkesan."</p>
                        <h5>Siti Rahma</h5>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Terima kasih HTML atas website portofolio yang keren! Sangat membantu karir saya sebagai desainer grafis."</p>
                        <h5>Andi Prasetyo</h5>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container my-5" id="contact">
        <h2 class="text-center">Hubungi Kami</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3" placeholder="Tulis pesan Anda"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="images/home/footer.png" alt="Company Logo" class="img-fluid mb-3" style="max-width: 250px;">
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#services" class="text-white">Services</a></li>
                        <li><a href="#" class="text-white">Article</a></li>
                        <li><a href="#contact" class="text-white">Contact</a></li>
                        <li><a href="#" class="text-white">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Connect With Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">
                                <i class="bi bi-instagram me-2"></i> Follow us on Instagram
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">
                                <i class="bi bi-tiktok me-2"></i> Follow us on TikTok
                            </a>
                        </li>
                        <li>
                            <a href="mailto:contact@example.com" class="text-white text-decoration-none">
                                <i class="bi bi-envelope me-2"></i> kawanhtml@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; 2024 HTML: Hubungan Terjalin Melalui Letters. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
    
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
