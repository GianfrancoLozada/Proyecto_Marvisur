<?php

include("conexion.php");


$CodigoRemitente = $_POST["Co_Re"];
$NombreRemitente = $_POST['No_Re'];
$TelefonoRemitente = $_POST['Te_Re'];


if($_SERVER['REQUEST_METHOD'] == "POST" and isset( $_POST['limpiardatos']))
{
	header("Location: principal.php");
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset( $_POST['grabardatos']))

{
$sqlgrabar = "CALL sp_insert_guia_rem ('$CodigoRemitente', '$NombreRemitente', '$TelefonoRemitente')";
if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
	$sqlmodificar = "CALL sp_update_guia_rem('$CodigoRemitente', '$NombreRemitente', '$TelefonoRemitente')";
if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "CALL sp_delete_guia_rem('$CodigoRemitente')";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>