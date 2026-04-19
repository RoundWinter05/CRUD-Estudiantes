<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITA - Control Escolar</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-lace-bg min-h-screen font-sans">
    <nav class="bg-white shadow-md mb-8 border-b border-peach-light">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <span class="text-xl font-bold text-gray-800">Control <span class="text-mailob-dark">Estudiantes</span></span>
            <div class="space-x-6 font-medium">
                <a href="{{ route('student.index') }}" class="text-gray-600 hover:text-mailob-dark">Estudiantes</a>
                <a href="{{ route('major.index') }}" class="text-gray-600 hover:text-mailob-dark">Carreras</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4">
        @yield('content')
    </main>
</body>
</html>