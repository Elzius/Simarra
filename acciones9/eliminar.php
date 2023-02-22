<?php 
$id=$_GET['id'];
include '../config/bd9.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index9.php?eliminar=success');
}else{
    header('location:../index9.php?eliminar=error');
}
?>