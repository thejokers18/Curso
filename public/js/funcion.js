function consultarUser(id){
    var user=document.getElementById('user'+id);
    var ids=user.getAttribute('data-id');
    window.location.href="?c=user&m=consultaUser&p="+ids;
}

function editaUser(id){
    var user=document.getElementById('user'+id);
    var ids=user.getAttribute('data-id');
    window.location.href="?c=user&m=editaUser&p="+ids;
}

function validar(event) {
    event.preventDefault(); // Agregamos preventDefault() al inicio de la función
    var nombre = document.getElementById("nom").value; 
    var apellido = document.getElementById("ape").value;
    var cedula = document.getElementById("ced").value;
    var usuario = document.getElementById("us").value;
    var clave = document.getElementById("clave").value;
  
    if ((nombre== "") || (apellido== "") || (cedula == "") || (usuario=="") || (clave == "")) {  
      //COMPRUEBA CAMPOS VACIOS
      alert("Los campos no pueden quedar vacios");
      return false;
    }else{
        document.getElementById("formid").submit();
    }
  }