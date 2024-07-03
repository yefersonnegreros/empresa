<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Enviado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333333;
        }
        p {
            margin: 10px 0;
            color: #555555;
        }
        .footer {
            margin-top: 20px;
            border-top: 1px solid #cccccc;
            padding-top: 10px;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Empresa Negreros</h1>
        <p><strong>Nombre:</strong> {{$mensaje['nombre']}}</p>
        <p><strong>Email:</strong> {{$mensaje['email']}}</p>
        <p><strong>Asunto:</strong> {{$mensaje['asunto']}}</p>
        <p><strong>Mensaje:</strong></p>
        <p>{{$mensaje['mensaje']}}</p>
        <div class="footer">
            <p>Este es un mensaje automático, por favor no responda a este correo.</p>
        </div>
    </div>
</body>
</html>
