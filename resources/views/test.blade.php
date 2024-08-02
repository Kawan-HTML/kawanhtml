@extends('layouts.app')

@section('title', 'HTML Portfolio')
@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --main-color: #FF6D00;
        }
        body {
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.6;
        }
        .custom-header {
            background-color: var(--main-color);
            color: #fff;
        }
        .package {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .package:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .btn-primary {
            background-color: var(--main-color);
            border-color: var(--main-color);
        }
        .btn-primary:hover {
            background-color: #E65100;
            border-color: #E65100;
        }
        .accordion-button:not(.collapsed) {
            background-color: var(--main-color);
            color: #fff;
        }
        .section-title {
            color: var(--main-color);
            border-bottom: 2px solid var(--main-color);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        /* CSS FOR FAQ */
        .accordion-button {
            position: relative;
            transition: all 0.3s ease;
        }

        .accordion-button .plus-icon {
            position: absolute;
            right: 1rem;
            transition: transform 0.3s ease;
        }

        .accordion-button:not(.collapsed) .plus-icon {
            transform: rotate(45deg);
        }

        .accordion-collapse {
            transition: all 0.3s ease;
        }

        /* CSS FOR PORTFOLIO EXAMPLES */
        .portfolio-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }
        .portfolio-item {
            transition: box-shadow 0.3s ease-in-out;
            border-radius: 8px;
            overflow: hidden;
        }
        .portfolio-item:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .window-controls {
            background-color: #f0f0f0;
            padding: 8px;
            display: flex;
            gap: 5px;
        }
        .control {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            display: inline-block;
        }
        .red { background-color: #ff5f56; }
        .yellow { background-color: #ffbd2e; }
        .green { background-color: #27c93f; }
    </style>
</head>
<body>
    <header class="custom-header py-5 mb-4">
        <div class="container text-center">
            <h1>HTML Portfolio</h1>
        </div>
    </header>

    <div class="container">
        <section id="about" class="mb-5">
            <h2 class="section-title">Tentang HTML Portfolio</h2>
            <p>HTML Portfolio adalah layanan pembuatan website portofolio pribadi yang dapat digunakan untuk personal branding.</p>
        </section>

        <section id="order" class="mb-5">
            <h2 class="section-title">Langkah-langkah pemesanan</h2>
            <ol>
                <li>Choose a package that suits your needs</li>
                <li>Fill out our contact form with your requirements</li>
                <li>Receive a quote and timeline for your project</li>
                <li>Approve the quote and make an initial payment</li>
                <li>Collaborate with our team to design and develop your portfolio</li>
                <li>Review and approve the final product</li>
                <li>Make the final payment and launch your new portfolio website</li>
            </ol>
        </section>

        <section id="form" class="mb-5">
            <h2 class="section-title">Request a Portfolio</h2>
            <form action="{{ route('submit-portfolio-request') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama domain</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="package" class="form-label">Pilih jenis domain</label>
                    <select class="form-select" id="package" name="package" required>
                        <option value="">Pilih</option>
                        <option value="my.id">.my.id (Rp50.000)</option>
                        <option value=".com">.com (Rp150.000)</option>
                        <option value=".id">.id (Rp250.000)</option>
                        <option value=".co.id">.co.id (Rp350.000)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="design_preference" class="form-label">Desain</label>
                    <select class="form-select" id="design_preference" name="design_preference">
                        <option value="">Select a design</option>
                        <option value="minimalist">Minimalist Design</option>
                        <option value="creative">Creative Showcase</option>
                        <option value="professional">Professional Business</option>
                        <option value="artistic">Artistic Gallery</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="project_count" class="form-label">Number of Projects to Showcase:</label>
                    <input type="number" class="form-control" id="project_count" name="project_count" min="1" max="20">
                </div>

                <div class="mb-3">
                    <label for="additional_features" class="form-label">Additional Features:</label>
                    <textarea class="form-control" id="additional_features" name="additional_features" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="timeline" class="form-label">Desired Completion Timeline:</label>
                    <input type="text" class="form-control" id="timeline" name="timeline">
                </div>

                <button type="submit" class="btn btn-primary">Submit Request</button>
            </form>
        </section>

        {{-- EXAMPLE SECTION --}}
        <section id="examples" class="mb-5">
            <h2 class="section-title">Contoh Portofolio</h2>
            <p>Berikut beberapa hasil karya portofolio web kami: </p>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <a href="{{ url('/html-portofolio/exp1/index.html') }}" class="portfolio-link" target="_blank">
                        <div class="card portfolio-item">
                            <div class="window-controls">
                                <span class="control red"></span>
                                <span class="control yellow"></span>
                                <span class="control green"></span>
                            </div>
                            <img src="html-portofolio/exp1/exp1.gif" class="card-img-top" alt="Minimalist Design">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="{{ url('/html-portofolio/exp2/index.html') }}" class="portfolio-link" target="_blank">
                        <div class="card portfolio-item">
                            <div class="window-controls">
                                <span class="control red"></span>
                                <span class="control yellow"></span>
                                <span class="control green"></span>
                            </div>
                            <img src="html-portofolio/exp2/exp2.gif" class="card-img-top" alt="Minimalist Design">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="{{ url('/html-portofolio/exp3/index.html') }}" class="portfolio-link" target="_blank">
                        <div class="card portfolio-item">
                            <div class="window-controls">
                                <span class="control red"></span>
                                <span class="control yellow"></span>
                                <span class="control green"></span>
                            </div>
                            <img src="html-portofolio/exp3/exp3.gif" class="card-img-top" alt="Minimalist Design">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <a href="{{ url('/html-portofolio/exp3/index.html') }}" class="portfolio-link" target="_blank">
                        <div class="card portfolio-item">
                            <div class="window-controls">
                                <span class="control red"></span>
                                <span class="control yellow"></span>
                                <span class="control green"></span>
                            </div>
                            <img src="html-portofolio/exp3/exp3.gif" class="card-img-top" alt="Minimalist Design">
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="packages" class="mb-5">
            <h2 class="section-title">Packages</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="package">
                        <h3>Basic Package</h3>
                        <p>Single page portfolio with up to 5 projects</p>
                        <p class="text-primary fw-bold">Price: $299</p>
                        <a href="#form" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="package">
                        <h3>Standard Package</h3>
                        <p>Multi-page portfolio with up to 10 projects and a blog</p>
                        <p class="text-primary fw-bold">Price: $599</p>
                        <a href="#form" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="package">
                        <h3>Premium Package</h3>
                        <p>Custom design, unlimited projects, blog, and SEO optimization</p>
                        <p class="text-primary fw-bold">Price: $999</p>
                        <a href="#form" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="mb-5">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            How long does it take to create a portfolio website?
                            <span class="plus-icon">+</span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The timeline for creating a portfolio website typically ranges from 2-4 weeks, depending on the complexity of the design and the amount of content to be included.
                        </div>
                    </div>
                </div>
                <!-- Add more accordion items here -->
            </div>
        </section>
    </div>

    <footer class="bg-dark text-white py-4 text-center">
        <p>&copy; 2022 HTML Portfolio. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        

        // SCRIPT FOR PLUS ICON IN FAQ ACCORDION
        document.addEventListener('DOMContentLoaded', function() {
            var accordionButtons = document.querySelectorAll('.accordion-button');
            accordionButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var icon = this.querySelector('.plus-icon');
                    if (this.classList.contains('collapsed')) {
                        icon.textContent = '+';
                    } else {
                        icon.textContent = '−';
                    }
                });
            });
        });

        // SCRIPT FOR FAQ ACCORDION
        var accordion = document.getElementById('faqAccordion');
        accordion.addEventListener('click', function(e) {
            if (e.target.classList.contains('accordion-button')) {
                var icon = e.target.querySelector('.plus-icon');
                if (e.target.classList.contains('collapsed')) {
                    icon.textContent = '+';
                } else {
                    icon.textContent = '−';
                }
            }
        });

        // SCRIPT FOR PORTFOLIO EXAMPLES
        document.querySelectorAll('.portfolio-link').forEach(item => {
            item.addEventListener('click', event => {
                event.preventDefault();
                window.open(item.href, '_blank');
            });
        });

        function setTheme(theme) {
            document.body.className = theme;
            localStorage.setItem('theme', theme);
            updateNavbarClasses(theme);
        }

        function updateNavbarClasses(theme) {
            const navbar = document.querySelector('.navbar');
            navbar.classList.remove('navbar-light', 'navbar-dark', 'bg-light');
            if (theme === 'dark' || (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                navbar.classList.add('navbar-dark');
            } else {
                navbar.classList.add('navbar-light', 'bg-light');
            }
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            const savedTheme = localStorage.getItem('theme') || 'light';
            setTheme(savedTheme);
        });


    </script>
</body>
</html>
@endsection
