@extends('layouts/otrolayout')
@section('contenido')
<br>
<br>
<br>
<div ng-app="appforo" ng-controller="foroController">
<h1>Lista de respuestas</h1>
    <table class="table">
        <tr>
            <th>cod_usuario</th>
            <th>cod_tema</th>
            <th>contenido</th>
            <th>fecha</th>
        </tr>
        
        <tr ng-repeat="item in respuesta">
            <td>@{{item.cod_usuario}}</td>
            <td>@{{item.tema}}</td>
            <td>@{{item.contenido}}</td>
            <td>@{{item.fecha}}</td>
        </tr>

    </table>
</div>
<script type="text/javascript" src="/js/angular.min.js"></script>
<script type="text/javascript" src="/js/angular-ui-route.js"></script>
<script type="text/javascript" src="/js/appforo.js"></script>
@endsection