<?php 
function conexion(){
    $con=mysqli_connect('localhost','root','','bdsimarra');
    return $con;
}

function listar($conexion){
    $sql="SELECT * FROM ci";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function insertar($conexion,$nombre,$categoria,$fecha,$tipo,$archivoBLOB){
    $sql="INSERT INTO ci(nombre,categoria,fecha,tipo,archivo) VALUES('$nombre','$categoria','$fecha','$tipo','$archivoBLOB')";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function eliminar($conexion,$id){
    $sql="DELETE from ci WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function datos($conexion,$id){
    $sql="SELECT * FROM ci WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}
function editarNombre($conexion,$id,$nombre){
    $sql="UPDATE ci SET nombre='$nombre' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarArchivo($conexion,$id,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE ci SET categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editar($conexion,$id,$nombre,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE ci SET nombre='$nombre', categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
?>