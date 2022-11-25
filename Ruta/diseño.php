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
<form name="Mantenimiento" action="mantenimiento.php" method="post">
<table border="1">

<tr>

<td colspan="7"align="center"><label>Ruta</label></td>
</tr>

<tr><td colspan="7"align="center"><label>Registrar Nueva Ruta </label></td></tr>
<tr>
	<td><label>Codigo Ruta</label></td><td><input type="INT" value=" " maxlength="9" name="CODRUT" maxlength="40" size="9"></td>
	<td><label>Fecha Salida</label></td><td><input type="DATE" value="28-11-2022"name="FECHARUTSALI" ></td>
	<td><label>Nombre Ruta</label></td><td><input type="varchar" value="" maxlength="25" name="NOMRUT" maxlength="40" size="25"></td>

	<tr>
		<td><label>Hora Salida</label></td><td><input type="Char" value=" " maxlength="5" name="HORASALIDARUT" maxlength="40" size="5"></td>
		<td><label>Licencia</label></td><td><input type="char" value="" maxlength="9" name="LICENRUT" maxlength="40" size="9"></td>
		<td><label>Placa</label></td><td><input type="Varchar" value=" " maxlength="7" name="LICENRUT" maxlength="40" size="7"></td>
	</tr>
</tr>

<tr><td colspan="4" align="center">
<input type="submit" value="Limpiar" name="limpiardatos" >
<input type="submit" value="Ingresar" name="grabardatos" >
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
</td>
</tr>

<tr><td colspan="7"><label>Listado de Rutas </label></td></tr>
<tr>
	<td><label>Codigo</label></td>
	<td><label>Fecha Salida</label></td>
	<td><label>Nombre</label></td>
	<td><label>Hora Salisa</label></td>
	<td><label>Licencia</label></td>
	<td><label>Placa</label></td>
</tr>


<?php 
    $sql="SELECT * FROM Ruta";
    $result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> 
	<td><?php echo $mostrar['codigo_ruta'] ?>
	<td><?php echo $mostrar['fecha_salida'] ?>
	<td><?php echo $mostrar['nombre_ruta'] ?>
	<td><?php echo $mostrar['hora_salida'] ?>
	<td><?php echo $mostrar['licencia'] ?>
	<td><?php echo $mostrar['placa'] ?>


</tr>
<?php
}

?>

</table>
</form>
</center>
</body>
</html>