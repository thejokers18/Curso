<?php
class User extends Controller{
    public $msj;
    public $datos;
    public function __construct(){
        $this->loadModel("usermodel");
        $this->loadsession();
    }
    public function index(){
        if($this->ValidaSession()==false){
            $this->redireccion("main","index");
        }
         
        if(isset($_GET['p'])){
          $this->msj=unserialize($_GET['p']);
        }
        $this->consultar();
    }
    public function login(){
        $correo=$_POST['user'];
        $clave=$_POST['clave'];
        if($correo=="" || $clave==""){
            $this->msj="Algunos de los campos estan vacios";
            $this->view=("main/index");
        }else{
            if(!is_object($this->model)){
                $this->msj="Error de conexion a base de datos";
                $this->view=("main/index");
            }else{
                $x=$this->model->loginvalidar($correo, $clave);
                if(is_object($x)){
                    //si
                    $nombre=$x->nombre;
                    $id=$x->id;
                    $this->session->crear($id, $nombre);
                    $this->redireccion("user");
                    //header();
                }else{
                    //si no es un objeto
                    $this->msj="Alguno de los datos son invalidos";
                    $this->view=("main/index");
                }
            }
        }
    }
    public function consultar($id=""){
        $this->datos=$this->model->consulta($id);
        
        if($id!=""){
             
            $this->view("user/consultaruser");
        }else{
             
            $this->view("user/consultar"); 
        }
    }
    public function consultaUser($id){
        $id=unserialize($id);
        $id=$id["id"];
        $this->datos=$this->model->consulta($id);
        $this->view("user/consultaruser");
    }
    public function crearuser(){
        $this->view("user/crearuser");
    }

    public function guardaruser(){
        $nombre=$_POST['nom'];
        $apellido=$_POST['ape'];
        $cedula=$_POST['ced'];
        $usuario=$_POST['us'];
        $clave=$_POST['clave'];

        $recibe= $this->model->consultar($nombre, $apellido, $cedula, $usuario, $clave);
        if($recibe == 1){
            $this->msj="Usuario creado con exito";
            $msj=array('msj'=>$this->msj);
            $this->redireccion("user",'index',$this->msj);
        }
    }
}
?>