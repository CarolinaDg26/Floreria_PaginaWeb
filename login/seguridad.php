<?php
session_start();
if($_SESSION["autentificado"]!="SI"){
    header("location:inicio.php");
    exit();
}
?>