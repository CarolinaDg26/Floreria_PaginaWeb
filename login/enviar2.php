<?php
require "conexion.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

echo $nombre;
echo $apellido;
echo $email;
echo $contrasena;

$insertar = "INSERT INTO sesiones (nombre, apellido, email, contrasena) VALUES ('$nombre','$apellido','$email','$contrasena')";
$verificar_usuario = mysqli_query($conectar ,"SELECT * FROM sesiones WHERE Usuario = '$email' ");


if(mysqli_num_rows($verificar_usuario) > 0) {
  echo '
  <script>
    alert("Este Usuario Ya está registrado");
    location.href="anadir_suario.php";
  </script>
  ';
  exit;
}


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