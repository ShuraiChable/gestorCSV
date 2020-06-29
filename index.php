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
<div class="wrapper fadeInDown">
  <div id="formContent">

    <div class="fadeIn first">
      <img src="imagenes/carpeta.png" id="icon" alt="User Icon" />
      <h2>GESTOR DE ARCHIVOS</h2>
    </div>

    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="usuario">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="contraseña">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="registro.php">Registrate aquí</a>
    </div>

  </div>
</div>
<script src="librerias/sweetalertmin.js"></script>
</body>
</html>