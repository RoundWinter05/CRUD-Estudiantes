@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-5xl font-bold text-gray-800 mb-6 text-center"><span>Control</span> <span class="text-mailob-dark">Estudiantes</span></h1> 
    
    <div class="bg-white rounded-3xl shadow-md p-5 space-y-6">
        <p class="text-center text-gray-800 md-5 font-bold">Bienvenido al sistema de Registro Estudiantil!</p>

        <p class="text-center text-gray-800 md-5">Aquí puedes administar los registros tanto de carreras, 
            como para los estudiantes del Instituto Teconológico de Aguascalientes en tan solo un par de clicks. A continuación puede escoger 
            entre realizar un registro en la tabla de estudiantes o de carreras; ambos cuentan con su pagina de index(visualización), 
            donde se podra agregar, editar, eliminar, o bien, regresar al menú y/o cambiar de registros.
        </p>

        <p class="text-center text-gray-800 md-5">Para empezar, puedes dirigirte a cualquiera de las secciones para realizar un registro usando los botones 
            ubicados a continuación, o bien utilizando la barra de navegación ubicada en la parte superior.
        </p>

        <div class="pt-4 flex items-center justify-between space-x-6">
            <a href="{{ route('major.index') }}" class="bg-mailob-mid px-8 py-3 rounded-xl text-white hover:bg-mailob-dark font-bold shadow-md">Carreras</a>
            <a href="{{ route('student.index') }}" class="bg-mailob-mid px-8 py-3 rounded-xl text-white hover:bg-mailob-dark font-bold shadow-md">Estudiantes</a>
        </div>

    </div>
</div>
@endsection