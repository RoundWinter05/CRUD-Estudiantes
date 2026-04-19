@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Carreras</h1>
    
    @if (session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-800 
        px-4 py-7 rounded-lg mb-6">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-xl overflow-hidden border border-mailob-light shadow-md">
        <table class="w-full text-center border-collapse">
            <thead class="bg-mailob-light">
                <tr class="text-gray-700 uppercase text-sm">
                    <th class="py-4 px-6 font-bold">ID</th>
                    <th class="py-4 px-6 font-bold">Nombre</th>
                    <th class="py-4 px-6 font-bold">Editar</th>
                    <th class="py-4 px-6 font-bold">Eliminar</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach ($majors as $major)
                <tr class="border-b border-gray-100 hover:bg-lace-bg/40 transition">
                    <td class="py-4 px-6">{{$major->id}}</td>
                    <td class="py-4 px-6 text-gray-900">{{$major->name}}</td>
                    <td><a href="{{ route('major.edit', $major) }}" class="text-blue-500 hover:text-blue-700 font-semibold">Editar</a></td>
                    <td>
                        <form action="{{ route('major.destroy', $major) }}" method="post" class="inline">
                            @csrf
                                @method('delete')
                                <button type="submit" 
                                class="text-red-500 hover:text-red-700 font-semibold cursor-pointer"
                                onclick="return confirm('¿Seguro que desea eliminar la carrera de {{ $major->name}}?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody> 
        </table>
    </div>
    <div class="mt-8 flex justify-between items-center space-x-7">
        <a href="{{ route('major.index') }}" class="text-gray-600 hover:text-gray-700">Regresar al Inicio</a>
        <a href="{{ route('major.create') }}"
        class="bg-mailob-dark text-white font-bold py-3 px-8 rounded-2xl shadow-md hover:bg-mailob-mid ">+ Crear Carrera</a>
    </div>

@endsection