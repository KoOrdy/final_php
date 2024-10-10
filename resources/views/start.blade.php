<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
        .nav-link {
            padding: 0.75rem 1.25rem;
            color: #000;
            text-decoration: none; /* Removing underline */
            border-radius: 0.5rem;
            transition: color 0.3s ease, box-shadow 0.3s ease;
        }
        .nav-link:hover {
            color: #6c757d;
        }
        .btn-custom {
            background-color: black;
            color: #fff;
            border: none;
            padding: 0.75rem 1.25rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #d9201a;
        }
        .btn-custom:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 45, 32, 0.5);
            outline: none;
        }
        .dark-mode .nav-link {
            color: #fff;
        }
        .dark-mode .nav-link:hover {
            color: rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <nav class="navbar navbar-light bg-light p-4 shadow-sm rounded">
            <div class="container-fluid justify-content-center">
                <!-- Exact Blade code for login, register, and dashboard -->
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="btn btn-custom"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="btn btn-custom"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="btn btn-custom ms-2"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
