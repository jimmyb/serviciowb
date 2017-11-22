<?php 
include ('login.php');
//$nombres=$_GET['nombres'];
//$telefono=$_GET['tel'];

$tipo=$_GET['tipo'];
$fecha=$_GET['fecha'];
$ubicacion=$_GET['ubicacion'];
$persona=$_GET['persona'];
$foto=$_GET['foto'];


ejecutarSQLCommand("INSERT INTO  infromacion (tipo, fecha, ubicacion, persona, foto)
VALUES ('$tipo' ,'$fecha', '$ubicacion', '$persona', '$foto')

 ON DUPLICATE KEY UPDATE `tipo`= '$tipo',`fecha`='$fecha';");

 ?>