<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include "seguridad.php";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floreria Anthos</title>
    <link rel="stylesheet" href="estilos5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
</head>
<body>
    <div class="contbanner2">
        <div>
        <h1 class="animate__animated animate__backInLeft serv">¡¡Panel Administrativo!!</h1>
        </div>
    </div>
    <br><br><br><br>
    <center>
    <div class="contenedorprincipal">
        <div class="contenedorbot">
            <img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor.png" alt=""><br>
            <a href="inicio.php">INICIO</a>
        </div>
        <div class="contenedorbot">
            <img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor.png" alt=""><br>
            <a href="usuarios.php">USUARIOS</a>
        </div>
        <div class="contenedorbot">
            <img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor.png" alt=""><br>
            <a href="productos.php">PRODUCTOS</a>
        </div>
        <div class="contenedorbot">
            <img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor.png" alt=""><br>
            <a href="cerrar_sesion.php">CERRAR SESIÓN</a>
        </div>
        <div class="contenedorbtn">
            <p class="animate__animated animate__backInUp"><img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor2.png" alt="">Bienvenido Administrador<img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor2.png" alt=""></p>
            <img class="animate__animated animate__zoomInDown" src="imagenes/logo.png" alt="">
        </div>
    </div>
    </center>
    <br><br><br><br><br>
    <?php include '../abajo.php';?>
</body>
</html>