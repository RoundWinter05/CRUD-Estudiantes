<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Crear Carrera</h1> 

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach    
        </ul>
        @endif
    </div>
    
    <form action="{{ route('major.update', $major) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" placeholder="nueva carrera" value="{{ $major->name }}"/>
        </div>
        <div>
            <input type="submit" value="Actualizar Carrera">
        </div>
    </form>
</body>
</html>