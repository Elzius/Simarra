<?php 
$id=$_GET['id'];
include '../config/bd4.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index4.php?eliminar=success');
}else{
    header('location:../index4.php?eliminar=error');
}
?>