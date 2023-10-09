<?php
class UserModel extends DataBase{
    public function __construct(){
        parent::__construct();
    }

    public function consulta($id=""){
        if($id==""){
            $conca="";
            $campos=array(':status' => 3, ':sts' => 0);
        }else{
            $conca=" AND id=:i";
            $campos=array(':status' => 3, ':sts' => 0,':i'=>$id);
        }
    $consulta="SELECT * FROM users WHERE status_id !=:status AND status_id!=:sts".$conca;
    $sql=$this->conexion->prepare($consulta);
    $sql->execute($campos);
    $resp=$sql->FetchAll(PDO::FETCH_OBJ);

    return $resp;
    }
    public function loginvalidar($usuario, $contrasena){
        $sql = "select * from users where usuario=:e AND status_id !=:status;";
        $campos=array(':e'=>$usuario,
                        ':status'=>3);
        $sql1=$this->conexion->prepare($sql);
        $sql1->execute($campos);
        $resp=$sql1->fetchAll(PDO::FETCH_OBJ);
        if(count($resp)>0){
            if(password_verify($contrasena, $resp[0]->clave)){
                $r=$resp[0];
            }else{
                $r=2;
            }
        }else{
            $r=1;
        }
        return $r;
    }
    public function consultar($nombre, $apellido, $cedula, $usuario, $contrasena){
        $consulta="INSERT INTO `users`( `nombre`, `apellido`, `cedula`, `usuario`, `clave`, status_id) VALUES (:nom, :ape, :ced, :user, :clave, :sts)";
        $campos=array(':nom'=>$nombre, ':ape'=>$apellido, ':ced'=>$cedula,':user'=>$usuario, ':clave'=>password_hash($contrasena, PASSWORD_BCRYPT),':sts'=>1);
        $sql=$this->conexion->prepare($consulta);
        $resp=$sql->execute($campos);
        //$resp=$sql->fetchALL(PDO::FETCH_OBJ);
        return $resp;
    }
}


?>