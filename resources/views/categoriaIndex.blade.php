<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h1 class="title">LISTA DE CATEGORÍAS</h1>
    <table >
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Categorias</th>
                    <th>Ver</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->Edad}}</td>
                    <td><a href="/categoria/{{$categoria->id}}">Ir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>