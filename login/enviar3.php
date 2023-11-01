<?php
require "conexion.php";

$rutaEnServidor = 'imagenes';
$rutaTemporal = $_FILES['imagen']['tmp_name'];
$nombreImagen = $_FILES['imagen']['name'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

echo $nombreImagen;
echo $nombre;
echo $descripcion;
echo $precio;

date_default_timezone_set('UTC');
$nombreImagenunico = date('Y-m-d-h-i-s'). "-" . $nombreImagen;

$rutaDestino = $rutaEnServidor . '/' . $nombreImagenunico; //imagenes/nombrefoto.jpg

$pesofoto = $_FILES['imagen']['size'];
if ($pesofoto > 900000){
    echo '
    <script>
     alert("Es demasiado pesada la foto de perfil");
     window.history.go-1;
    </script>
    ';
    exit;
}

$tipofoto = $_FILES['imagen']['type'];
if($tipofoto== "image/jpeg" or $tipofoto == "image/png" or $tipofoto == "image/gif" or $tipofoto == "image/webp" or $tipofoto == "image/jpg" or $tipofoto == "image/svg"){
    move_uploaded_file($rutaTemporal,$rutaDestino);
}else{
    echo'
   <script>
   alert("No es una imagen");
   window.history.go(-1);
   </script>
    ';
    exit;
}

$insertar = "INSERT INTO productos (ruta, nombre, descripcion, precio) VALUES ('$rutaDestino','$nombre','$descripcion','$precio')";
$verificar_usuario = mysqli_query($conectar ,"SELECT * FROM productos WHERE Usuario = '$nombre' ");


$query=mysqli_query($conectar,$insertar);
if($insertar){
  echo '
  <script>
  alert("SI SE GUARDARON LOS DATOS CORRECTAMENTE")
  //location.href="usuarios.php"
  </script>';
  echo '--------------------------';
  echo $query;

}
else{
  echo '
  <script>
  alert("NO SE GUARDARON LOS DATOS CORRECTAMENTE");
  location.href="anadir_usuarios.php";
  </script> ';
}
?>