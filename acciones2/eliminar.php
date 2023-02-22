<?php 
$id=$_GET['id'];
include '../config/bd2.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index2.php?eliminar=success');
}else{
    header('location:../index2.php?eliminar=error');
}
?>