<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-begin-page/>
</head>
<body>
    <div id="app">
        <x-partials.navbar/>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <x-end-page/>
</body>
</html>
