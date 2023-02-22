<?php 
$id=$_GET['id'];
include '../config/bd8.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index8.php?eliminar=success');
}else{
    header('location:../index8.php?eliminar=error');
}
?>