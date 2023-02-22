<?php 
$id=$_GET['id'];
include '../config/bd10.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index10.php?eliminar=success');
}else{
    header('location:../index10.php?eliminar=error');
}
?>