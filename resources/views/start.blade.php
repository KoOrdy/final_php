<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkedOut</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            /* Light background color */
        }

        .nav-link {
            padding: 0.75rem 1.25rem;
            color: #000;
            text-decoration: none;
            /* Removing underline */
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

        .title {
            font-size: 3rem;
            /* Large font size */
            font-weight: bold;
            /* Bold font */
            color: #343a40;
            /* Dark text color */
            text-align: center;
            /* Center alignment */
            margin-bottom: 2rem;
            /* Spacing below the title */
            animation: fadeIn 1s ease-in-out, bounce 2s infinite;
            /* Animation effects */
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
                /* Move title up */
            }

            100% {
                opacity: 1;
                transform: translateY(0);
                /* Reset position */
            }
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
                /* Normal position */
            }

            40% {
                transform: translateY(-10px);
                /* Move up */
            }

            60% {
                transform: translateY(-5px);
                /* Move slightly up */
            }
        }
    </style>
</head>

<body class="bg-light">

    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1 class="title">LinkedOut</h1> <!-- Big title with animation -->
        <nav class="navbar navbar-light bg-light p-4 shadow-sm rounded">
            <div class="container-fluid justify-content-center">
                <!-- Exact Blade code for login, register, and dashboard -->
                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                    <div class="d-flex justify-content-center align-items-center">
                        <!-- First Button: Enter Here -->
                        <a href="{{ url('/users') }}" class="btn btn-custom" style="margin-right: 20px;">
                            Enter Here
                        </a>

                        <!-- Second Button: Log Out -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="btn btn-danger"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </div>

                    @else
                    <a
                        href="{{ route('login') }}"
                        class="btn btn-custom">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="btn btn-custom ms-2">
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