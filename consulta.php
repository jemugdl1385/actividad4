<?php

include 'conexion.php';   #manda llamar el archivo conexion.php para abrir la conexion
?>

<!DOCTYPE html>
<html>
<head>
	<title>Consultar datos</title> 
</head>
<body>

<table border ="1">              <! crea una tabla con borde en horizontal>
	<tr>
		
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Correo</td>
	</tr>

<?php


$consulta = "SELECT * FROM usuarios";            #query que selecciona todo de la tabla usuarios guardado en la variable consulta

$resultado = mysqli_query($conexion, $consulta);     #realiza una consulta a la base de datos, manda el query de conexion y el de consulta

     while($mostrar=mysqli_fetch_array($resultado)){  #Recupera una fila de resultados y genera un arreglo hasta que no encuentra resultados.
?>

	<tr>
		
	    <td><?php echo $mostrar['id_usuarios'] ?></td> <!imprime en pantalla lo que trae la variable mostrar>
		<td><?php echo $mostrar['nombre'] ?></td>
		<td><?php echo $mostrar['apellido'] ?></td>
		<td><?php echo $mostrar['correo'] ?></td>
		
		</tr>
		<?php 
	}
	 ?>
	</table>

</body>
</html>
<br/>
<input  type="button" value="Actualizar" onclick="document.location.reload();"> <!boton que actualiza la pagina>