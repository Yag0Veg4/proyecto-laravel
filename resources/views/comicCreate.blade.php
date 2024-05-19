<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h1>Agregar un nuevo comic</h1>
        <form action="/comic" method="post" id="form-save-comic">
            @csrf
    
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="precio">Precio</label>
                <input type="decimal" name="precio" id="precio">
            </div>
            <div>
                <label for="editorial">Editorial</label>
                <input type="text" name="editorial" id="editorial">
            </div>
            <div>
                <label for="categorias">Categorías</label>
                <select id="categorias" name="categorias[]">
                    <option value="" disabled selected>Selecciona una categoria:</option> 
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" name="action" value="Guardar comic" id="btn">
        </form>
    </div>
</body>
</html>