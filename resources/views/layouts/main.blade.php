<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Universitas Bumigora</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        nav a { margin-right: 20px; text-decoration: none; color: black; }
        footer { margin-top: 40px; border-top: 1px solid #ccc; padding-top: 20px; }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('post') }}">Post</a>
        <a href="{{ route('about') }}">About</a>

        <span style="margin-left: 20px; color: gray;">
            Dhiya 'Ulhaq Ramdhani Malik — 2301010102
        </span>
        <span style="margin-left: 20px; color: gray;">
            Saili Rizki Zahara — 2301010086
        </span>
    </nav>

    <hr>

    <div>
        @yield('content')
    </div>

    <footer>
        <center>© 2025 Company, Inc</center>
    </footer>

</body>
</html>
