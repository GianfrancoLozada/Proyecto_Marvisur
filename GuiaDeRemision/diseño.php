<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.expresomarvisur.com/">MARVISUR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/Marvisur/GuiaDeRemision/principal.php">Guia De Remision</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Marvisur/Encomienda/principalEnc.php">Encomienda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Marvisur/Destinatario/principalDest.php">Destinatario</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="http://localhost/Marvisur/Remitente/principalRem.php">Remitente</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="http://localhost/Marvisur/Vehiculo/principalVehi.php">Vehiculo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center>
<form name="Mantenimiento" action="mantenimiento.php" method="post">
<table border="1">

<tr>
<td colspan="17"align="center"><label>Guia de Remision</label></td>
</tr>

<tr><td colspan="17"align="center"><label>Registrar Nueva Guia de Remision </label></td></tr>


<tr>
	<td><label>Numero de Placa</label></td><td><input type="VARCHAR" value=" " maxlength="7" name="txtplaca" maxlength="40" size="10"></td>
	<td><label>Licencia</label></td><td><input type="text" value="" maxlength="10" name="lc" maxlength="40" size="10"></td>
	<td><label>Cod. Remitente</label></td><td><input type="text" value="" maxlength="50" name="codRem"></td>
	<td><label>Cod. Destinatario</label></td><td><input type="text" value="" maxlength="11" size="11" name="codDest"></td>
	<td><label>Cod. Encomienda</label></td><td><input type="text" value="" maxlength="50" name="codEnc"></td>
	<td><label>Cod. Ruta</label></td><td><input type="text" value="" maxlength="9" size="10" name="codRut"></td>
</tr>
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
	<td><label>Dist. LLegada</label></td><td><input type="text" value="" maxlength="15" size="10" name="distLleg"></td>
	<td><label>Dom. LLegada</label></td><td><input type="text" value="" maxlength="50" name="domLleg"></td>
	<td><label>Valor Flete</label></td><td><input type="text" value="" maxlength="9" size="10" name="valFlet"></td>
	<td><label>Codigo Guia de Remision a eliminar o modificar</label></td><td><input type="INT" value=" " maxlength="3	" name="guiaRem" maxlength="40" size="5"></td>

</tr>

<tr><td colspan="17" align="center">
<input type="submit" value="Limpiar" name="limpiardatos" >
<input type="submit" value="Ingresar" name="grabardatos" >
<input type="submit" value="Modificar" name="modificardatos" >
<input type="submit" value="Eliminar" name="eliminardatos">
</td>
</tr>

<tr><td colspan="17"><label>Guias de Remision </label></td></tr>

<tr>
	<td><label>Codigo</label></td>
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
    $sql="Call sp_select_guia";
    $result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result))
{
?>
<tr> 
	<td><?php echo $mostrar['nro_guia_remision'] ?>
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
