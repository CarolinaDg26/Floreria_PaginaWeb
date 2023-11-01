<?php
require "conexion.php";
$id = $_GET['id'];

echo $id;

$eliminar = "DELETE FROM sesiones WHERE id = '$id'";
$resultado = mysqli_query($conectar, $eliminar);

if($resultado){
    header("location:usuarios.php");
}else{
    echo "No se pudo eliminar el dato";
}
?>