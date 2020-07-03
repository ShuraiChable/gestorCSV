<?php
//print_r($_POST);
session_start();

require_once "../../../clases/UsuarioClass.php";
$usuario = $_POST['login'];
$password = sha1($_POST['pasword']);

$usuarioObj = new UsuarioClass();

echo $usuarioObj->loginUsuario($usuario, $password);
?>