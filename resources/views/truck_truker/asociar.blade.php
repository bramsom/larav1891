<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde asociar:</h1>

    <form action="{{route('truck_trucker.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
     

        <br>
        <h1>camiones:</h1>
        <select name="truck_id">
            @foreach($trucks as $Truck)
                <option value="{{ $Truck->id }}">{{ $Truck->id }} - {{ $Truck->name }}</option>
            @endforeach
        </select>
        <br>
        <h1>camioneros:</h1>    
        <select name="trucker_id">
            @foreach($truckers as $Trucker)
                <option value="{{ $Trucker->id }}">{{ $Trucker->id }} - {{ $Trucker->name }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
 
</body>
</html>
