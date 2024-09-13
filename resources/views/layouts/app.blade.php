<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo','Hotelesposadadelsol')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        {{-- Navbar --}}
        @include('layouts.navbar')
    </header>
    <main>
        <div class="text-center bg-green-100 my-4">
            <h1 class="text-lg font-sembold m-4 uppercase">@yield('cabecera')</h1>
        </div>
        @yield('contenido')
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>