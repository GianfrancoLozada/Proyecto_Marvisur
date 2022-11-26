<html>
<head>
<style>
input[type=button],input[type=submit]
{
background-color: white;
border: none;
color:black;
font-weight: bold;
padding: 6px 20px;
text-align: center;
font-size:20px;
margin: 4px 4px;
box-shadow: 4px 4px 4px black;
position: center;
font-family: Arial;
}

input[type="text"]
{
font-family: Arial;
color:black;
background-color:white;
padding:4px;
text-align: left;
font-size: 4px;
margin: 4px 4px;
box-shadow: 2px 2px 2px black;
}

body
{
background-color: #448DFF;
}

label
{
font-family: Arial;
padding: 4px;
font-weight: bold;
color: black;
text-align: center;
align: center;
font-size: 18px;
}

table
{
background-color: #F0EFEF;
padding: 5px 5px;
}

td
{
padding: 6px 4px;
}
</style>
</head>

<body>
<center>
<form name="Mantenimiento" action="mantenimientoRem.php" method="post">
<table border="1">

<tr>

<td colspan="6"align="center"><label>Remitente</label></td>
</tr>

<tr><td colspan="6"align="center"><label>Registrar Nuevo Remitente </label></td></tr>
<tr>
	<td><label>Cod. Remitente</label></td><td><input type="Char" value=" " maxlength="11" name="Co_Re" maxlength="40" size="11"></td>

	<td><label>Nombre Remitente</label></td><td><input type="Varchar" value="" maxlength="30" name="No_Re" maxlength="40" size="30"></td>

	<td><label>Teléfono Remitente</label></td><td><input type="char" value="" maxlength="9" name="Te_Re" maxlength="40" size="9"></td>
	
</tr>

<tr><td colspan="6" align="center">
<input type="submit" value="Limpiar" name="limpiardatosRem" >
<input type="submit" value="Ingresar" name="grabardatosRem" >
<input type="submit" value="Modificar" name="modificardatosRem" >
<input type="submit" value="Eliminar" name="eliminardatosRem">
</td>
</tr>

<tr><td colspan="6"><label>Listado de Remitentes </label></td></tr>

<tr>
	<td><label>Código Remitente</label></td>
	<td><label>Nombre</label></td>
	<td><label>Teléfono</label></td>
</tr>


<?php 
    $sql="call sp_select_remitente";
    $result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> 
	<td><?php echo $mostrar['codigo_rem'] ?>
	<td><?php echo $mostrar['nombre_rem'] ?>
	<td><?php echo $mostrar['telf_rem'] ?>
</tr>
<?php
}

?>

</table>
</form>
</center>
</body>
</html>
