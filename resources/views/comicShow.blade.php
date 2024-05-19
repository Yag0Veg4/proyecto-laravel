<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic {{$comic->nombre}}</title>
    @vite(['resources/css/styles.css'])
</head>
<body>
    <h1>{{$comic->nombre}}</h1>
    <h3>{{$comic->precio}}</h3>

    @foreach ($comic->categorias as $categoria)
        <p>{{$categoria->categoria}}</p>
    @endforeach

    <a href="/comic/{{$comic->id}}/edit">Modificar</a>
    <form action="/comic/{{$comic->id}}" method="post" id="form-comic">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar" name="action">
    </form>
</body>
</html>