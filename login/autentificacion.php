<?php
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

if($email == 'floradmin' && $contrasena == '123'){
    session_start();
    $_SESSION["autentificado"]="SI";
    header("Location: inicio.php");
}else{
    echo'
    <script>
    alert("ERROR EN LA AUTENTIFICACIÓN")
    location.href = "inicio.php?errorusuario=SI";
    </script>
    ';
    header("Location: iniciar_sesion.php?errorusuario=SI");
}
?>