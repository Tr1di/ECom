<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header, footer {
            background: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        main {
            flex: 1; /* Растягивает контент, прижимая футер к низу */
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <header>
        <h1>Мой сайт</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Top</p>
    </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    
    @stack('scripts')

</body>
</html>