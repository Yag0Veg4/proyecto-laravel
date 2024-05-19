<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header id="header-show">
        <div class="container">
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
        <h1 class="title">Lista de categorías</h1>
        <table class="table categorias">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categorias</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->categoria}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>