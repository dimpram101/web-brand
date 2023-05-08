<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IniClothingan.Indo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-200">
    <div class="mb-20" id="navbar">
        <nav class="border-gray-200 bg-gray-50 shadow-md fixed top-0 left-0 w-full z-50">
            <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto h-20">
                <a href="#" class="flex items-center">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">IniClothingan<span
                            class="text-orange-500">.Indo</span></span>
                </a>
                <button data-collapse-toggle="navbar-solid-bg" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-solid-bg" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                    <ul
                        class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent text-lg">
                        <li>
                            <a href="#" class="block p-0 text-orange-600 bg-blue-700 rounded md:bg-transparent"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#about-us" class="block p-0 text-gray-900 rounded hover:bg-gray-100">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="block p-0 text-gray-900 rounded hover:bg-gray-100">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-row gap-10 items-center">
                    <div class="flex gap-2 items-center">
                        <input type="text" name="search" id="search" placeholder="Cari di sini..."
                            class="border border-black py-2 px-4 rounded-2xl">
                        <img src="{{ asset('search-magnifying-glass-svgrepo-com.png') }}" alt=""
                            class="w-8 h-8">
                    </div>
                    <a href="/login" class="bg-orange-500 py-3 px-6 rounded-lg font-bold">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="mx-auto flex flex-col p-8 border-2 border-gray-200 rounded-lg" id="content">
        @yield('body')
    </div>
    <div class="mt-10 text-center mb-8 font-bold">
      {{ "COPYRIGHT @SONNY" }}
    </div>
</body>

</html>
