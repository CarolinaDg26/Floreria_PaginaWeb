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
        <h1 class="animate__animated animate__backInLeft serv">¡¡Agregar Usuario!!</h1>
        </div>
    </div>
    <br><br><br><br>
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
        </div> <br><br><br>
    <div class="contenedorformulario">
    <h1><img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor.png" alt=""> Usuarios Nuevos <img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor.png" alt=""> </h1>
    </div>
    <br><br>
    <a class="btn_amar2" href="agregar_usuario.php">Agregar Usuarios</a>
        <a class="btn_amar2" href="usuarios.php">Ver Usuarios</a> <br><br>
    <div class="contenedorimg">
        <div class="tablas">
        <form action="enviar2.php" id="formulario" name="formulario" method="POST">
        <label class="label1" for="">Tu nombre</label><br>
        <input class="apartados" placeholder="Nombre" type="text" name="nombre" id="nombre" class="formulario"><br><br>
        <label class="label1" for="">Tu Apellido</label><br>
        <input class="apartados" placeholder="Apellido" type="text" name="apellido" id="apellido" class="formulario"><br><br>
        <label class="label2" for="">Número de teléfono o Correo Electronico</label><br>
        <input class="apartados" type="text" name="email" id="email" class="formulario"><br><br>
        <label class="label1"  for="">Contraseña</label><br>
        <input class="apartados"  placeholder="Debe tener al menos 6 caracteres" type="password" name="contrasena" id="contrasena" class="formulario">
        <br><br>
        <input class="btn_amar" type="button" value="Guardar" onclick="validar_formulario()"/>

      </form>
    </div><br><br><br>
    <br><br><br><br><br>
    <?php include '../abajo.php';?>
</body>
<script>
  function validar_formulario(){
    if (document.getElementById('nombre').value.length == 0) {
        alert("Escribe tu nombre ")
        document.getElementById('nombre').focus()
        return 0
      }
    if (document.getElementById('apellido').value.length == 0) {
        alert("Escribe tu apellido ")
        document.getElementById('apellido').focus()
        return 0
      }
    if (document.getElementById('email').value.length == 0) {
        alert("Escribe tu email o número de telefono ")
        document.getElementById('email').focus()
        return 0
      }
    if (document.getElementById('contrasena').value.length == 0) {
        alert("Escribe tu contraseña ")
        document.getElementById('contrasena').focus()
        return 0
      }
      document.formulario.submit()
  }
</script>
</html>