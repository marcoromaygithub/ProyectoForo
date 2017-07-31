@extends('layouts/otrolayout')
@section('contenido')
<br>
<br>
<br>

<div ng-app="appforo" ng-controller="foroController">
<button  class="btn btn-succes" ui-sref="Formulario" >nuevo</button>
<div ui-view="formtema"> 
</div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar respuesta</h4>
        </div>
        <div class="modal-body" ui-view="formres" >
        
        </div>
            <div class="modal-footer">
        
            </div>
        </div>
    </div>
    </div>
    <h1>Lista de temas</h1>
    <table class="table">
        <tr>
            <th>cod_usuario</th>
            <th>titulo</th>
            <th>contenido</th>
            <th>fecha</th>
        </tr>
        
        <tr ng-repeat="item in temas">
            <td>@{{item.cod_usuario}}</td>
            <td>@{{item.titulo}}</td>
            <td>@{{item.contenido}}</td>
            <td>@{{item.fecha}}</td>
            <td><a href="#" class='btn btn-success' ui-sref="Formulario" ng-click="onclickeditar(item)" >editar</a></td>
            <td><a href="#" class='btn btn-success'  ng-click="onclickborrar(item.id)" >borrar</a></td>
            <td><a href="#" class='btn btn-success' data-toggle="modal" data-target="#myModal" ui-sref="FormRespuesta" ng-click="onclickrespuesta(item.id)" >publicar comentario</a></td>
        </tr>

    </table>
        
</div>
<script type="text/javascript" src="/js/angular.min.js"></script>
<script type="text/javascript" src="/js/angular-ui-route.js"></script>
<script type="text/javascript" src="/js/appforo.js"></script>
@endsection