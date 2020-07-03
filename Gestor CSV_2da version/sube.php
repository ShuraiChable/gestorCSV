<?php

    //print_r($_FILES);
    $formato=array('.pdf', '.doc', '.docx', '.txt', '.html');
    $nombre=$_FILES['archivo']['name'];
    $guardado=$_FILES['archivo']['tmp_name'];

    if(isset($_POST['subir'])){
        $extension=substr($nombre, strrpos($nombre, '.'));
        if(in_array($extension, $formato)){
            if(file_exists('archivos')){
                if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
                    echo "Archivo guardado con exito";
                }else{
                    echo "Ocurrio un error";
                }
            }
        }else{
            echo "No se permite el formato";
        }
    }
?>