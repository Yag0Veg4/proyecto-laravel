<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header class="modern-header">
        <h1 class="title">Comics</h1>
        <nav>
            <ul>
                <li><a href="/comic/create">Agregar comic</a></li>
                <li><a href="/categoria/create">Agregar Categoría</a></li>
            </ul>
        </nav>
    </header>

    @if (session()->has('success'))
        
    @endif

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Editorial</th>
                <th>Precio</th>
                <th>Categorias</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->nombre}}</td>
                    <td>{{$comic->editorial}}</td>
                    <td>{{$comic->precio}}</td>
                    <td>
                        @foreach ($comic->categorias as $categoria)
                            {{$categoria->categoria}}
                        @endforeach
                    </td>
                    <td><a href="/comic/{{$comic->id}}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>