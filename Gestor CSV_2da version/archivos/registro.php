<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
</head>

<body>
    <div class ="contenedor">
    <hr>
    <h1>Registro de usuario</h1>    
    <hr>
    <div class ="row">
        <div class ="col-sm-4"></div>
        <div class ="col-sm-4">
            <form id= "frmRegistro">
                <label>Nombre completo</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
                <label>Fecha de nacimiento</label>
                <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control">
                <label>Correo</label>
                <input type="text" name="correo" id="correo" class="form-control">
                <label>Nombre de usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control">
                <label>Contraseña</label>
                <input type="password" name="contra" id="contra" class="form-control">
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
    </div>
    <script src="librerias/sweetalertmin.js"></script>
</body>
</html>