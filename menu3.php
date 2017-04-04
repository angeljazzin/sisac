<?php
session_start(); 
include_once "conexion.php"; 
echo'<!DOCTYPE html>
<html lang="es">
    <head>
        <title>menu Principal</title>
        <meta charset="ISO 8859-15">
        <link rel="stylesheet" href="http://localhost/2017/sisac/css/estilo3.css" />
    </head>
  
    <body>
	
	
		<div id="header">

<style type="text/css">
.mycss
{
text-shadow:5px 5px 5px rgba(23,23,23,0.7); margin-left:20px; font-weight:normal;color:#FFFFFF;letter-spacing:1pt;word-spacing:9pt;font-size:49px;text-align:left;font-family:arial black, sans-serif;line-height:3;
}
</style>


<p class="mycss">Syscheck Corporativo</p>


		</div>
    <div id="opciones">
    <a href="http://localhost/2017/sisac/logout.php" class="opcion_iluminada">Salir</a>
    
	 </div>
	 <div id="body">
	 
	
       
	<center>
	<table>
    
	<h1> <center>Menú de Usuarios</center></h1>
	 	
		<tr>
			<td><a href="http://localhost/2017/sisac/empresa/registro3.php"><img src="http://localhost/2017/sisac/imagen/empresa.png" width="150" height="150"></a></td>
			<td>   </td>
			<td> <a href="http://localhost/2017/sisac/empleados/registro3.php"><img src="http://localhost/2017/sisac/imagen/cliente1.png" width="150" height="150"></td>
			<td>   </td>
			<td><a href="http://localhost/2017/sisac/equipo/registro3.php"><img src="http://localhost/2017/sisac/imagen/equipo.png" width="150" height="150"> </td>
		</tr>
		<tr>
			<td><center><h3>Empresas</h3></center></td> <td>   </td> <td><center><h3>Empleados</h3></center></td> <td>  </td> <td><center><h3>Equipos</h3></center></td>
		
		</tr>
		</tr>
			<td></td><td></td><td></td><td></td><td></td>
		<tr>
		
		</tr>
		<tr>
			<td> <a href="http://localhost/2017/sisac/soporte/registro3.php"><img src="http://localhost/2017/sisac/imagen/reporte.png" width="150" height="150"></td>
			<td>   </td>
			<td> </td>
			<td>   </td>
			<td> <a href="http://localhost/2017/sisac/equipo/Ayuda.html"><img src="http://localhost/2017/sisac/imagen/ayuda.png" width="150" height="150"></td>
		</tr>
		<tr>
			<td><center><h3>Soporte</h3></center></td> <td>   </td> <td><center></center></td> <td>  </td> <td><center><h3>Ayuda</h3></center></td>
		</tr>
		
	</table>
	
	 </center>



		</div>
<div id="footer">
	
	<center><img class="logoimage"src ="http://localhost/2017/sisac/Imagen/logo.png" width="270" height="87"></center>

	</div>
	</body>

</html>';
?>
