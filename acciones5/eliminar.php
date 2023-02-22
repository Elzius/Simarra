<?php 
$id=$_GET['id'];
include '../config/bd5.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index5.php?eliminar=success');
}else{
    header('location:../index5.php?eliminar=error');
}
?>