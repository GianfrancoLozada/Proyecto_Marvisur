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


<td colspan="10"align="center"><label>Encomienda</label></td>
</tr>

<tr><td colspan="10"align="center"><label>Registrar Nueva Encomienda </label></td></tr>
<tr>
	<td><label>Codigo Encomienda</label></td><td><input type="INT" value=" " maxlength="9" name="CODENCO" maxlength="40" size="9"></td>
	<td><label>Descripcion</label></td><td><input type="varchar" value="" maxlength="45" name="DESCRIENCO" maxlength="40" size="45"></td>
	<td><label>Cantidad</label></td><td><input type="9" value=" " maxlength="9" name="CANTENCO" maxlength="40" size="9"></td>
	<td><label>Unidad Medida</label></td><td><input type="char" value="" maxlength="15" name="UNIDADENCO" maxlength="40" size="15"></td>
	<td><label>Peso</label></td><td><input type="Float" value=" " maxlength="7" name="PESOENCO" maxlength="40" size="7"></td>
	<td><label>Unidad Peso</label></td><td><input type="CHAR" value=" " maxlength="15" name="PESOENCO" maxlength="40" size="15"></td>
	<td><label>Codigo Destinatario</label></td><td><input type="Char" value=" " maxlength="11" name="CODDESTENCO" maxlength="40" size="11"></td>
	<td><label>Codigo Remitente</label></td><td><input type="Char" value=" " maxlength="11" name="CODREMENCO" maxlength="40" size="11"></td>
	<td><label>Codigo Ruta</label></td><td><input type="INT" value=" " maxlength="9" name="CODRUTENCO" maxlength="40" size="9"></td>
</tr>

<tr><td colspan="4" align="center">
<input type="submit" value="Limpiar" name="limpiardatos" >
<input type="submit" value="Ingresar" name="grabardatos" >
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
</td>
</tr>

<tr><td colspan="10"><label>Listado de Encomiendas </label></td></tr>
<tr>
	<td><label>Codigo</label></td>
	<td><label>Descripcion</label></td>
	<td><label>Cantidad</label></td>
	<td><label>Unidad Medida</label></td>
	<td><label>Peso</label></td>
	<td><label>Unidad Peso</label></td>
	<td><label>Codigo Destinatario</label></td>
	<td><label>Codigo Remitente</label></td>
	<td><label>Codigo Ruta</label></td>
</tr>


<?php 
    $sql="SELECT * FROM Encomienda";
    $result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> 
	<td><?php echo $mostrar['codigo_enc'] ?>
	<td><?php echo $mostrar['descripcion'] ?>
	<td><?php echo $mostrar['cantidad'] ?>
	<td><?php echo $mostrar['unidad_medida'] ?>
	<td><?php echo $mostrar['peso'] ?>
	<td><?php echo $mostrar['unidad_peso'] ?>
	<td><?php echo $mostrar['codigo_dest'] ?>
	<td><?php echo $mostrar['codigo_rem'] ?>
	<td><?php echo $mostrar['codigo_ruta'] ?>


</tr>
<?php
}

?>

</table>
</form>
</center>
</body>
</html>