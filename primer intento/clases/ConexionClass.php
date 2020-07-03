<?php

    class Conectar{
        public function conexion(){
            $servidor = "localhost";
            $usuario = "root";
            $contrasenia = "";
            $baseDatos = "gestor";

            $conexion = mysqli_connect($servidor,
                                        $usuario,
                                        $contrasenia,
                                        $baseDatos);
            return $conexion;
            
        }
    }
?>