<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>CUERPO DE EJERCITO</H1>
    <form action="{{route('ArmyCorp.enviarArmy')}} "method="post" enctype="multipart/form-data" >
        @csrf
        <label for="">
            escribe la denominacion
            <br>
            <input type="text" name="denomination" >
        </label>
        <button type="submit">ENVIAR FORMULARIO</button>
        </form>
</body>
</html>