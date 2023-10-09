<?php
class Controller{
    protected $model;
    protected $session;

    public function view($vista){
        $ruta="views/".$vista.".php";
        if(file_exists($ruta)){
            require_once("views/main/header.php");
            require_once("views/main/menu.php");
            require_once($ruta);
            require_once("views/main/footer.php");
        }else{
            require_once("views/main/header.php");
            require_once("views/main/menu.php");
            require_once("views/errores/errores.php");
            require_once("views/main/footer.php");
        }
    } 
    protected function loadModel($m){
        $ruta="models/".$m.".php";
        if(file_exists($ruta)){
            require_once($ruta);
            $this->model= new $m();
        }else{
            $this->model=0;
        }
    }
    protected function loadsession(){
        require_once("core/session.php");
        $this->session= new Session();
    }
    protected function redireccion ($controlador, $metodo="", $param=""){
        if($metodo==""){
            $metodo="consultar";
        }
        if($param!=""){
            $param="&p=".serialize($param);
        }
        header("location:?c=".$controlador."&m=".$metodo.$param);
    }
    public function Validasession()
    {

        if (isset($_SESSION['id'])) {
            $resp = true;
        } else {
            $resp = false;
        }
        return $resp;
    }
}

?>