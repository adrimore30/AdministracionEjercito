<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>CUARTEL</H1>
    <form action="{{route('Quarter.enviarQuarter')}} "method="post" enctype="multipart/form-data" >
            @csrf
            <label for="">
                escribe el nombre
                <br>
                <input type="text" name="name" id="name"> 
            </label>
            <label for="">
                ingresa la ubicacion
                <br>
                <input type="text" name="ubication" id="ubication">
            </label>

        <button type="submit">ENVIAR FORMULARIO</button>
        </form>
</body>
</html>
