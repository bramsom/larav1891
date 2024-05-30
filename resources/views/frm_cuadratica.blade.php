
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO CUADRATICA</h1>

    <form action="{{route('cuadratica.store')}}"  method="POST" >
       
        @csrf

        <label>
            Ingrese eL valor de a:
            <br>
            <input type="text" name="a">
        </label>
        <br><br>
        <label>
            Ingrese el valor de b: :
            <br>
            <input type="text" name="b">
        </label>
        <br><br>
        <label>
            Ingrese el valor de c: :
            <br>
            <input type="text" name="c">
        </label>
        <br><br><br>

        <button type="submit">Enviar Formulario:</button>
       
   
    </form>

</body>
</html>
