<?php 
$id=$_GET['id'];
include '../config/bd16.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index16.php?eliminar=success');
}else{
    header('location:../index16.php?eliminar=error');
}
?>