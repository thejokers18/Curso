<?php
if(isset($_SESSION["id"])){
?>    
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <center
  ><ul>
    <a href="">Inicio</a>
    <a href="usuario.php">Usuarios</a>
    <a href="Productos.php">Productos</a>
    <a href="index.php">Cerrar Sesion</a>
  </ul>
</center>
</nav>
<?php
}    
?>