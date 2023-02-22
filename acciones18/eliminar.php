<?php 
$id=$_GET['id'];
include '../config/bd18.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index18.php?eliminar=success');
}else{
    header('location:../index18.php?eliminar=error');
}
?>