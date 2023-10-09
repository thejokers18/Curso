<div class="container-sm">
<div class="txtcenter">
    <h2>Registro de  Usuario</h2>
</div>    

<div id="mensaje"></div>

<?php
if(isset($this->msj)){
    echo $this->msj;
}

?>
<form action="?c=user&m=guardaruser" method="POST"  onsubmit="validar(event)" id="formid">
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nom" name="nom">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="ape" name="ape">
  </div>
<div class="mb-3">
    <label for="" class="form-label">Cédula</label>
    <input type="text" class="form-control" id="ced" name="ced">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="us" name="us">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="clave" name="clave">
  </div>
  <button type="submit"  class="btn btn-primary">Crear</button>
</form>
</div>

