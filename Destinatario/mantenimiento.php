<?php

include("conexion.php");
<td><label>Cod. Destinatario</label></td><td><input type="Char" value=" " maxlength="11" name="Co_De" maxlength="40" size="10"></td>

<td><label>Nombre Destinatario</label></td><td><input type="Varchar" value="" maxlength="11" name="No_De" maxlength="40" size="10"></td>



</tr>
<td><label>Telefono Destinatario</label></td><td><input type="Char" value="" maxlength="11" name="Te_De" maxlength="40" size="10"></td>
<tr>

$CodigoDestinatario = $_POST["Co_De"];
$NombreDestinatario = $_POST['No_De'];
$TelefonoDestinatario = $_POST['Te_De'];


if($_SERVER['REQUEST_METHOD'] == "POST" and isset( $_POST['limpiardatos']))
{
	header("Location: principal.php");
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset( $_POST['grabardatos']))

{
$sqlgrabar = "CALL sp_insert_guia_rem ('$CodigoDestinatario', '$NombreDestinatario', '$TelefonoDestinatario')";
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
	$sqlmodificar = "CALL sp_update_guia_rem('$CodigoDestinatario', '$NombreDestinatario', '$TelefonoDestinatario')";
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
			$sqleliminar = "CALL sp_delete_guia_rem('$CodigoDestinatario')";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>