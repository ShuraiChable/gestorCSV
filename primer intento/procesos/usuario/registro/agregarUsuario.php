<?php
require_once "../../../clases/UsuarioClass.php";

//echo "si paso";
//print_r ($_POST);

$contrasenia = sha1($_POST['contra']);
$datos = array(
    "nombre" => $_POST['nombre'],
    "fechaNacimiento" => $_POST['fechaNacimiento'],
    "correo" => $_POST['correo'],
    "usuario" => $_POST['usuario'],
    "contrasenia" => $contrasenia
);

$usuario = new UsuarioClass();
echo $usuario->agregarUsuarios($datos);
?>