{{-- resources\views\layouts\app.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Título Padrão')</title>

    @livewireStyles
    <!-- CSS e scripts aqui -->
</head>
<body>
    <header>
        <!-- menu, logo, etc -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- rodapé -->
    </footer>

    @vite('resources/js/app.js')
    @livewireScripts    
    @stack('scripts')
</body>
</html>
