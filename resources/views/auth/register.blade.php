<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #F0E9FF;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            /* Reduced padding for tighter spacing */
        }

        .form-label {
            font-weight: normal;
            /* Labels are no longer bold */
        }

        .form-check-label {
            font-size: 0.875rem;
            /* Smaller font size */
            color: #000000;
            /* Black color */
        }

        .btn-register {
            background-color: #7B3FE4;
            color: white;
            font-weight: bold;
        }

        .btn-register:hover {
            background-color: #622fb2;
        }

        .info-section {
            text-align: center;
            margin-left: 20px;
            /* Adjusted margin for closer spacing */
        }

        .info-section img {
            width: 100%;
            /* Ensure the image is responsive */
            max-width: 150px;
            /* Maintain proportionate sizing */
            height: auto;
            margin-bottom: 10px;
            /* Reduced margin for tighter spacing */
        }

        .info-section h2 {
            color: #5C46E4;
            font-weight: bold;
            margin-bottom: 15px;
            /* Reduced margin for tighter spacing */
        }

        .info-section ul {
            list-style: none;
            padding: 0;
            text-align: left;
            margin: 0 auto;
            max-width: 400px;
        }

        .info-section ul li {
            margin-bottom: 10px;
            /* Reduced margin for closer list items */
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .info-section ul li .bi {
            margin-right: 10px;
            color: #5C46E4;
            font-size: 1.2rem;
        }

        .info-section ul li span {
            color: #5C5C5C;
        }

        /* Adjusted spacing for title and subtitle */
        h3.text-center {
            margin-bottom: 10px;
        }

        p.text-center.text-muted {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card p-4">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center mb-2">Sign up</h3>
                    <p class="text-center text-muted">Enter details to create your account</p>
                    <form id="signupForm" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control"
                                id="name" placeholder="Enter your name" required>
                            <small class="text-danger my-1 fw-light error-text">
                                @foreach ($errors->get('name') as $error)
                                    {{ $error }}
                                @endforeach
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                                id="email" placeholder="example.email@gmail.com" required>
                            <small class="text-danger my-1 fw-light error-text">
                                @foreach ($errors->get('email') as $error)
                                    {{ $error }}
                                @endforeach
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password"
                                placeholder="Enter password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control"
                                id="confirmPassword" placeholder="Enter password" required>
                        </div>
                        <small class="text-danger my-1 fw-light error-text">
                            @foreach ($errors->get('password') as $error)
                                {{ $error }}
                            @endforeach
                        </small>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label" for="terms">
                                By signing up, I agree with the Terms of Use & Privacy Policy
                            </label>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-register">Register</button>
                        </div>
                        <p class="text-center small">
                            Returning user? <a href="{{ route('login') }}"">Log in here</a>
                        </p>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="info-section">
                        <img src="img/Science.png" alt="Image">
                        <h2>Come join us</h2>
                        <ul>
                            <li>
                                <i class="bi bi-easel"></i>
                                <span>Kelas yang interaktif dengan smart board hingga platform e-learning yang bisa
                                    diakses kapan saja</span>
                            </li>
                            <li>
                                <i class="bi bi-people"></i>
                                <span>SMA Unggulan Rushd punya ekstrakurikuler yang sesuai dengan minat kamu</span>
                            </li>
                            <li>
                                <i class="bi bi-globe"></i>
                                <span>Di sini, perbedaan dirayakan, dan kamu bisa jadi diri sendiri tanpa takut
                                    di-judge.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
