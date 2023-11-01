<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floreria Anthos</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
</head>
<body>
<?php include 'arriba.php';?>
    <div>
        <img class="imgbanner" src="imagenes/baner.jpg" alt="">
    </div>
    <br><br><br>
    <?php
 include "login/conexion.php";

 $todos_datos = "SELECT * FROM productos ORDER BY id ASC";

 $resultado = mysqli_query($conectar, $todos_datos);
    while($fila = mysqli_fetch_assoc($resultado)){
        ?>
         <div class="contflores">
            <img class="animate__animated animate__tada imgprod" src="login/<?php echo $fila["ruta"]?>" alt="">
            <p class="textoprod"><?php echo $fila["nombre"]?></p>
            <p class="precioprod"><?php echo $fila["precio"]?></p>
        </div>
        <?php
    }
 ?>
    <br><br><br>
    <div class="contbanner2">
        <div class="contcorreo">
            <h1 class="animate__animated animate__bounce animate__infinite	infinite">Suscribete para recibir nuestras <br> PROMOCIONES!!</h1>
        <form action="#" id="formulario" name="formulario">
            <input class="formulario" type="email" placeholder="Correo Electronico" name="email" id="email"><br><br>
            <input class="formulario" type="tel" placeholder="Celular"  name="celular" id="celular"><br><br>
            <input class="btn_sub" type="button" value="SUBSCRIBIRSE" onclick="validar_formulario()"/>
        </form>
        </div>
    </div>
    <br><br><br><br><br><br>
    <div class="contmap">
        <h1>PUBLICIDAD</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/E8Musb9Xnpk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <br><br><br><br><br><br>
    <?php include 'abajo.php';?>
</body>
<script>
  function validar_formulario(){
    if (document.getElementById('email').value.length == 0) {
        alert("Escribe tu email ")
        document.getElementById('email').focus()
        return 0
      }
    if (document.getElementById('celular').value.length == 0) {
        alert("Escribe su celular ")
        document.getElementById('celular').focus()
        return 0
      }
      document.formulario.submit()
  }
</script>
</html>