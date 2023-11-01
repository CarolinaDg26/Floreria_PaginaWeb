<?php
require "conexion.php";
$id = $_GET['id'];

echo $id;

$eliminar = "DELETE FROM productos WHERE id = '$id'";
$resultado = mysqli_query($conectar, $eliminar);

if($resultado){
    header("location:ver:productos.php");
}else{
    echo "No se pudo eliminar el dato";
}
?>