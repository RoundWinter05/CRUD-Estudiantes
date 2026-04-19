<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agregar Estudiante</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach    
        </ul>
        @endif
    </div>

    <div>
        <form action="{{ route('student.store') }}" method="post">
            @csrf
            @method('post')
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Ingrese el nombre">
            </div>
            <div>
                <label for="last_name">Apellido</label>
                <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Ingrese el apellido">
            </div>
            <div>
                <label for="email">Correo</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Ingrese un correo">
            </div>
            <div>
                <label for="name">Carrera</label>
                <select name="major_id" id="major_id">
                    <option value="">Seleccione una carrera</option>
                    @foreach ($majors as $major)
                        <option value="{{ $major->id }}">{{ $major->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="semester">Semestre</label>
                <select name="semester" id="semester">
                    @for ($i = 1; $i <= 12; $i++)
                        <option value="{{ $i }}">{{ $i }}° Semestre</option>
                    @endfor
                </select>
            </div>

            <div>
                <input type="submit" value="Registrar Estudiante">
            </div>
        </form>
    </div>
</body>
</html>