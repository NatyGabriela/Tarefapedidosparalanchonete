<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>

    <body style="background-color:rgb(232, 171, 245)">
        <nav class="navbar bg-body-tertiary; bg-danger">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                    Sistema de Pedido Para Lanchonete
                </a>
            </div>
        </nav>
    
        <div class="container mt-5">
            {{ $slot }}
        </div>
    
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>
</html>
