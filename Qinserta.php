<!DOCTYPE html>
<html>
<head>
	<title>Query Insertar</title>
</head>
<body>

</body>
</html>
<?php

include 'conexion.php';                     #manda llamar el archivo conexion.php para abrir la conexion

$nombre = $_POST["txtnombre"];              #variables que guardan informacion que viene de archivo insert.php mediante el metodo POST
$apellido = $_POST["txtapellido"];
$correo = $_POST["txtcorreo"];

$insertar = "INSERT INTO usuarios (nombre,apellido,correo) VALUES ('$nombre','$apellido','$correo')"; #query para insertar informacion en la tabla usuarios guardada en variable insertar

$resultado = mysqli_query($conexion, $insertar);  #realiza una consulta a la base de datos, manda el query de conexion y el de insertar
if (!$resultado){                                         #condicion si no se cumple la consulta guardada en la variable resultado
	echo 'Error al registrarse a la base de datos';

     }
    else {                                                
     	echo 'Usuario registrado a la base de datos';
     }
     mysqli_close($conexion);


?>
<form action="inserta.php" method="POST">                       <!formulario que regresa a la pagina inserta.php>
		<br/>
        <br/>
        <input type="submit" value="Regresar" name="btnRegresar">
        
    </form>