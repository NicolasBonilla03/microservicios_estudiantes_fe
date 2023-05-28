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
        <th id="id">Id</th>
        <th id="codigo">Codigo del estudiante</th>
        <th id="actividad">Actividades</th>
        <th id="nota">Notas</th>
        <th id="botones">Opciones</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($actividades as $actividad)
            <td>{{$actividad->id}}</td>
            <td>{{$actividad->codigoEstudiante}}</td>
            <td>{{$actividad->descripcion}}</td>
            <td>{{$actividad->nota}}</td>
            <td>
                <button>Edit</button>
                <button>Delete</button>
            </td>
    </tr>
    @endforeach

    <thead>
    <tr>
        <th id="promedio">Promedio</th>
        <th id="estado">Estado</th>
    </tr>
    </thead>
    <tr>
        <td>{{$prom}}</td>
        <td class="@if($prom>3)aprobado @else reprobado @endif">{{$estado}}</td>
    </tr>
    <!-- Agrega más filas según sea necesario -->
    </tbody>
</table>
</body>
</html>
