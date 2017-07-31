var app=angular.module('appforo',['ui.router']);


app.controller('foroController',function($scope,$http,$state){
    $scope.tema={};
    $scope.temas=[];
    $scope.respuesta=[];
    function cargar_tema(){
        $http.get('/getlistatemas').then(function(server){
            if(server.data.estado==1)
                $scope.temas=server.data.lista;
            else
                alert("Error en el server"+server.data.error);
        });
    }
    cargar_tema();

    function cargar_respuestas(){
        $http.get('/getlistarespuestas').then(function(server){
            if(server.data.estador==1)
                $scope.respuesta=server.data.listar;
            else
                alert("Error en el server"+server.data.error);
        });
    }
    cargar_respuestas();
    $scope.onclickNuevo=function(){
        console.log($scope.tema);
        $http.post($scope.editar==false?'/foro/registrar':'/foro/editando',$scope.tema).then(function(server){
            console.log(server.data);
            if(server.data.estado==1){
                cargar_tema();
                $state.go('ocultar');
                alert("Registro exitoso");
            }
            $scope.editar=false;     
            $scope.tema={};
        });
    }
    $scope.onclickborrar=function(id){
        if(confirm('estas seguro de borra')){
            ///url /musica/2/ApiBorrar
            $http.delete('/foro/'+id+'/borrar').then(server=>{
                if(server.data.estado==1)
                    cargar_tema();
            });
        }
        else{

        }
    }
    $scope.editar=false;
    $scope.onclickeditar=function(item){
        $http.get('/foro/'+item.id+'/editar').then(function(server){
            $scope.tema=server.data;
            $scope.editar=true;
        });
    }
   
    $scope.onclickrespuesta=function(item){
        $http.get('/foro/'+item+'/gettema').then(function(server){
            $scope.respuesta.cod_tema=server.data.id;
        });
    }
     $scope.respuesta={};
    $scope.onclicknuevares=function(){
        $http.post('/foro/respuesta',$scope.respuesta).then(function(server){
             if(server.data.estado==1)
                alert("Registro exitoso");
        });
    }
    /*$scope.listaRese=[];
    $scope.total=0;
    $scope.onclickagregar=function(item){
        $scope.total+= Number.parseFloat(item.costo);
        $scope.listaRese.push(item);
    }
    $scope.onclickGuardar=function(){
        $http.post('/hotel/crearreserva',
        {id_cliente:$scope.id_cliente,estancia:$scope.listaRese})
        .then(function(ser){
            $scope.listaRese=[];
             $scope.total=0;
        });
    }
    $scope.onchangecliente=function(){
        $http.post('/hotel/clientea',{cliente:$scope.cliente}).then(function(server){
            if(server.data.estado==1)
                $scope.clientes=server.data.lista;
            else
                alert("Error en el server"+server.data.error);
        });
    }*/
   
});
app.config(function($stateProvider){
    $stateProvider
    .state('Formulario',{
        views:{
            'formtema':{
                templateUrl:'/creartema',
            }
        }
    })
    .state('ocultar',{
        views:{
            'formtema':{
                template:'',
            }
        }
    })
    .state('FormRespuesta',{
        views:{
            'formres':{
                templateUrl:'/crearrespuesta',
            }
        }
    })
});