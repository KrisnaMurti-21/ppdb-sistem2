<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .shadow-lg {
            border-radius: 15px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .text-muted {
            text-align: center;
        }

        .btn-primary {
            background-color: #6c63ff;
            border-color: #6c63ff;
        }

        .btn-primary:hover {
            background-color: #574bff;
            border-color: #574bff;
        }

        .bg-light {
            background-color: #f8f9fa !important;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .form-check-inline {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .input-group {
            position: relative;
        }

        .btn-light {
            border: none;
            background: #e0e0e0;
        }

        .btn-light:focus {
            box-shadow: none;
        }

        .form-label {
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            color: #333;
            font-size: 14px;
        }

        .poppins-light {
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
        }

        .text-white {
            color: #fff !important;
        }

        .form-text-14 {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row shadow-lg">
            <div class="col-md-6 p-5">
                <h2 class="mb-3">Sign in</h2>
                <p class="text-muted">Let's build something great</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                            id="email" placeholder="example.email@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <!-- Label password dengan kelas tambahan -->
                        <label for="password" class="form-label poppins-light form-text-14">Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input name="password" class="form-control" type="password" placeholder="Password"
                                id="password" name="password" required />
                            <button class="btn btn-light" type="button" onclick="togglePasswordVisibility()">
                                <!-- Ikon mata  -->
                                <i class="fa fa-eye-slash text-dark" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    @if ($errors->any())
                        <small class="text-danger my-1 fw-light error-text">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </small>
                    @endif
                    <div class="form-check-inline mb-3">
                        <div class="form-check">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <label class="form-check-label" for="remember_me">Remember me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-decoration-none ms-auto">Forgot
                                password?</a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </form>
                <div class="mt-3 text-center">
                    <span>Don't have an account? </span><a href="{{ route('register') }}"
                        class="text-decoration-none">Sign Up</a>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center bg-light">
                <img src="img/prestasi.png" alt="Illustration" class="img-fluid">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var passwordIcon = document.querySelector("#show_hide_password i");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordIcon.classList.remove("fa-eye-slash");
                passwordIcon.classList.add("fa-eye");
            } else {
                passwordField.type = "password";
                passwordIcon.classList.remove("fa-eye");
                passwordIcon.classList.add("fa-eye-slash");
            }
        }
    </script>
</body>

</html>
