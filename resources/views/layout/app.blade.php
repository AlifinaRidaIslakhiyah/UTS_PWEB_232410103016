<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Webstie Pengelolaan Data Mahasiswa Unej')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="@yield('bodyClass')">
    @yield('content')

    <footer>
        @include('components.footer')
    </footer>
    @yield('scripts')
</body>
</html>
