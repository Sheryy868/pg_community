<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pleasing Gaming</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous">
    </script>
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet"> <!-- Include common variables -->
    <link href="{{ asset('frontend/css/header.css') }}" rel="stylesheet"> <!-- Specific styling for the header -->
    @yield('head') <!-- You can use this section for additional page-specific CSS/JS -->
</head>

<body class="body">
    @include('layouts.frontend.header')
    <!-- Main Page Content -->
    @yield('content') <!-- This section will be replaced by content from other pages -->
    @include('layouts.frontend.footer')

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
