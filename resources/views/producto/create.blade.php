<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>Crear curso</h1>

<form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<br>
<label>
    precio:
    <br>
    <input type="double" name="price">
</label>
<br>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="description">
</label>  
<br>
<br>
<label>
  cantidad:
    <br>
    <input type="integer" name="cant">
</label>
<br>
<br>
<label>
fecha expedicion:
<br>
<input type="date" name="exp">
</label>
<br>
<label>
<br>
<label>
<br>
<br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>
