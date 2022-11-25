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

<td colspan="4"align="center"><label>Conductor</label></td>
</tr>

<tr><td colspan="4"align="center"><label>Registrar Nuevo Conductor </label></td></tr>
<tr>
	<td><label>Licencia</label></td><td><input type="Char" value=" " maxlength="9" name="LICE" maxlength="40" size="9"></td>

	<td><label>DNI</label></td><td><input type="Char" value="" maxlength="8" name="DNICON" maxlength="40" size="8"></td>

</tr>
	<td><label>Nombre Conductor</label></td><td><input type="Varchar" value="" maxlength="30" name="NOMCON" maxlength="40" size="30"></td>
<tr>

</tr>

<tr><td colspan="4" align="center">
<input type="submit" value="Limpiar" name="limpiardatos" >
<input type="submit" value="Ingresar" name="grabardatos" >
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
</td>
</tr>

<tr><td colspan="4"><label>Listado de Conductores </label></td></tr>

<tr>
	<td><label>Licencia</label></td>
	<td><label>DNI</label></td>
	<td><label>Nombre</label></td>
</tr>


<?php 
    $sql="SELECT * FROM Conductor";
    $result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> 
	<td><?php echo $mostrar['licencia'] ?>
	<td><?php echo $mostrar['DNI'] ?>
	<td><?php echo $mostrar['nombre_cond'] ?>


</tr>
<?php
}

?>

</table>
</form>
</center>
</body>
</html>