<?php 
$id=$_GET['id'];
include '../config/bd20.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index20.php?eliminar=success');
}else{
    header('location:../index20.php?eliminar=error');
}
?>