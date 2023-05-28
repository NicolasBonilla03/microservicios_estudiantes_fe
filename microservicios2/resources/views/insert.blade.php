<!DOCTYPE html>
<html>
<head>
    <title>Tabla con Estilo</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body>
    <div>
        {!!Form::open(['route'=> 'estudiante.store'])!!}

        <div>
            {!! Form::label('Nombre', 'Nombre', ['class' => 'form-label']) !!}
            {!! Form::text('nombres', ['class' => 'form-control', 'id' => 'Nombre', 'placeholder' => 'Ponga su nombre']) !!}
        </div>
        <div>
            {!! Form::label('Apellidos', 'Apellidos', ['class' => 'form-label']) !!}
            {!! Form::text('apellidos', ['class' => 'form-control', 'id' => 'Apellidos', 'placeholder' => 'Ponga su apellido']) !!}
        </div>
        <div>
            {!! Form::label('Codigo', 'Codigo', ['class' => 'form-label']) !!}
            {!! Form::text('codigo', ['class' => 'form-control', 'id' => 'Codigo', 'placeholder' => 'Ponga su apellido']) !!}
        </div>
    </div>
</body>
</html>
