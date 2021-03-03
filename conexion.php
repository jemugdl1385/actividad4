<?php


#se crean variables

	$server="localhost";            #variables de texto
	$user="root";
	$pass="";
	$db="conexion";
	$conexion = mysqli_connect($server,$user,$pass,$db);    # genera coneccion con el servidor y la base de datos
     if (!$conexion){
     
     echo 'Error al conectarse a la base de datos';         #imprime en pantalla

     }
     else {
     	#echo 'Coneccion exitosa a la base de datos';
     }
	  



	?>