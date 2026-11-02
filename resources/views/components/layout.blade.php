<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . ' - Chirper' : 'Chirper' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-base-200">
    <nav class="navbar bg-base-100 shadow-sm">
        <div class="mx-auto flex w-full max-w-2xl items-center justify-between px-4">
            <a href="/" class="text-xl font-bold">Chirper</a>
            <div class="flex gap-2">
                <a href="#" class="btn btn-ghost btn-sm">Iniciar sesión</a>
                <a href="#" class="btn btn-primary btn-sm">Registrarse</a>
            </div>
        </div>
    </nav>

    <main class="mx-auto max-w-2xl p-4">
        {{ $slot }}
    </main>
</body>
</html>