<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teamwork Makes the Dream Work</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
        }
        .parallax {
            background-image: url('envelope-background.jpg');
            height: 100%;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .content {
            background: linear-gradient(135deg, rgb(0, 3, 10), rgba(255, 109, 0, 0.8));
            min-height: 100vh;
        }
        .navbar {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .btn-contact {
            background-color: #FF6D00;
            color: white;
            border-radius: 20px;
        }
        .hero {
            padding-top: 5rem;
        }
        .hero-image {
            text-align: center;
        }
        @media (max-width: 768px) {
            .hero-image {
                margin-top: 2rem;
            }
        }
        /* CSS FOR CHANGE MODE */
        .light-mode {
            background-color: #333;
            color: #333;
        }
        .dark-mode {
            background-color: #333;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="parallax">
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">COURSE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PRICING</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-contact" href="#">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4">TEAMWORK MAKES THE DREAM WORK</h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy</p>
                        <a href="#" class="btn btn-contact btn-lg">Learn More</a>
                    </div>
                    <div class="col-lg-6 hero-image">
                        <!-- Replace with actual image or SVG -->
                        <img src="placeholder.jpg" alt="Team working" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>