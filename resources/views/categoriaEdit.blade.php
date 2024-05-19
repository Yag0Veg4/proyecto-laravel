<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar categoria</title>
</head>
<body>
    <h1 class="title">MODIFICAR {{$categoria->categoria}}</h1>
	<form method="POST" action="/categoria/{{$categoria->id}}" id="formulario">
		@csrf
		@method('patch')
	
		<div class="">
			<label for="categoria">Categoria</label>
			<input type="text" name="categoria" id="categoria" value="{{$categoria->categoria}}"/>
		</div>
		<div class="center-align">
			<input type="submit" name="action" value="Guardar" class="">
		</div>

	</form>
</body>
</html>