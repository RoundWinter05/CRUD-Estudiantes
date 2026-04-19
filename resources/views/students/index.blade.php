<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estudiantes</h1>

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
                <th>Apellido</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->major->name}}</td>
                    <td>{{$student->semester}}</td>
                    <td><a href="{{ route('student.edit', $student) }}">Editar</a></td>
                    <td>
                        <form action="{{ route('student.destroy', $student) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <a href="{{ route('student.create') }}">Agregar Estudiante</a>
    </div>
</body>
</html>