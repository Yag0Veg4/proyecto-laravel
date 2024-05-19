<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/comic/{{$comic->id}}" method="post" id="form-save-comic">
        @csrf
        @method('patch')

        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{$comic->nombre}}">
        </div>
        <div>
            <label for="editorial">Editorial</label>
            <input type="text" name="editorial" id="editorial" value="{{$comic->editorial}}">
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="decimal" name="precio" id="precio" value="{{$comic->precio}}">
        </div>
        <div class="">
            <label for="categorias">Categorías</label>
            <select id="categorias" name="categorias[]" multiple>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}"
                        @if($comic->categorias->contains($categoria->id)) selected @endif>
                        {{ $categoria->categoria }}
                    </option>
                @endforeach
            </select>
        </div>
        <input type="submit" name="action" value="Guardar comic">
    </form>
</body>
</html>