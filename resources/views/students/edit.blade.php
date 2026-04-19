<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modificar Datos {{$student->name}}, {{$student->last_name}}</h1>

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
        <form action="{{ route('student.update', $student) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" value="{{ $student->name }}" placeholder="Ingrese el nombre">
            </div>
            <div>
                <label for="last_name">Apellido</label>
                <input type="text" name="last_name" value="{{ $student->last_name }}" placeholder="Ingrese el apellido">
            </div>
            <div>
                <label for="email">Correo</label>
                <input type="email" name="email" value="{{ $student->email }}" placeholder="Ingrese un correo">
            </div>
            <div>
                <label for="name">Carrera</label>
                <select name="major_id" id="major_id">
                    @foreach ($majors as $major)
                        <option value="{{ $major->id }}" {{ $student->major_id == $major->id ? 'selected' : '' }}>{{ $major->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="semester">Semestre</label>
                <select name="semester" id="semester">
                    @for ($i = 1; $i <= 12; $i++)
                        <option value="{{ $i }}" {{ $student->semester == $i ? 'selected' : '' }}>{{ $i }}° Semestre</option>
                    @endfor
                </select>
            </div>

            <div>
                <input type="submit" value="Actualizar Datos">
            </div>
        </form>
    </div>
</body>
</html>