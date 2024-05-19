<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear categoria</title>
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
        <h1 class="add-categoria">Agregar categoria para comics:</h1>
        <form method="post" action="/categoria" id="formulario">
            @csrf
    
            <div class="input-group">
                <div class="modern-header">
                    <label for="categoria">Categoria:</label>
                    <input type="text" name="categoria" id="categoria"/>
                </div>
                <div class="">
                    <input type="submit" name="action" value="Guardar" id="btn">
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>