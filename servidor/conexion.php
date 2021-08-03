<?php 
function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "login";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db);
    
    
    if($conexion->connect_errno){
        echo 'Error en la conexion'.$conexion->connect_error;
        }else{
        
        }

    return $conexion;
    
}
?>