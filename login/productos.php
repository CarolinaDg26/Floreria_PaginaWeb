<!DOCTYPE html>
<html lang="en">
<head>
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
        <h1 class="animate__animated animate__backInLeft serv">¡¡PRODUCTOS!!</h1>
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
         <h1><img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor.png" alt=""> Agregar Productos <img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor.png" alt=""> </h1>
       </div>
    <center>
        <br>
        <a class="btn_amar2" href="productos.php">Agregar Productos</a>
        <a class="btn_amar2" href="ver_productos.php">Ver Productos</a>
        <br><br><br>
        <div class="tablas">
        <form action="enviar3.php" id="formulario2" name="formulario2" method="POST" enctype="multipart/form-data">
        <label class="label3" for="">Nombre del Producto</label><br>
        <input class="apartados" type="text" name="nombre" id="nombre" class="formulario"><br><br>
        <label class="label3" for="">Descripción del Producto</label><br>
        <input class="apartados" type="text" name="descripcion" id="descripcion" class="formulario"><br><br>
        <label class="label3" for="">Precio del Producto</label><br>
        <input class="apartados" type="text" name="precio" id="precio" class="formulario"><br><br>
        <label class="label4" for="">Subir foto del Producto: <input type="file" name="imagen"></label>
        <br><br>
        <input class="btn_amar" type="button" value="Guardar" onClick="validar_formulario2()"/>

      </form>
      </div>
    </div>
    </div>
    </div>
    </div>
    </center>
    </div><br><br><br>
    <br><br><br><br><br>
    <?php include '../abajo.php';?>
</body>
<script>
  function validar_formulario2(){
    if (document.getElementById('nombre').value.length == 0) {
        alert("Escribe el nombre del producto ")
        document.getElementById('nombre').focus()
        return 0
      }
    if (document.getElementById('descripcion').value.length == 0) {
        alert("Escribe la descripción del producto ")
        document.getElementById('descripcion').focus()
        return 0
      }
    if (document.getElementById('precio').value.length == 0) {
        alert("Escribe el precio del producto ")
        document.getElementById('precio').focus()
        return 0
      }
      document.formulario2.submit()
  }
</script>
</html>