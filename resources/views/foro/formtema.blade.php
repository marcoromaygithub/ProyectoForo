<!--<form action="">
    <input type="text" ng-model="persona.nombre">
    <br>
    <input type="text" ng-model="persona.login">
    <input type="button" value="enviar" ng-click="onclickNuevo()">
</form>-->
<div class="form">
	<form method="post">
	{{csrf_field()}}
	<!--mostrar token
	{{csrf_token()}}-->

	<div class="form">
		<label>usuario</label>
		<input class="form-control" type="number" name="usuario" ng-model="tema.cod_usuario">
	</div>
	<br>
	<div class="form">
		<label>titulo</label>
		<input class="form-control" type="text" name="titulo" ng-model="tema.titulo">
	</div>
	<br>
	<div class="form">
		<label>contenido</label>
		<input class="form-control" type="text" name="contenido" ng-model="tema.contenido">
	</div>
	<br>
	<input type="button"  class="btn btn-succes" value="enviar" ng-click="onclickNuevo()">
	
</form>
</div>