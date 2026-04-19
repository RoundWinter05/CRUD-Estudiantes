<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Carrera</h1>
    <div>
        @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($majors as $major)
            <tr>
                <td>{{$major->id}}</td>
                <td>{{$major->name}}</td>
                <td><a href="{{ route('major.edit', $major) }}">Editar</a></td>
                <td>
                    <form action="{{ route('major.destroy', $major) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" onclick="return confirm('Estas seguro que quieres eliminar esta carrera?')">
                    </form>
                </td>
            </tr>
            @endforeach 
        </table>
    </div>
    <div>
        <a href="{{ route('major.create') }}">Crear Carrera</a>
    </div>
</body>
</html>