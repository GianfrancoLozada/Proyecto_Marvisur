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
<form name="Mantenimiento" action="mantenimientoDest.php" method="post">
<table border="1">

<tr>

<td colspan="4"align="center"><label>Destinatario</label></td>
</tr>

<tr><td colspan="4"align="center"><label>Registrar Nuevo Destinatario </label></td></tr>
<tr>
	<td><label>Cod. Destinatario</label></td><td><input type="Char" value=" " maxlength="11" name="Co_De" maxlength="40" size="10"></td>

	<td><label>Nombre Destinatario</label></td><td><input type="Varchar" value="" maxlength="40" name="No_De" maxlength="40" size="10"></td>
</tr>
	<td><label>Telefono Destinatario</label></td><td><input type="Char" value="" maxlength="30" name="Te_De" maxlength="40" size="10"></td>
<tr>

</tr>

<tr><td colspan="4" align="center">
<input type="submit" value="Limpiar" name="limpiardatosDest" >
<input type="submit" value="Ingresar" name="grabardatosDest" >
<input type="submit" value="Modificar" name="modificardatosDest" >
<input type="submit" value="Eliminar" name="eliminardatosDest">
</td>
</tr>

<tr><td colspan="4"><label>Listado de Destinatarios </label></td></tr>

<tr>
	<td><label>Código Destinatario</label></td>
	<td><label>Nombre</label></td>
	<td><label>Telefono</label></td>
</tr>


<?php 
    $sql="call sp_select_destinatario";
    $result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> 
	<td><?php echo $mostrar['codigo_dest'] ?>
	<td><?php echo $mostrar['nombre_dest'] ?>
	<td><?php echo $mostrar['telf_dest'] ?>


</tr>
<?php
}

?>

</table>
</form>
</center>
</body>
</html>
