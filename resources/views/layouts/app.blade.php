<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Magic Hat') }}</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="img/magichat/icone.ico" rel="icon">
        <link href="img/magichat/icone.ico" rel="apple-touch-icon">
        <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Scripts -->
        @vite([
            'resources/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
        ])
    </head>
    <body>
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>

        <div>
            @include('layouts.components.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header>
                    <div>
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main id="main">
                {{ $slot }}
            </main>

            @include('layouts.components.footer')
        </div>
    </body>

    <!-- Template Main JS File -->
    <script type="module" src="js/app.js"></script>
</html>