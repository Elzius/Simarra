<?php 
$id=$_GET['id'];
include '../config/bd1.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index1.php?eliminar=success');
}else{
    header('location:../index1.php?eliminar=error');
}
?>