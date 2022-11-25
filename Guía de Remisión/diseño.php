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
font-size:16px;
margin: 4px 4px;
box-shadow: 3px 3px 3px black;
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
font-size: 16px;
margin: 4px 4px;
box-shadow: 2px 2px 2px black;
}

body
{
background-color: #338DFF;
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
<td colspan="16"align="center"><label>Guia de Remision</label></td>
</tr>

<tr><td colspan="16"align="center"><label>Registrar Nueva Guia de Remision </label></td></tr>
<tr>
	<td><label>Numero de Placa</label></td><td><input type="VARCHAR" value=" " maxlength="10" name="txtplaca" maxlength="40" size="10"></td>
	<td><label>Licencia</label></td><td><input type="text" value="" maxlength="10" name="lc" maxlength="40" size="10"></td>
	<td><label>Cod. Remitente</label></td><td><input type="text" value="" maxlength="50" name="codRem"></td>
	<td><label>Cod. Destinatario</label></td><td><input type="text" value="" maxlength="11" size="11" name="codDest"></td>
	<td><label>Cod. Encomienda</label></td><td><input type="text" value="" maxlength="50" name="codEnc"></td>
	<td><label>Cod. Ruta</label></td><td><input type="text" value="" maxlength="9" size="10" name="codRut"></td>
<tr>	
	<td><label>Cod. Flete</label></td><td><input type="text" value="" maxlength="50" name="codFlet"></td>
	<td><label>Dep. Salida</label></td><td><input type="text" value="" maxlength="9" size="10" name="depSal"></td>
	<td><label>Prov. Salida</label></td><td><input type="text" value="" maxlength="50" name="provSal"></td>
	<td><label>Dist. Salida</label></td><td><input type="text" value="" maxlength="9" size="10" name="distSal"></td>
	<td><label>Dom. Salida</label></td><td><input type="text" value="" maxlength="50" name="domSal"></td>
	<td><label>Dep. LLegada</label></td><td><input type="text" value="" maxlength="9" size="10" name="depLleg"></td>
</tr>
<tr>
	<td><label>Prov. LLegada</label></td><td><input type="text" value="" maxlength="50" name="provLleg"></td>
	<td><label>Dist. LLegada</label></td><td><input type="text" value="" maxlength="9" size="10" name="distLleg"></td>
	<td><label>Dom. LLegada</label></td><td><input type="text" value="" maxlength="50" name="domLleg"></td>
	<td><label>Valor Flete</label></td><td><input type="text" value="" maxlength="9" size="10" name="valFlet"></td>
</tr>

<tr><td colspan="16" align="center">
<input type="submit" value="Limpiar" name="limpiardatos" >
<input type="submit" value="Ingresar" name="grabardatos" >
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
</td>
</tr>

<tr><td colspan="16"><label>Listado de Clientes </label></td></tr>

<tr>
	<td><label>Numero de Placa</label></td>
	<td><label>Licencia</label></td>
	<td><label>Cod. Remitente</label></td>
	<td><label>Cod. Destinatario</label></td>
	<td><label>Cod. Encomienda</label></td>
	<td><label>Cod. Ruta</label></td>
	<td><label>Cod. Flete</label></td>
	<td><label>Dep. Salida</label></td>
	<td><label>Prov. Salida</label></td>
	<td><label>Dist. Salida</label></td>
	<td><label>Dom. Salida</label></td>
	<td><label>Dep. LLegada</label></td>
	<td><label>Prov. LLegada</label></td>
	<td><label>Dist. LLegada</label></td>
	<td><label>Dom. LLegada</label></td>
	<td><label>Valor Flete</label></td>
</tr>


<?php 
    $sql="SELECT * FROM Guia_de_remision";
    $result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> 
	<td><?php echo $mostrar['placa'] ?>
	<td><?php echo $mostrar['licencia'] ?>
	<td><?php echo $mostrar['codigo_rem'] ?>
	<td><?php echo $mostrar['codigo_dest'] ?>
	<td><?php echo $mostrar['codigo_enc'] ?>
	<td><?php echo $mostrar['codigo_ruta'] ?>
	<td><?php echo $mostrar['codigo_flete'] ?>
	<td><?php echo $mostrar['departamento_salida'] ?>
	<td><?php echo $mostrar['provincia_salida'] ?>
	<td><?php echo $mostrar['distrito_salida'] ?>
	<td><?php echo $mostrar['domicilio_salida'] ?>
	<td><?php echo $mostrar['departamento_llegada'] ?>
	<td><?php echo $mostrar['provincia_llegada'] ?>
	<td><?php echo $mostrar['distrito_llegada'] ?>
	<td><?php echo $mostrar['domicilio_llegada'] ?>
	<td><?php echo $mostrar['valor_flete'] ?>

</tr>
<?php
}

?>

</table>
</form>
</center>
</body>
</html>