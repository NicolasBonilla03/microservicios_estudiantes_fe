<!DOCTYPE html>
<html>
<head>
    <title>Tabla con Estilo</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body>
<table class="owntable">
    <thead>
    <tr>
        <th id="codigo">Codigo del estudiante</th>
        <th id="Nombres">Nombres</th>
        <th id="studentCode">Apellidos</th>
        <th id="buttons">Buttons</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($estudiantes as $estudiante)
        <td>{{$estudiante->codigo}}</td>
        <td>{{$estudiante->nombres}}</td>
        <td>{{$estudiante->apellidos}}</td>
        <td>
            <a href="{{ route('actividades.show',$estudiante->codigo) }}">
                Notas
            </a>
            <button>Delete</button>
        </td>
    </tr>
    @endforeach
    <!-- Agrega más filas según sea necesario -->
    </tbody>
</table>
</body>
</html>
