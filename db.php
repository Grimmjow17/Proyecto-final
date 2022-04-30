<?php

function conn(){
$hostname = "localhost"; 
$username = "root";
$password = "";
$dbname = "bd_newsletter";

$conectar= mysqli_connect($hostname,$username,$password,$dbname);
return $conectar;
}


?>