<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Livraria</title>
</head>

<body>
    <div class="d-flex">
        <!-- nav bar -->
        <nav class="d-flex flex-column sidebar sidebar-dark accordion bg-dark p-3">

            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-book-open-reader fa-lg me-2"></i>
                <span class="fs-4">Livraria</span>
            </div>

            <hr class="sidebar-divider my-0">

            <ul class="navbar-nav mb-auto">
                <li class="nav-item rounded">
                    <a href="#" class="nav-link rounded">
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item rounded">
                    <a href="#" class="nav-link rounded">
                        <span>Livros</span>
                    </a>
                </li>
                <li class="nav-item rounded">
                    <a href="#" class="nav-link rounded">
                        <span>Autores</span>
                    </a>
                </li>
                <li class="nav-item rounded">
                    <a href="#" class="nav-link">
                        <span>Editoras</span>
                    </a>
                </li>

            </ul>
            <hr class="sidebar-divider my-0">
        </nav>
        <!-- conteudo da pagina -->
        <main class="p-3" id="content">
            @yield('content')
        </main>
    </div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
