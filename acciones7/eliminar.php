<?php 
$id=$_GET['id'];
include '../config/bd7.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index7.php?eliminar=success');
}else{
    header('location:../index7.php?eliminar=error');
}
?>