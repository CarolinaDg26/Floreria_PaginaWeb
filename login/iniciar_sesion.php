<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floreria Anthos</title>
    <link rel="stylesheet" href="estilo6.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
</head>
<body>
    <div class="contbanner2">
        <div>
        <h1 class="animate__animated animate__backInLeft serv">¡¡Iniciar Sesión!!</h1>
        </div>
    </div>
    <br><br><br><br>
    <div class="contenedorformulario">
        <h1> <img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor.png" alt=""> Iniciar Sesión Usuario <img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor.png" alt=""> </h1>
      <form action="autentificacion.php" id="forml" name="forml" method="POST">
        <input placeholder="Correo Electronico o Número de teléfono" type="text" name="email" id="email" class="formulario"><br><br>
        <input placeholder="Contraseña" type="password" name="contrasena" id="contrasena" class="formulario">
        <br><br>
        <input class="btn_amar" type="button" value="Iniciar sesión" onclick="validar_formulario()"/>

        <?php
        $erroremail= isset($_GET['erroremail']);
        if($erroremail=="SI"){
          echo '<h3><br>Datos incorrectos</h3>';
        }
        ?>

      </form>
    </div>
    <br><br><br><br><br>
    <?php include '../abajo.php';?>
</body>
<script>
  function validar_formulario(){
    if (document.getElementById('email').value.length == 0) {
        alert("Escribe tu email ")
        document.getElementById('email').focus()
        return 0
      }
    if (document.getElementById('contrasena').value.length == 0) {
        alert("Escribe tu contraseña ")
        document.getElementById('contrasena').focus()
        return 0
      }
      document.forml.submit()
  }
</script>
</html>