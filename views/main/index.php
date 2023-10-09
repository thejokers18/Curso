<?php
if(isset($this->msj)){
  echo "<div class='error centrar'>".$this->msj."</div>";
}
?>
<div class="login">
  <div class="form" align = "center">
    <h4 class="text-white">Login</h4>
    <form action="?c=user&m=login" method="POST">
    <table id="table1" border="1">
        <tr>
            <td class="text-white">Usuario</td>
            <td><input type="text" id="usuario" name="user"></td>
        </tr>
        <tr>
            <td class="text-white" for="clave">Clave</td>
            <td><input type="password" id="clave" name="clave"></td>
        </tr>
        <tr>
        <td colspan="2"><center><button type="submit">Enviar</button></center></td>
        </tr>
    </table>
    </form>
  </div>
</div>