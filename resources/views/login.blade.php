<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HTML</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
        body {
            background-image: url('images/home/background.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-container h2 {
            color: #333;
            border-bottom: 2px solid #FF6D00;
            padding-bottom: 10px;
            margin-bottom: 20px;
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

        .google-login {
            background-color: #4285F4;
            color: white;
            transition: all 0.3s ease;
        }

        .google-login:hover {
            background-color: #357AE8;
            color: white;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center mb-4">Login to HTML</h2>
        <form>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <hr>
        <a href="{{ route('google-auth') }}" class="btn google-login btn-block">
            <i class="fab fa-google mr-2"></i> Login with Google
        </a>
        <div class="text-center mt-3">
            <a href="#" class="text-muted">Forgot password?</a>
        </div>
        <div class="text-center mt-3">
            <p>Don't have an account? <a href="#">Sign up</a></p>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>