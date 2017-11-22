<?php 
include ('login.php');
//$nombres=$_GET['nombres'];
//$telefono=$_GET['tel'];
$id=$_GET['id'];
$tipo=$_GET['tipo'];
$fecha=$_GET['fecha'];
$ubicacion=$_GET['ubicacion'];
$persona=$_GET['persona'];
$foto=$_GET['foto'];


ejecutarSQLCommand("UPDATE infromacion SET tipo='$tipo',fecha='$fecha',ubicacion='$ubicacion',persona='$persona' WHERE id='$id'");

 ?>