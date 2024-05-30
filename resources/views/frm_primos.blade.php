
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO NUMEROS PRIMOS</h1>

    <form action="{{route('primos.Store')}}"  method="POST" >
       
        @csrf

        <label>
            Ingrese un numero:
            <br>
            <input type="text" name="num1">
        </label>
        <br><br>
        <label>

        <button type="submit">Enviar Formulario:</button>
       
   
    </form>

</body>
</html>
