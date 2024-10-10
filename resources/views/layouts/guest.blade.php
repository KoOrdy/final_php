<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login/Register</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .title {
            font-size: 3rem; /* Large font size */
            font-weight: bold; /* Bold font */
            text-align: center; /* Center alignment */
            margin-bottom: 2rem; /* Spacing below the title */
            animation: fadeIn 1s ease-in-out, bounce 2s infinite; /* Animation effects */
        }
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px); /* Move title up */
            }
            100% {
                opacity: 1;
                transform: translateY(0); /* Reset position */
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0); /* Normal position */
            }
            40% {
                transform: translateY(-10px); /* Move up */
            }
            60% {
                transform: translateY(-5px); /* Move slightly up */
            }
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <a href="/" class="text-3xl font-bold text-gray-500">
                <h1 class="title">LinkedOut</h1>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>