<?php
include_once("core/database.php");
include_once("core/controller.php");

if(!isset($_GET['c'])){
    include_once("controllers/main.php");
    $prueba= new Main;
    $prueba->index();
}else{
    $controlador=$_GET['c'];
    if($controlador=='Session'){
        include_once("core/".$controlador.".php");
    }else{
        include_once("controllers/".$controlador.".php");
    }
    $controlador= new $controlador;
    if(isset($_GET['m'])){
        $metodo=$_GET['m'];
    }else{
        $metodo='index';
    }
    if(!isset($_GET['p'])){
        call_user_func(array($controlador,$metodo));
    }else{
        $parametros=$_GET['p'];
        call_user_func(array($controlador,$metodo),$parametros);
    }
}
?>

