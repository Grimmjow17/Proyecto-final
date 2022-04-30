<?php

error_reporting(0);
include_once('db.php');
$Correo = $_POST['Correo'];

$conectar = conn();
$sql="Insert into usuarios (Correo) VALUES ('$Correo')";
$resul = mysqli_query($conectar,$sql) or trigger_error ("Query Failed! SQL - Error: ".mysqli_error($conectar));

echo "$sql";

?>
