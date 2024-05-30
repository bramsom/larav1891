<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO DE TEXTO INVERTIDO</h1>

    <form action="{{route('invertido.Store')}}"  method="POST" >
       
        @csrf

        <label>
            Ingrese una palabra:
            <br>
            <input type="text" name="text1">
        </label>
        <br><br>
        <label>

        <button type="submit">Enviar Formulario:</button>
       
   
    </form>

</body>
</html>
