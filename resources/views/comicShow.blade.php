<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic {{$comic->nombre}}</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header id="header-show">
        <divc class="container">
            <h1 class="title">Comics</h1>
            <nav>
                <ul>
                    <li><a href="/comic">Inicio</a></li>
                    <li><a href="/comic/create">Agregar comic</a></li>
                    <li><a href="/categoria/create">Agregar Categoría</a></li>
                    <li><a href="/categoria/">Categorías</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="main">
        <div class="card">
            <h1>{{$comic->nombre}}</h1>
            <h3>{{$comic->precio}}</h3>
    
            @foreach ($comic->categorias as $categoria)
                <p>{{$categoria->categoria}}</p>
            @endforeach
            <div class="btns">
                <a href="/comic/{{$comic->id}}/edit" class="btn">Modificar</a>
                <form action="/comic/{{$comic->id}}" method="post" id="form-comic">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar" name="action" id="submit-btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>