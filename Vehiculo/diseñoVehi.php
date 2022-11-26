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
<td colspan="5"align="center"><label>Vehiculo</label></td>
</tr>

<tr><td colspan="5"align="center"><label>Registrar Nuevo Vehiculo </label></td></tr>
<tr>
	<td><label> Placa </label></td><td><input type="VarChar" value=" " maxlength="7" name="Pl" maxlength="40" size="7"></td>

	<td><label> N° Certificado</label></td><td><input type="Char" value="" maxlength="8" name="N_Ce" maxlength="40" size="8"></td>

	<tr>
		<td><label> Configuración Vehicular</label></td><td><input type="Char" value="" maxlength="3" name="Co_Ve" maxlength="40" size="3"></td>

		<td><label> Marca </label></td><td><input type="VarChar" value="" maxlength="20" name="Ma" maxlength="40" size="20"></td>
	</tr>


</tr>

<tr><td colspan="5" align="center">
<input type="submit" value="Limpiar" name="limpiardatos" >
<input type="submit" value="Ingresar" name="grabardatos" >
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
</td>
</tr>

<tr><td colspan="5"><label>Listado de Conductores</label></td></tr>

<tr>
	<td><label>Placa</label></td>
	<td><label>N° Certificado</label></td>
	<td><label>Configuración Vehicular</label></td>
	<td><label>Marca</label></td>
</tr>


<?php 
    $sql="SELECT * FROM Vehiculo";
    $result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> 
	<td><?php echo $mostrar['placa'] ?>
	<td><?php echo $mostrar['certificado'] ?>
	<td><?php echo $mostrar['conf_vehicular'] ?>
	<td><?php echo $mostrar['marca'] ?>


</tr>
<?php
}

?>

</table>
</form>
</center>
</body>
</html>
