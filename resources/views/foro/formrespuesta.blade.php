<div class="form">
	<form method="post">
	{{csrf_field()}}
	<!--mostrar token
	{{csrf_token()}}-->

	<div class="form">
		<label>usuario</label>
		<input class="form-control" type="number" name="usuario" ng-model="respuesta.cod_usuario">
	</div>
	<br>
	<div class="form">
		<label>Tema</label>
		<input class="form-control" type="number" name="tema" ng-model="respuesta.cod_tema">
	</div>
	<br>
	<div class="form">
		<label>contenido</label>
		<input class="form-control" type="text" name="contenido" ng-model="respuesta.contenido">
	</div>
	<br>
	<input type="button"  class="btn btn-succes" value="Publicar" ng-click="onclicknuevares()">
	
</form>
</div>