<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
</head>

<body style="background-image: url(imagenes/azul.jpg); background-size: 100%">
    <div class ="contenedor">
    <hr>
    <h1 align="center" style="background: #3DAEF7">Registro de usuario</h1>    
    <hr>
    <div class ="row">
        <div class ="col-sm-4"></div>
        <div class ="col-sm-4">
            <form id= "frmRegistro" method="POST" onsubmit="return agregarUsuarioNuevo()">
                <label>Nombre completo</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required="">
                <label>Fecha de nacimiento</label>
                <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required="">
                <label>Correo</label>
                <input type="email" name="correo" id="correo" class="form-control" required="">
                <label>Nombre de usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" required="">
                <label>Contraseña</label>
                <input type="password" name="contra" id="contra" class="form-control" required="">
                <br>
                <div class="row">
                    <div class= "col-sm-6 text-left">
                        <button class ="btnRegistrar btn-primary">Registrar</button>
                    </div>
                    <div class= "col-sm-6 text-right">
                    <a href="index.php" class="btnVolver">Volver</a>
                    </div>
                </div>        
            </form>
        </div>
        <div class ="col-sm-4"></div>
    </div>
    
    <script src="librerias/jquery-3.5.1.min.js"></script>
    <script src="librerias/sweetalert.min.js"></script>
 
    <script type="text/javascript">
        function agregarUsuarioNuevo(){
            $.ajax({
                method: "POST",
                data: $('#frmRegistro').serialize(),
                url: "procesos/usuario/registro/agregarUsuario.php",
                success: function(respuesta){
                    //alert(respuesta);
                    //console.log(respuesta);
                    if(respuesta == 1){
                        $("#frmRegistro")[0].reset();
                        swal(":D", "Usuario agregado con exito");
                    } else if(respuesta == 2){
                        swal("Este usuario ya existe, por favor escriba otro");
                            }else{
                                swal(":(", "No se pudo crear el usuario");
                            }
                }
            });
            return false;
        }
    </script>
    
</body>
</html>