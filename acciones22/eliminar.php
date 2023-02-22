<?php 
$id=$_GET['id'];
include '../config/bd22.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index22.php?eliminar=success');
}else{
    header('location:../index22.php?eliminar=error');
}
?>