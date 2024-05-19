<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear categoria</title>
</head>
<body>
    <h1 class="title">Agregar categoria para comics:</h1>
    <form method="post" action="/categoria" id="formulario">
        @csrf

        <div class="input-group">
            <div class="modern-header">
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" id="categoria"/>
            </div>
            <div class="">
                <input type="submit" name="action" value="Guardar">
            </div>
        </div>
        
    </form>
</body>
</html>