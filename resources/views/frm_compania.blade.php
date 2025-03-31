<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO CUERPO EJERCITO</title>
</head>
<body>
    <H1>COMPAÑIA</H1>
    <form action="{{route('Company.enviarCompany')}} "method="post" enctype="multipart/form-data" >
    @csrf
    <label for="">
        escribe la actividad
        <br>
        <input type="text" name="activityc" >
    </label>
    <button type="submit">ENVIAR FORMULARIO</button>
    </form>
</body>
</html>
