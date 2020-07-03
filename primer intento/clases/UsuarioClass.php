<?php

require_once "ConexionClass.php";

class Usuario extends Conectar{

    public function agregarUsuarios($datos){
        $conexion = Conectar::conexion();

        if(self::buscarRepetido($datos['usuarioUser'])){
            return 2;
        }else{
            $sql = "INSERT INTO tablausuarios (nombreUser, fechaNaciUser, correoUser,
            usuarioUser,contraseñaUser) VALUES(?, ?, ?, ?, ?)";
    
            $query = $conexion->prepare($sql);
            $query->bind_param('sssss', $datos['nombre'],
                                        $datos['fechaNacimiento'],
                                        $datos['correo'],
                                        $datos['usuario'],
                                        $datos['contrasenia']);
    
            $exito = $query->execute();
            $query->close();
            return $exito;
        }

       
    }

    public function buscarRepetido($usuario){
        $conexion = Conectar::conexion();

        $sql = "SELECT usuarioUser FROM tablausuarios WHERE usuarioUser = '$usuario'";
        $result = mysqli_query($conexion, $sql);
        $datos = mysqli_fetch_array($result);

        if($datos['usuarioUser'] != "" || $datos['usuarioUser'] == $usuario){
            return 1;
        }else{
            return 0;
        }
    }

    public function loginUsuario ($usuario, $password){
        $conexion = Conectar::conexion();

        $sql = "SELECT count (*) as existeUsuario
                FROM tablausuarios
                WHERE usuarioUser = '$usuario'
                AND contraseñaUser = '$password'";
        $result = mysqli_query($conexion, $sql);

        $respuesta = mysqli_fetch_array($result)['existeUsuario'];

        if ($respuesta > 0){
            $_SESSION['usuarioUser'] = $usuario;

            $sql = "SELECT id_usuario
                    FROM tablausuarios
                    WHERE usuarioUser = '$usuario'
                    AND contraseñaUser = '$password'";
            $result = mysqli_query($conexion, $sql);
            $respuesta = mysqli_fetch_row($result)['0'];

            $_SESSION['id_usuario'] = $idusuario;

            return 1; 
        }else{
            return 0;
        }
            
    }
}
?>