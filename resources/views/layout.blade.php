<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('project') }}">Portofolio</a></li>
                <li><a href="{{ route('gallery') }}">Galeri</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 - Dibuat dengan sepenuh hati, ditemani secangkir kopi, dan barisan kode☕💻 <br> Terima kasih sudah berkunjung, semoga harimu menyenangkan!</p>
    </footer>
</body>
</html>