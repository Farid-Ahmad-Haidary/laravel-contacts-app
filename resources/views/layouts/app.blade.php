<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Manager</title>
</head>

<body class="bg-gray-50 font-sans antialiased">

    <!-- Navbar -->
    <nav class="bg-white shadow-md border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-md">
                        <span class="text-white text-xl">📇</span>
                    </div>
                    <a href="/" class="text-2xl font-bold text-gray-800 hover:text-blue-600 transition">
                        Contact Manager
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="flex items-center space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition">About</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact</a>
                    <a href="#"
                        class="bg-yellow-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-yellow-800 transition shadow-md inline-flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-7.5A2.25 2.25 0 003.75 5.25v13.5A2.25 2.25 0 006 21h7.5A2.25 2.25 0 0015.75 18.75V15m3-3l-3-3m0 0l3-3m-3 3H9" />
                        </svg>
                        login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

</body>

</html>
