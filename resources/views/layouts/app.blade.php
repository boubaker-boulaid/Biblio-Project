<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque en ligne - @yield('titre') </title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-sans antialiased">

    <!-- Header -->
    @include('partial.header')

    <!-- Main Content -->

    @yield('content')


    <!-- Footer -->
    @include('partial.footer')

</body>

</html>
