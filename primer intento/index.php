<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="estilos/login.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
</head>

<body>
<div class="wrapper fadeInDown" style="background-image: url(imagenes/azul.jpg); background-size: 100%">
  <div id="formContent">

    <div class="fadeIn first">
      <img src="imagenes/carpeta.png" id="icon" alt="User Icon" />
      <h2>GESTOR DE ARCHIVOS</h2>
    </div>

    <form method="POST" id="frmLogin" onsubmit="return logear()">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="usuario" required="">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="contraseña" required=""> 
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="registro.php">Registrate aquí</a>
    </div>
  </div>
</div>

<script src="librerias/jquery-3.5.1.min.js"></script>
<script src="librerias/sweetalert.min.js"></script>

<script>
function logear(){
  //alert("hola");
  $.ajax({
    type: "POST",
    data: $('frmLogin').serialize(),
    url:"procesos/usuario/login/loginn.php",
    success: function(respuesta){
      //alert(respuesta);
      respuesta = respuesta.trim();
      if(respuesta == 1){
        window.location = "vistas/inicio.php"
      }else{
        swal(":(", "Error al entrar");
      }
    }
  })
  return false;
}
</script>
</body>
</html>