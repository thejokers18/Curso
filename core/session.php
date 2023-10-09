<?php
class Session{
    public function __construct(){
        session_start();
    }
    public function crear($id,$nombre){

        $_SESSION['id']=$id;
        $_SESSION['nombre']=$nombre;
    }
    public function consultarId(){

        return $_SESSION['id'];
    }
    public function cerrar(){

        session_unset();
        session_destroy();
        header("Location:index.php");
    }
}
?>