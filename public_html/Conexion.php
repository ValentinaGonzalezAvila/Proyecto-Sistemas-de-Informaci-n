<?php
$serverName = "localhost"; //serverName\instanceName
$username = "id17908676_base";
$password = "RetoPostobon|21";
$mysqli = new mysqli($serverName, $username, $password,"id17908676_baseabandono");
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

$Nom=$_POST['anio'];
$Ide=$_POST['mes'];
$Nomr=$_POST['regional'];    
$Tel=$_POST['centro_zonal'];  
$Dir=$_POST['motivo_de_ingreso'];   
$Car=$_POST['sexo'];  
$Cor=$_POST['rango_edad']; 
$Fec=$_POST['grupo_etnico']; 
$Tip=$_POST['nacionalidad']; 
$Ciu=$_POST['cantidad_procesos'];

$mysqli ->query("INSERT into baseadmin(año,mes,regional,centro_zonal,motivo_de_ingreso,sexo,rango_edad,grupo_etnico,nacionalidad,cantidad_procesos)values('$Nom','$Ide','$Nomr','$Tel','$Dir','$Car','$Cor','$Fec','$Tip','$Ciu')");   
    header("location:index.php");
?>