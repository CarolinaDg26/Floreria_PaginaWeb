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
        </div><br><br>
        <div class="contenedorbtn">
            <p> <img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor2.png" alt="">Productos<img class="animate__animated animate__swing animate__infinite" src="imagenes/categorias/flor2.png" alt=""></p>
        <style>
        table{
            border: 2px #0C5D55 dashed;
            width: 500px;
            margin: auto;
            text-align: center;
            font-family: helvetica;
        }
        table th{
            background-color:#0C5D55;
            color: white;
        }
        table td{
            border: 1px #0C5D55 solid;
        }
    </style>
    <table>
    <tr>
            <th>ID</th>
            <th>FOTO</th>
            <th>Nombre Producto</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Eliminar</th>
        </tr>
        <tr>
        <?php
        include "conexion.php";
       
        $todos_datos = "SELECT * FROM productos ORDER BY id ASC";

 $resultado = mysqli_query($conectar, $todos_datos);
    while($fila = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
        <td><?php echo $fila["id"]?></td>
        <td class="foto"><img class="fotoflor" src="<?php echo $fila["ruta"]?>" alt=""></td>
        <td><?php echo $fila["nombre"]?></td>
        <td><?php echo $fila["descripcion"]?></td>
        <td><?php echo $fila["precio"]?></td>
        <td><a href="#" onClick="validar('eliminarproducto.php?id=<?php echo $fila["id"]; ?>')"><img src="imagenes/basura.jpg" alt=""></a></td>
        </tr>
        <?php
    }
 ?>
        </tr>
    </table><br><br>
    <a class="btn_amar2"  href="productos.php">Agregar Productos</a>
    </div>
    </div>
    </div>
    </div>
           </div>
           </div>
           </div>
           </div>
        </div>
    </div>
    </center>
    <br><br><br><br><br>
    <?php include '../abajo.php';?>
</body>
<script>
        function validar(url){
            var eliminar = confirm("Realmente desea ELIMINAR el USUARIO");
            if(eliminar == true){
                window.location = url;
            }
        }
    </script>
</html>