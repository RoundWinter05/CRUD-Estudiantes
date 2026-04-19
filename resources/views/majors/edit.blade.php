@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Actualizar Carrera</h1> 
    
    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-800 px-4 py-7 rounded-lg mb-6 shadow-md">
        <ul class="list-disc ml-5">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach    
        </ul>
    </div>
    @endif
    
    <div class="bg-white rounded-2xl border border-mailob-light shadow-md p-8">
        <form action="{{ route('major.update', $major) }}" method="post" class="space-y-6">
            @csrf
            @method('PUT')
            <div class="flex flex-col space-y-2">
                <label for="name" class="font-bold text-gray-700 uppercase tracking-wide">Nombre</label>
                <input type="text" name="name" placeholder="nueva carrera" value="{{ $major->name }}"
                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-mailob-mid focus:ring-2 shadow-md"/>
            </div>
            <div class="pt-4 flex items-center justify-between space-x-4">
                <a href="{{ route('major.index') }}" class="text-gray-600 hover:text-gray-700">Cancelar</a>
                <button type="submit" class="bg-mailob-dark hover:bg-mailob-mid text-white font-bold py-3 px-8 rounded-xl shadow-md">Actualizar Carrera</button>
            </div>
        </form>
    </div>
</div>
@endsection