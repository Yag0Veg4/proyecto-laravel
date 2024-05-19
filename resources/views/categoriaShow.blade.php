<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$categoria->categoria}}</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <h1 class="header">{{$categoria->categoria}}</h1>
    <a href="/categoria/{{$categoria->id}}/edit" class="">Modificar</a>        
    <form method="POST" action="/categoria/{{$categoria->id}}" id="formulario">
        @csrf
        @method('DELETE')

        <input type="submit" class="btn center" name="action" value="Eliminar">
    </form>
</body>
</html>