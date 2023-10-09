<?php
$dato=$this->datos;
?>
<?php
if(isset($this->msj)){
  echo "".$this->msj."</div>";
}
?>
<div>
  <a href="?c=user&m=crearuser" class="btn btn-info">Crear Usuario</a>
</div>
<div class="container-sm">
<table class="table table-sm table-striped" align="center">
  <thead>
    <tr >
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cédula</th>
        <th>Usuario</th>
        <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
  </div>  
    <?php
    foreach ($dato as $dat) {
        $ids=serialize(["id"=>$dat->id]);
        $id=$dat->id;
    echo "<tr>";
    echo "<td>" . $dat->id. "</td>"; 
    echo "<td>" . $dat->nombre. "</td>";
    echo "<td>" . $dat->apellido. "</td>";
    echo "<td>" . $dat->cedula. "</td>";
    echo "<td>" . $dat->usuario. "</td>";
    echo "<td> <a href='#' onclick='consultarUser(".$id.");' id='user".$id."' data-id=".$ids."><img src='./public/img/bx-street-view.svg' width='30px'> </a> ";
    echo "<a href='editar.php?id=" . $dat->id. "'><img src='./public/img/bxs-edit.svg' width='30px'> </a> ";
    echo "<a href='eliminar.php?id=" . $dat->id. "'><img src='./public/img/bxs-eraser.svg' width='30px'> </a>";
    echo "</tr>";
    
}
?>