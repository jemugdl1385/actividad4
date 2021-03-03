<!DOCTYPE html>
<html>
<head>
	<title>Query Eliminar</title>
</head>
<body>

</body>
</html>
<?php

include 'conexion.php';                  #manda llamar el archivo conexion.php para abrir la conexion

$id = $_POST["txtid"];                    #variable que guarda informacion que viene de archivo eliminar.php mediante el metodo POST


$eliminar = "DELETE FROM usuarios where id_usuarios='$id'"; #query para eliminar informacion de la tabla usuarios cuando id_usuarios sea igual al de la variable id  

$resultado = mysqli_query($conexion, $eliminar); #realiza una consulta a la base de datos, manda el query de conexion y eliminar
if (!$resultado){                                 #condicion si no se cumple la consulta guardada en la variable resultado
	echo 'Error, usuario no eliminado';            #imprime en pantalla

     }
    else {
     	echo 'Usuario eliminado correctamente';
     }
     mysqli_close($conexion);                     #cierra la conexion

?>
<form action="eliminar.php" method="POST">            <! regresa a la pagina eliminar.php>
		<br/>
        <br/>
        <input type="submit" value="Regresar" name="btnRegresar">
        
    </form>