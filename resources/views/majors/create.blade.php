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
    
    <form action="{{ route('major.store') }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" placeholder="nueva carrera"/>
        </div>
        <div>
            <input type="submit" value="Agregar Carrera Nueva">
        </div>
    </form>
</body>
</html>