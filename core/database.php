<?php
class Database{
    protected $conexion;
    private $servidor=['host'=>'localhost',
    'usuario'=>'imarquina',
    'clave'=>'Avril.3364',
    'bd'=>'test',
    'charset'=>'utf8mb4'];
    public function __construct(){
        $this->conectar();
    }
    public function conectar(){
        try{
            $host=$this->servidor['host'];
            $usuario=$this->servidor['usuario'];
            $clave=$this->servidor['clave'];
            $db=$this->servidor['bd'];
            $utf=$this->servidor['charset'];

            $this->conexion= new PDO("mysql:host={$host}:3306;dbname={$db};charset={$utf}", $usuario, $clave);
            return $this->conexion;
        }catch(Exception $e){
            return $e->getTraceAsString();
        }
    }
}
?>