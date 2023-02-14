<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Informacion de correo

    <br>
<b>Nombre:</b> {{$informacion_cliente["nombre"]}}
<br>
<b>Email:</b> {{$informacion_cliente["email"]}}
<br>
<b>Tema:</b> {{$informacion_cliente["subject"]}}
<br>
<b>Mensaje:</b> {{$informacion_cliente["message"]}}
</body>
</html>