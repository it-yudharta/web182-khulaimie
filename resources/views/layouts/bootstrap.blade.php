<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">

    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <a class="navbar-brand" href="#">PERPUSTAKAAN</a>

    </nav>
    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('popper.min.js') }}"></script>
    <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
</body>

</html>
