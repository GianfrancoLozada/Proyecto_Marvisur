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

<td colspan="3"align="center"><label>Tipo_Destinatario</label></td>
</tr>

<tr><td colspan="3"align="center"><label>Registrar Nuevo Tipo de Destinatario </label></td></tr>
<tr>
	<td><label>Cod. Destinatario</label></td><td><input type="Char" value=" " maxlength="11" name="Co_De" maxlength="40" size="10"></td>

	<td><label>Tipo Destinatario</label></td><td><input type="Char" value="" maxlength="3" name="Ti_De" maxlength="40" size="10"></td>


</tr>

<tr><td colspan="3" align="center">
<input type="submit" value="Limpiar" name="limpiardatos" >
<input type="submit" value="Ingresar" name="grabardatos" >
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
</td>
</tr>

<tr><td colspan="3"><label>Listado de Tipos de Destinatarios </label></td></tr>

<tr>
	<td><label>Código Destinatario</label></td>
	<td><label>Tipo</label></td>

</tr>


<?php 
    $sql="SELECT * FROM Destinatario";
    $result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> 
	<td><?php echo $mostrar['codigo_dest'] ?>
	<td><?php echo $mostrar['tipo_dest'] ?>


</tr>
<?php
}

?>

</table>
</form>
</center>
</body>
</html>