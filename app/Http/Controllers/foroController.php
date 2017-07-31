<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tema;
use App\Respuestas;


class foroController extends Controller
{
    public function principal(){
        return view('/foro/inicio');
    }
    public function res(){
        return view('/foro/respuestas');
    }
    public function formulario(){
        return view('/foro/formtema');
    }
    public function formresp(){
        return view('/foro/formrespuesta');
    }    
    public function getlistatemas()
    {
     	$lista=Tema::All();
     	return ['lista'=>$lista,'estado'=>1];
    }
    public function getlistarespuestas()
    {
        $listar=Respuestas::All();
        return ['listar'=>$listar,'estador'=>1];
    }
    public function registrar(Request $req)
    {
        try{
            $te=new Tema;
            $te->cod_usuario=$req->input('cod_usuario');
            $te->titulo=$req->input('titulo');
            $te->contenido=$req->input('contenido');
            $te->estado=1;
            $te->fecha=date("Y-m-d H:i:s");
            $te->save();
            return ['estado'=>1];
        }catch(Exception $e){
            return ['estado'=>0];
        }

        return "mala";
    }
    public function gettema($id){
        try{
            return Tema::find($id);
        }catch(Exception $e){
            
            return ['error'=>$e];
        }
    }
    public function respuesta(Request $req)
    {
        try{
            $re=new Respuestas;
            $re->cod_usuario=$req->input('cod_usuario');
            $re->cod_tema=$req->input('cod_tema');
            $re->contenido=$req->input('contenido');
            $re->estado=1;
            $re->fecha=date("Y-m-d H:i:s");
            $re->save();
            return ['estado'=>1];
        }catch(Exception $e){
            return ['estado'=>0];
        }
    }
    public function editar($id){
        try{
            return Tema::find($id);
        }catch(Exception $e){
            
            return ['error'=>$e];
        }
    }
    public function editando(Request $req)
    {
        try{
            $edi=Tema::find($req->input('id'));
            $edi->cod_usuario=$req->input('cod_usuario');
            $edi->titulo=$req->input('titulo');
            $edi->contenido=$req->input('contenido');
            $edi->save();
            return ['estado'=>1];
        }catch(Exception $e){
            return ['estado'=>0,'error'=>$e];
        }
    }
    public function borrar($id)
    {
        try{
            Tema::find($id)->delete();
            return ['estado'=>1];
        }catch(Exception $e){
            
            return ['estado'=>0,'error'=>$e];
        }
    }
}
